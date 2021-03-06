<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This is a private alpha release of Cloud Bigtable replication. This feature
 * is not currently available to most Cloud Bigtable customers. This feature
 * might be changed in backward-incompatible ways and is not recommended for
 * production use. It is not subject to any SLA or deprecation policy.
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.CheckConsistency][google.bigtable.admin.v2.BigtableTableAdmin.CheckConsistency]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CheckConsistencyRequest</code>
 */
class CheckConsistencyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the Table for which to check replication consistency.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The token created using GenerateConsistencyToken for the Table.
     *
     * Generated from protobuf field <code>string consistency_token = 2;</code>
     */
    private $consistency_token = '';

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The unique name of the Table for which to check replication consistency.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the Table for which to check replication consistency.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The token created using GenerateConsistencyToken for the Table.
     *
     * Generated from protobuf field <code>string consistency_token = 2;</code>
     * @return string
     */
    public function getConsistencyToken()
    {
        return $this->consistency_token;
    }

    /**
     * The token created using GenerateConsistencyToken for the Table.
     *
     * Generated from protobuf field <code>string consistency_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConsistencyToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->consistency_token = $var;

        return $this;
    }

}

