<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupUpdateError implements \JsonSerializable
{
    /**
     * @var SubscriptionGroupMemberError[]|null
     */
    private $members;

    /**
     * Returns Members.
     *
     * @return SubscriptionGroupMemberError[]|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * Sets Members.
     *
     * @maps members
     *
     * @param SubscriptionGroupMemberError[]|null $members
     */
    public function setMembers(?array $members): void
    {
        $this->members = $members;
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
        if (isset($this->members)) {
            $json['members'] = $this->members;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
