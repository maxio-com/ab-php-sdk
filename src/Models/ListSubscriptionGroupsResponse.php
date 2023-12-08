<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListSubscriptionGroupsResponse implements \JsonSerializable
{
    /**
     * @var ListSubscriptionGroupsItem[]|null
     */
    private $subscriptionGroups;

    /**
     * @var ListSubscriptionGroupsMeta|null
     */
    private $meta;

    /**
     * Returns Subscription Groups.
     *
     * @return ListSubscriptionGroupsItem[]|null
     */
    public function getSubscriptionGroups(): ?array
    {
        return $this->subscriptionGroups;
    }

    /**
     * Sets Subscription Groups.
     *
     * @maps subscription_groups
     *
     * @param ListSubscriptionGroupsItem[]|null $subscriptionGroups
     */
    public function setSubscriptionGroups(?array $subscriptionGroups): void
    {
        $this->subscriptionGroups = $subscriptionGroups;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): ?ListSubscriptionGroupsMeta
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?ListSubscriptionGroupsMeta $meta): void
    {
        $this->meta = $meta;
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
        if (isset($this->subscriptionGroups)) {
            $json['subscription_groups'] = $this->subscriptionGroups;
        }
        if (isset($this->meta)) {
            $json['meta']                = $this->meta;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
