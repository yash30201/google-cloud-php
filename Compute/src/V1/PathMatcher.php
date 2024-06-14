<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A matcher for the path portion of the URL. The BackendService from the longest-matched rule will serve the URL. If no rule was matched, the default service is used.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PathMatcher</code>
 */
class PathMatcher extends \Google\Protobuf\Internal\Message
{
    /**
     * defaultRouteAction takes effect when none of the pathRules or routeRules match. The load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. If defaultRouteAction specifies any weightedBackendServices, defaultService must not be set. Conversely if defaultService is set, defaultRouteAction cannot contain any weightedBackendServices. If defaultRouteAction is specified, don't set defaultUrlRedirect. If defaultRouteAction.weightedBackendServices is specified, don't set defaultService. URL maps for classic Application Load Balancers only support the urlRewrite action within a path matcher's defaultRouteAction.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRouteAction default_route_action = 378919466;</code>
     */
    private $default_route_action = null;
    /**
     * The full or partial URL to the BackendService resource. This URL is used if none of the pathRules or routeRules defined by this PathMatcher are matched. For example, the following are all valid URLs to a BackendService resource: - https://www.googleapis.com/compute/v1/projects/project /global/backendServices/backendService - compute/v1/projects/project/global/backendServices/backendService - global/backendServices/backendService If defaultRouteAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. However, if defaultService is specified, defaultRouteAction cannot contain any weightedBackendServices. Conversely, if defaultRouteAction specifies any weightedBackendServices, defaultService must not be specified. If defaultService is specified, then set either defaultUrlRedirect or defaultRouteAction.weightedBackendService. Don't set both. Authorization requires one or more of the following Google IAM permissions on the specified resource default_service: - compute.backendBuckets.use - compute.backendServices.use 
     *
     * Generated from protobuf field <code>optional string default_service = 370242231;</code>
     */
    private $default_service = null;
    /**
     * When none of the specified pathRules or routeRules match, the request is redirected to a URL specified by defaultUrlRedirect. If defaultUrlRedirect is specified, then set either defaultService or defaultRouteAction. Don't set both. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRedirectAction default_url_redirect = 359503338;</code>
     */
    private $default_url_redirect = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Specifies changes to request and response headers that need to take effect for the selected backend service. HeaderAction specified here are applied after the matching HttpRouteRule HeaderAction and before the HeaderAction in the UrlMap HeaderAction is not supported for load balancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpHeaderAction header_action = 328077352;</code>
     */
    private $header_action = null;
    /**
     * The name to which this PathMatcher is referred by the HostRule.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * The list of path rules. Use this list instead of routeRules when routing based on simple path matching is all that's required. The order by which path rules are specified does not matter. Matches are always done on the longest-path-first basis. For example: a pathRule with a path /a/b/c/&#42; will match before /a/b/&#42; irrespective of the order in which those paths appear in this list. Within a given pathMatcher, only one of pathRules or routeRules must be set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PathRule path_rules = 104439901;</code>
     */
    private $path_rules;
    /**
     * The list of HTTP route rules. Use this list instead of pathRules when advanced route matching and routing actions are desired. routeRules are evaluated in order of priority, from the lowest to highest number. Within a given pathMatcher, you can set only one of pathRules or routeRules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpRouteRule route_rules = 376292225;</code>
     */
    private $route_rules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\HttpRouteAction $default_route_action
     *           defaultRouteAction takes effect when none of the pathRules or routeRules match. The load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. If defaultRouteAction specifies any weightedBackendServices, defaultService must not be set. Conversely if defaultService is set, defaultRouteAction cannot contain any weightedBackendServices. If defaultRouteAction is specified, don't set defaultUrlRedirect. If defaultRouteAction.weightedBackendServices is specified, don't set defaultService. URL maps for classic Application Load Balancers only support the urlRewrite action within a path matcher's defaultRouteAction.
     *     @type string $default_service
     *           The full or partial URL to the BackendService resource. This URL is used if none of the pathRules or routeRules defined by this PathMatcher are matched. For example, the following are all valid URLs to a BackendService resource: - https://www.googleapis.com/compute/v1/projects/project /global/backendServices/backendService - compute/v1/projects/project/global/backendServices/backendService - global/backendServices/backendService If defaultRouteAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. However, if defaultService is specified, defaultRouteAction cannot contain any weightedBackendServices. Conversely, if defaultRouteAction specifies any weightedBackendServices, defaultService must not be specified. If defaultService is specified, then set either defaultUrlRedirect or defaultRouteAction.weightedBackendService. Don't set both. Authorization requires one or more of the following Google IAM permissions on the specified resource default_service: - compute.backendBuckets.use - compute.backendServices.use 
     *     @type \Google\Cloud\Compute\V1\HttpRedirectAction $default_url_redirect
     *           When none of the specified pathRules or routeRules match, the request is redirected to a URL specified by defaultUrlRedirect. If defaultUrlRedirect is specified, then set either defaultService or defaultRouteAction. Don't set both. Not supported when the URL map is bound to a target gRPC proxy.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type \Google\Cloud\Compute\V1\HttpHeaderAction $header_action
     *           Specifies changes to request and response headers that need to take effect for the selected backend service. HeaderAction specified here are applied after the matching HttpRouteRule HeaderAction and before the HeaderAction in the UrlMap HeaderAction is not supported for load balancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *     @type string $name
     *           The name to which this PathMatcher is referred by the HostRule.
     *     @type array<\Google\Cloud\Compute\V1\PathRule>|\Google\Protobuf\Internal\RepeatedField $path_rules
     *           The list of path rules. Use this list instead of routeRules when routing based on simple path matching is all that's required. The order by which path rules are specified does not matter. Matches are always done on the longest-path-first basis. For example: a pathRule with a path /a/b/c/&#42; will match before /a/b/&#42; irrespective of the order in which those paths appear in this list. Within a given pathMatcher, only one of pathRules or routeRules must be set.
     *     @type array<\Google\Cloud\Compute\V1\HttpRouteRule>|\Google\Protobuf\Internal\RepeatedField $route_rules
     *           The list of HTTP route rules. Use this list instead of pathRules when advanced route matching and routing actions are desired. routeRules are evaluated in order of priority, from the lowest to highest number. Within a given pathMatcher, you can set only one of pathRules or routeRules.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * defaultRouteAction takes effect when none of the pathRules or routeRules match. The load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. If defaultRouteAction specifies any weightedBackendServices, defaultService must not be set. Conversely if defaultService is set, defaultRouteAction cannot contain any weightedBackendServices. If defaultRouteAction is specified, don't set defaultUrlRedirect. If defaultRouteAction.weightedBackendServices is specified, don't set defaultService. URL maps for classic Application Load Balancers only support the urlRewrite action within a path matcher's defaultRouteAction.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRouteAction default_route_action = 378919466;</code>
     * @return \Google\Cloud\Compute\V1\HttpRouteAction|null
     */
    public function getDefaultRouteAction()
    {
        return $this->default_route_action;
    }

    public function hasDefaultRouteAction()
    {
        return isset($this->default_route_action);
    }

    public function clearDefaultRouteAction()
    {
        unset($this->default_route_action);
    }

    /**
     * defaultRouteAction takes effect when none of the pathRules or routeRules match. The load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. If defaultRouteAction specifies any weightedBackendServices, defaultService must not be set. Conversely if defaultService is set, defaultRouteAction cannot contain any weightedBackendServices. If defaultRouteAction is specified, don't set defaultUrlRedirect. If defaultRouteAction.weightedBackendServices is specified, don't set defaultService. URL maps for classic Application Load Balancers only support the urlRewrite action within a path matcher's defaultRouteAction.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRouteAction default_route_action = 378919466;</code>
     * @param \Google\Cloud\Compute\V1\HttpRouteAction $var
     * @return $this
     */
    public function setDefaultRouteAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpRouteAction::class);
        $this->default_route_action = $var;

        return $this;
    }

    /**
     * The full or partial URL to the BackendService resource. This URL is used if none of the pathRules or routeRules defined by this PathMatcher are matched. For example, the following are all valid URLs to a BackendService resource: - https://www.googleapis.com/compute/v1/projects/project /global/backendServices/backendService - compute/v1/projects/project/global/backendServices/backendService - global/backendServices/backendService If defaultRouteAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. However, if defaultService is specified, defaultRouteAction cannot contain any weightedBackendServices. Conversely, if defaultRouteAction specifies any weightedBackendServices, defaultService must not be specified. If defaultService is specified, then set either defaultUrlRedirect or defaultRouteAction.weightedBackendService. Don't set both. Authorization requires one or more of the following Google IAM permissions on the specified resource default_service: - compute.backendBuckets.use - compute.backendServices.use 
     *
     * Generated from protobuf field <code>optional string default_service = 370242231;</code>
     * @return string
     */
    public function getDefaultService()
    {
        return isset($this->default_service) ? $this->default_service : '';
    }

    public function hasDefaultService()
    {
        return isset($this->default_service);
    }

    public function clearDefaultService()
    {
        unset($this->default_service);
    }

    /**
     * The full or partial URL to the BackendService resource. This URL is used if none of the pathRules or routeRules defined by this PathMatcher are matched. For example, the following are all valid URLs to a BackendService resource: - https://www.googleapis.com/compute/v1/projects/project /global/backendServices/backendService - compute/v1/projects/project/global/backendServices/backendService - global/backendServices/backendService If defaultRouteAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. However, if defaultService is specified, defaultRouteAction cannot contain any weightedBackendServices. Conversely, if defaultRouteAction specifies any weightedBackendServices, defaultService must not be specified. If defaultService is specified, then set either defaultUrlRedirect or defaultRouteAction.weightedBackendService. Don't set both. Authorization requires one or more of the following Google IAM permissions on the specified resource default_service: - compute.backendBuckets.use - compute.backendServices.use 
     *
     * Generated from protobuf field <code>optional string default_service = 370242231;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultService($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_service = $var;

        return $this;
    }

    /**
     * When none of the specified pathRules or routeRules match, the request is redirected to a URL specified by defaultUrlRedirect. If defaultUrlRedirect is specified, then set either defaultService or defaultRouteAction. Don't set both. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRedirectAction default_url_redirect = 359503338;</code>
     * @return \Google\Cloud\Compute\V1\HttpRedirectAction|null
     */
    public function getDefaultUrlRedirect()
    {
        return $this->default_url_redirect;
    }

    public function hasDefaultUrlRedirect()
    {
        return isset($this->default_url_redirect);
    }

    public function clearDefaultUrlRedirect()
    {
        unset($this->default_url_redirect);
    }

    /**
     * When none of the specified pathRules or routeRules match, the request is redirected to a URL specified by defaultUrlRedirect. If defaultUrlRedirect is specified, then set either defaultService or defaultRouteAction. Don't set both. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRedirectAction default_url_redirect = 359503338;</code>
     * @param \Google\Cloud\Compute\V1\HttpRedirectAction $var
     * @return $this
     */
    public function setDefaultUrlRedirect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpRedirectAction::class);
        $this->default_url_redirect = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Specifies changes to request and response headers that need to take effect for the selected backend service. HeaderAction specified here are applied after the matching HttpRouteRule HeaderAction and before the HeaderAction in the UrlMap HeaderAction is not supported for load balancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpHeaderAction header_action = 328077352;</code>
     * @return \Google\Cloud\Compute\V1\HttpHeaderAction|null
     */
    public function getHeaderAction()
    {
        return $this->header_action;
    }

    public function hasHeaderAction()
    {
        return isset($this->header_action);
    }

    public function clearHeaderAction()
    {
        unset($this->header_action);
    }

    /**
     * Specifies changes to request and response headers that need to take effect for the selected backend service. HeaderAction specified here are applied after the matching HttpRouteRule HeaderAction and before the HeaderAction in the UrlMap HeaderAction is not supported for load balancers that have their loadBalancingScheme set to EXTERNAL. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpHeaderAction header_action = 328077352;</code>
     * @param \Google\Cloud\Compute\V1\HttpHeaderAction $var
     * @return $this
     */
    public function setHeaderAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpHeaderAction::class);
        $this->header_action = $var;

        return $this;
    }

    /**
     * The name to which this PathMatcher is referred by the HostRule.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name to which this PathMatcher is referred by the HostRule.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The list of path rules. Use this list instead of routeRules when routing based on simple path matching is all that's required. The order by which path rules are specified does not matter. Matches are always done on the longest-path-first basis. For example: a pathRule with a path /a/b/c/&#42; will match before /a/b/&#42; irrespective of the order in which those paths appear in this list. Within a given pathMatcher, only one of pathRules or routeRules must be set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PathRule path_rules = 104439901;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPathRules()
    {
        return $this->path_rules;
    }

    /**
     * The list of path rules. Use this list instead of routeRules when routing based on simple path matching is all that's required. The order by which path rules are specified does not matter. Matches are always done on the longest-path-first basis. For example: a pathRule with a path /a/b/c/&#42; will match before /a/b/&#42; irrespective of the order in which those paths appear in this list. Within a given pathMatcher, only one of pathRules or routeRules must be set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PathRule path_rules = 104439901;</code>
     * @param array<\Google\Cloud\Compute\V1\PathRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPathRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\PathRule::class);
        $this->path_rules = $arr;

        return $this;
    }

    /**
     * The list of HTTP route rules. Use this list instead of pathRules when advanced route matching and routing actions are desired. routeRules are evaluated in order of priority, from the lowest to highest number. Within a given pathMatcher, you can set only one of pathRules or routeRules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpRouteRule route_rules = 376292225;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRouteRules()
    {
        return $this->route_rules;
    }

    /**
     * The list of HTTP route rules. Use this list instead of pathRules when advanced route matching and routing actions are desired. routeRules are evaluated in order of priority, from the lowest to highest number. Within a given pathMatcher, you can set only one of pathRules or routeRules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpRouteRule route_rules = 376292225;</code>
     * @param array<\Google\Cloud\Compute\V1\HttpRouteRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRouteRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\HttpRouteRule::class);
        $this->route_rules = $arr;

        return $this;
    }

}

