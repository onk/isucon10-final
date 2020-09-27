<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: xsuportal/services/bench/receiving.proto

namespace Xsuportal\Proto\Services\Bench;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>xsuportal.proto.services.bench.ReceiveBenchmarkJobResponse</code>
 */
class ReceiveBenchmarkJobResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * optional
     *
     * Generated from protobuf field <code>.xsuportal.proto.services.bench.ReceiveBenchmarkJobResponse.JobHandle job_handle = 1;</code>
     */
    private $job_handle = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Xsuportal\Proto\Services\Bench\ReceiveBenchmarkJobResponse\JobHandle $job_handle
     *           optional
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Xsuportal\Services\Bench\Receiving::initOnce();
        parent::__construct($data);
    }

    /**
     * optional
     *
     * Generated from protobuf field <code>.xsuportal.proto.services.bench.ReceiveBenchmarkJobResponse.JobHandle job_handle = 1;</code>
     * @return \Xsuportal\Proto\Services\Bench\ReceiveBenchmarkJobResponse\JobHandle
     */
    public function getJobHandle()
    {
        return $this->job_handle;
    }

    /**
     * optional
     *
     * Generated from protobuf field <code>.xsuportal.proto.services.bench.ReceiveBenchmarkJobResponse.JobHandle job_handle = 1;</code>
     * @param \Xsuportal\Proto\Services\Bench\ReceiveBenchmarkJobResponse\JobHandle $var
     * @return $this
     */
    public function setJobHandle($var)
    {
        GPBUtil::checkMessage($var, \Xsuportal\Proto\Services\Bench\ReceiveBenchmarkJobResponse_JobHandle::class);
        $this->job_handle = $var;

        return $this;
    }

}
