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

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
