<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/persistent_resource.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for the use of custom service account to run the workloads.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ServiceAccountSpec</code>
 */
class ServiceAccountSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. If true, custom user-managed service account is enforced to run
     * any workloads (for example, Vertex Jobs) on the resource. Otherwise, uses
     * the [Vertex AI Custom Code Service
     * Agent](https://cloud.google.com/vertex-ai/docs/general/access-control#service-agents).
     *
     * Generated from protobuf field <code>bool enable_custom_service_account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $enable_custom_service_account = false;
    /**
     * Optional. Required when all below conditions are met
     *  * `enable_custom_service_account` is true;
     *  * any runtime is specified via `ResourceRuntimeSpec` on creation time,
     *    for example, Ray
     * The users must have `iam.serviceAccounts.actAs` permission on this service
     * account and then the specified runtime containers will run as it.
     * Do not set this field if you want to submit jobs using custom service
     * account to this PersistentResource after creation, but only specify the
     * `service_account` inside the job.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service_account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_custom_service_account
     *           Required. If true, custom user-managed service account is enforced to run
     *           any workloads (for example, Vertex Jobs) on the resource. Otherwise, uses
     *           the [Vertex AI Custom Code Service
     *           Agent](https://cloud.google.com/vertex-ai/docs/general/access-control#service-agents).
     *     @type string $service_account
     *           Optional. Required when all below conditions are met
     *            * `enable_custom_service_account` is true;
     *            * any runtime is specified via `ResourceRuntimeSpec` on creation time,
     *              for example, Ray
     *           The users must have `iam.serviceAccounts.actAs` permission on this service
     *           account and then the specified runtime containers will run as it.
     *           Do not set this field if you want to submit jobs using custom service
     *           account to this PersistentResource after creation, but only specify the
     *           `service_account` inside the job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PersistentResource::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. If true, custom user-managed service account is enforced to run
     * any workloads (for example, Vertex Jobs) on the resource. Otherwise, uses
     * the [Vertex AI Custom Code Service
     * Agent](https://cloud.google.com/vertex-ai/docs/general/access-control#service-agents).
     *
     * Generated from protobuf field <code>bool enable_custom_service_account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return bool
     */
    public function getEnableCustomServiceAccount()
    {
        return $this->enable_custom_service_account;
    }

    /**
     * Required. If true, custom user-managed service account is enforced to run
     * any workloads (for example, Vertex Jobs) on the resource. Otherwise, uses
     * the [Vertex AI Custom Code Service
     * Agent](https://cloud.google.com/vertex-ai/docs/general/access-control#service-agents).
     *
     * Generated from protobuf field <code>bool enable_custom_service_account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableCustomServiceAccount($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_custom_service_account = $var;

        return $this;
    }

    /**
     * Optional. Required when all below conditions are met
     *  * `enable_custom_service_account` is true;
     *  * any runtime is specified via `ResourceRuntimeSpec` on creation time,
     *    for example, Ray
     * The users must have `iam.serviceAccounts.actAs` permission on this service
     * account and then the specified runtime containers will run as it.
     * Do not set this field if you want to submit jobs using custom service
     * account to this PersistentResource after creation, but only specify the
     * `service_account` inside the job.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Optional. Required when all below conditions are met
     *  * `enable_custom_service_account` is true;
     *  * any runtime is specified via `ResourceRuntimeSpec` on creation time,
     *    for example, Ray
     * The users must have `iam.serviceAccounts.actAs` permission on this service
     * account and then the specified runtime containers will run as it.
     * Do not set this field if you want to submit jobs using custom service
     * account to this PersistentResource after creation, but only specify the
     * `service_account` inside the job.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

}

