<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

/**
 * The characteristic of a verb that expresses time flow during an event.
 *
 * Protobuf enum <code>Google\Cloud\Language\V1beta2\PartOfSpeech\Aspect</code>
 */
class PartOfSpeech_Aspect
{
    /**
     * Aspect is not applicable in the analyzed language or is not predicted.
     *
     * Generated from protobuf enum <code>ASPECT_UNKNOWN = 0;</code>
     */
    const ASPECT_UNKNOWN = 0;
    /**
     * Perfective
     *
     * Generated from protobuf enum <code>PERFECTIVE = 1;</code>
     */
    const PERFECTIVE = 1;
    /**
     * Imperfective
     *
     * Generated from protobuf enum <code>IMPERFECTIVE = 2;</code>
     */
    const IMPERFECTIVE = 2;
    /**
     * Progressive
     *
     * Generated from protobuf enum <code>PROGRESSIVE = 3;</code>
     */
    const PROGRESSIVE = 3;
}

