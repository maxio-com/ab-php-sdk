<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SaleRep implements \JsonSerializable
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
     * @var bool|null
     */
    private $testMode;

    /**
     * @var SaleRepSubscription[]|null
     */
    private $subscriptions;

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
     * Returns Subscriptions.
     *
     * @return SaleRepSubscription[]|null
     */
    public function getSubscriptions(): ?array
    {
        return $this->subscriptions;
    }

    /**
     * Sets Subscriptions.
     *
     * @maps subscriptions
     *
     * @param SaleRepSubscription[]|null $subscriptions
     */
    public function setSubscriptions(?array $subscriptions): void
    {
        $this->subscriptions = $subscriptions;
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
        if (isset($this->testMode)) {
            $json['test_mode']           = $this->testMode;
        }
        if (isset($this->subscriptions)) {
            $json['subscriptions']       = $this->subscriptions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
