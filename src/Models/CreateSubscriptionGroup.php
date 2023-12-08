<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class CreateSubscriptionGroup implements \JsonSerializable
{
    /**
     * @var string|int
     */
    private $subscriptionId;

    /**
     * @var int[]|null
     */
    private $memberIds;

    /**
     * @param string|int $subscriptionId
     */
    public function __construct($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Subscription Id.
     *
     * @return string|int
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @required
     * @maps subscription_id
     * @mapsBy oneOf(string,int)
     *
     * @param string|int $subscriptionId
     */
    public function setSubscriptionId($subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

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
        $json['subscription_id'] = ApiHelper::getJsonHelper()->verifyTypes($this->subscriptionId, 'oneOf(string,int)');
        if (isset($this->memberIds)) {
            $json['member_ids']  = $this->memberIds;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
