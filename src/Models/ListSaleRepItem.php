<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
