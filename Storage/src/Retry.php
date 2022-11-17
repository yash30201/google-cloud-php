<?php

namespace Google\Cloud\Storage;

require '../vendor/autoload.php';

use Google\Cloud\Core\Exception\GoogleException;
use GuzzleHttp\Client;

class Retry
{
    public function __construct()
    {
        $baseUrl = 'http://localhost:9000';
        $httpClient = new Client([
            'base_uri' => $baseUrl
        ]);
        $methodName = 'storage.notifications.insert';
        $instructions = ["return-503"];
        $caseId = $this->createRetryTestResource($httpClient, $methodName, $instructions, null);
        echo "case: $caseId\n";
        $options = [
            'restOptions' => [
                'headers' => [
                    'x-retry-test-id' => $caseId
                ]
            ]
        ];
        $storage = new StorageClient([
            'apiEndpoint' => $baseUrl . '/storage/v1',
            'suppressKeyFileNotice' => true,
            'projectId' => 'test'
        ]);
        echo "checking $methodName\n";
        $this->work($storage, $options);
        $completed = $this->checkCaseCompleted($httpClient, $caseId);
        if (!$completed) {
            echo "looks like headers weren't passed properly\n";
        } else {
            echo "success\n";
        }
    }
    private function work($storage, $options)
    {
        // Names
        $bucketName = sprintf('bucket' . time());
        $objectName = sprintf('object' . time());

        // Bucket creation
        $bucket = $storage->createBucket($bucketName);

        // Object creation and upload
        $uploadPath = tempnam(sys_get_temp_dir(), '/tests');
        $fileName = basename($uploadPath);
        file_put_contents($uploadPath, 'Sample Content: ' . rand());
        $file = fopen($uploadPath, 'r');
        $object = $bucket->upload($file, [
            'name' => $objectName,
        ]);

        // Your code

        // Cleanup
        foreach ($bucket->objects() as $object) {
            $object->delete($options);
        }
        $bucket->delete($options);
    }
    private function createRetryTestResource($client, $method, $instruction, $resources)
    {
        $data = [
            'json' => ["instructions" => [
                $method => $instruction
            ]]
        ];
        $response = $client->request('POST', 'retry_test', $data);
        $responseObj = json_decode($response->getBody()->getContents());
        return $responseObj->id;
    }
    private function checkCaseCompleted($client, $caseId)
    {
        $response = $client->request('GET', "retry_test/$caseId");
        $obj = json_decode($response->getBody()->getContents());
        // var_dump($obj);
        return $obj->completed;
    }
}
new Retry();
