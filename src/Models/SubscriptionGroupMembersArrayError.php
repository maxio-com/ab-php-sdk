<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupMembersArrayError implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $members;

    /**
     * @param string[] $members
     */
    public function __construct(array $members)
    {
        $this->members = $members;
    }

    /**
     * Returns Members.
     *
     * @return string[]
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    /**
     * Sets Members.
     *
     * @required
     * @maps members
     *
     * @param string[] $members
     */
    public function setMembers(array $members): void
    {
        $this->members = $members;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['members'] = $this->members;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
