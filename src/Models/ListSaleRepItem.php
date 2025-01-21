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

class ListSaleRepItem implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $fullName;

    /**
     * @var int|null
     */
    private $subscriptionsCount;

    /**
     * @var array<string,SaleRepItemMrr>|null
     */
    private $mrrData;

    /**
     * @var bool|null
     */
    private $testMode;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Full Name.
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * Sets Full Name.
     *
     * @maps full_name
     */
    public function setFullName(?string $fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * Returns Subscriptions Count.
     */
    public function getSubscriptionsCount(): ?int
    {
        return $this->subscriptionsCount;
    }

    /**
     * Sets Subscriptions Count.
     *
     * @maps subscriptions_count
     */
    public function setSubscriptionsCount(?int $subscriptionsCount): void
    {
        $this->subscriptionsCount = $subscriptionsCount;
    }

    /**
     * Returns Mrr Data.
     *
     * @return array<string,SaleRepItemMrr>|null
     */
    public function getMrrData(): ?array
    {
        return $this->mrrData;
    }

    /**
     * Sets Mrr Data.
     *
     * @maps mrr_data
     *
     * @param array<string,SaleRepItemMrr>|null $mrrData
     */
    public function setMrrData(?array $mrrData): void
    {
        $this->mrrData = $mrrData;
    }

    /**
     * Returns Test Mode.
     */
    public function getTestMode(): ?bool
    {
        return $this->testMode;
    }

    /**
     * Sets Test Mode.
     *
     * @maps test_mode
     */
    public function setTestMode(?bool $testMode): void
    {
        $this->testMode = $testMode;
    }

    /**
     * Converts the ListSaleRepItem object to a human-readable string representation.
     *
     * @return string The string representation of the ListSaleRepItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ListSaleRepItem',
            [
                'id' => $this->id,
                'fullName' => $this->fullName,
                'subscriptionsCount' => $this->subscriptionsCount,
                'mrrData' => $this->mrrData,
                'testMode' => $this->testMode,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
        if (isset($this->id)) {
            $json['id']                  = $this->id;
        }
        if (isset($this->fullName)) {
            $json['full_name']           = $this->fullName;
        }
        if (isset($this->subscriptionsCount)) {
            $json['subscriptions_count'] = $this->subscriptionsCount;
        }
        if (isset($this->mrrData)) {
            $json['mrr_data']            = $this->mrrData;
        }
        if (isset($this->testMode)) {
            $json['test_mode']           = $this->testMode;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
