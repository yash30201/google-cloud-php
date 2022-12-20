<?php
/**
 * Copyright 2022 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Firestore\Tests\System;

use Google\Cloud\Firestore\CollectionReference;
use Google\Cloud\Firestore\DocumentReference;
use Google\Cloud\Firestore\Transaction;
use Google\Protobuf\Timestamp as ProtobufTimestamp;

/**
 * @group firestore
 * @group firestore-documentandcollection
 */
class ReadTimeTest extends FirestoreTestCase
{
    private $document;

    public function set_up()
    {
        $this->document = self::$collection->add([
            'firstName' => 'John',
            'country' => 'USA'
        ]);
    }

    public function testBatchGetDocumentRequestWithDocumentReference()
    {
        // Add a new document
        $docName = uniqid('readTime-');
        $this->addDocument($docName, self::$collection);

        // Query
        $docRef = self::$collection->document($docName);

        // Query the db at 60 seconds back in the past
        $readTime = new ProtobufTimestamp();
        $readTime->setSeconds(time() - 60);
        $snapshot = $docRef->snapshot(['readTime' => $readTime]);
        $this->assertFalse($snapshot->exists());

        // Query the db at present
        $snapshot = $docRef->snapshot();
        $this->assertTrue($snapshot->exists());
    }

    public function testBatchGetDocumentRequestWithTransaction()
    {
        // Add a new document
        $docName = uniqid('readTime-');
        $this->addDocument($docName, self::$collection);

        $docRef = self::$collection->document($docName);
        self::$client->runTransaction(function (Transaction $transaction) use ($docRef) {
            // Query for time at 60 seconds in the past.
            $readTime = new ProtobufTimestamp();
            $readTime->setSeconds(time() - 60);
            $snapshot = $transaction->snapshot(
                $docRef,
                [ 'readTime' => $readTime]
            );
            $this->assertFalse($snapshot->exists());

            // Query at present
            $snapshot = $transaction->snapshot($docRef);
            $this->assertTrue($snapshot->exists());
        });
    }

    public function testBatchGetDocumentRequestWithClient()
    {
        // Add a new document
        $docName = uniqid('readTime-');
        $this->addDocument($docName, self::$collection);
        $docRef = self::$collection->document($docName);

        // Get documents at 60 seconds in the past
        $readTime = new ProtobufTimestamp();
        $readTime->setSeconds(time() - 60);
        $documentExists = false;
        $documents = self::$client->documents(
            [$docRef],
            ['readTime' => $readTime]
        );
        foreach($documents as $document) {
            if($document->exists() && $document->id() == $docName){
                $documentExists = true;
            }
        }
        $this->assertFalse($documentExists);

        // Get documents at read time
        $documentExists = false;
        $documents = self::$client->documents(
            [ $docRef ]
        );
        foreach($documents as $document) {
            if($document->exists() && $document->id() == $docName){
                $documentExists = true;
            }
        }
        $this->assertTrue($documentExists);
    }

    public function testListCollectionIdsWithClient()
    {
        $newCollectionName = uniqid('readtime-');
        $collection1 = self::$client->collection($newCollectionName);
        $docName = uniqid('tempdoc-');
        $this->addDocument($docName, $collection1);
        self::$localDeletionQueue->add($collection1);

        // Get collections at 60 seconds in the past
        $readTime = new ProtobufTimestamp();
        $readTime->setSeconds(time() - 60);
        $collections = self::$client->collections([ 'readTime' => $readTime ]);
        $collectionExists = false;
        foreach ($collections as $collectionRef) {
            if ($collectionRef->id() == $newCollectionName) {
                $collectionExists = true;
                break;
            }
        }
        $this->assertFalse($collectionExists);

        // Get collections at present
        $collections = self::$client->collections();
        $collectionExists = false;
        foreach ($collections as $collectionRef) {
            if ($collectionRef->id() == $newCollectionName) {
                $collectionExists = true;
                break;
            }
        }
        $this->assertTrue($collectionExists);
    }

    public function testListCollectionIdsWithDocumentReference()
    {
        $docName = uniqid('doc-');
        $childCollectionName = uniqid('readtime-');
        $parentCollectionName = uniqid(self::COLLECTION_NAME);
        $fullCollectionName =
            $parentCollectionName
            . '/' . $docName
            . '/' . $childCollectionName;
        $this->addCollection($fullCollectionName);
        $parentCollection = self::$client->collection($parentCollectionName);
        $docRef = $parentCollection->document($docName);

        // Get collections at 60 seconds in the past
        $readTime = new ProtobufTimestamp();
        $readTime->setSeconds(time() - 60);
        $collections = $docRef->collections([ 'readTime' => $readTime ]);
        $collectionExists = false;
        foreach ($collections as $collectionRef) {
            $v = $collectionRef->id();
            if ($collectionRef->id() == $childCollectionName) {
                $collectionExists = true;
                break;
            }
        }
        $this->assertFalse($collectionExists);

        // Get collections at present
        $collections = $docRef->collections();
        $collectionExists = false;
        foreach ($collections as $collectionRef) {
            if ($collectionRef->id() == $childCollectionName) {
                $collectionExists = true;
                break;
            }
        }
        $this->assertTrue($collectionExists);
    }

    public function testListDocuments()
    {
        $collection = self::$client->collection(uniqid(self::COLLECTION_NAME));
        self::$localDeletionQueue->add($collection);
        $collection->add(['a' => 'b']);

        // Get documents at 60 seconds back in the past
        $readTime = new ProtobufTimestamp();
        $readTime->setSeconds(time() - 60);
        $list = $collection->listDocuments([ 'readTime' => $readTime ]);
        $this->assertContainsOnlyInstancesOf(DocumentReference::class, $list);
        $this->assertCount(0, iterator_to_array($list));

        // Get documents at present
        $list = $collection->listDocuments();
        $this->assertContainsOnlyInstancesOf(DocumentReference::class, $list);
        $this->assertCount(1, iterator_to_array($list));
    }

    /**
     * @depends testBatchGetDocumentRequestWithClient
     */
    public function testRunQuery()
    {
        $collection = self::$collection;
        $query = $collection->where('country', '=', 'India');

        // Get documents at 60 seconds back in the past
        $readTime = new ProtobufTimestamp();
        $readTime->setSeconds(time() - 60);
        $snapshot = $query->documents(['readTime' => $readTime]);
        $this->assertTrue($snapshot->isEmpty());

        // Get documents at present
        $snapshot = $query->documents();
        $this->assertFalse($snapshot->isEmpty());
    }

    private function addCollection(string $collectionName)
    {
        $collection = self::$client->collection($collectionName);
        $docName = uniqid('tempdoc-');
        $this->addDocument($docName, $collection);
        self::$localDeletionQueue->add($collection);
    }
    private function addDocument(
        string $documentName,
        CollectionReference $collection
    ) {
        $firstName = "Yash";
        $country = "India";
        $docRef = $collection->document($documentName);
        $docRef->set([
            'firstName' => $firstName,
            'country' => $country
        ]);
    }
}
