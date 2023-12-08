<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateSubscriptionGroup implements \JsonSerializable
{
    /**
     * @var int[]|null
     */
    private $memberIds;

    /**
     * Returns Member Ids.
     *
     * @return int[]|null
     */
    public function getMemberIds(): ?array
    {
        return $this->memberIds;
    }

    /**
     * Sets Member Ids.
     *
     * @maps member_ids
     *
     * @param int[]|null $memberIds
     */
    public function setMemberIds(?array $memberIds): void
    {
        $this->memberIds = $memberIds;
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
        if (isset($this->memberIds)) {
            $json['member_ids'] = $this->memberIds;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
