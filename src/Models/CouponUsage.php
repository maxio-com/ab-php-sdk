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

class CouponUsage implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var int|null
     */
    private $signups;

    /**
     * @var array
     */
    private $savings = [];

    /**
     * @var array
     */
    private $savingsInCents = [];

    /**
     * @var array
     */
    private $revenue = [];

    /**
     * @var int|null
     */
    private $revenueInCents;

    /**
     * Returns Id.
     * The Chargify id of the product
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Chargify id of the product
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     * Name of the product
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of the product
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Signups.
     * Number of times the coupon has been applied
     */
    public function getSignups(): ?int
    {
        return $this->signups;
    }

    /**
     * Sets Signups.
     * Number of times the coupon has been applied
     *
     * @maps signups
     */
    public function setSignups(?int $signups): void
    {
        $this->signups = $signups;
    }

    /**
     * Returns Savings.
     * Dollar amount of customer savings as a result of the coupon.
     */
    public function getSavings(): ?int
    {
        if (count($this->savings) == 0) {
            return null;
        }
        return $this->savings['value'];
    }

    /**
     * Sets Savings.
     * Dollar amount of customer savings as a result of the coupon.
     *
     * @maps savings
     */
    public function setSavings(?int $savings): void
    {
        $this->savings['value'] = $savings;
    }

    /**
     * Unsets Savings.
     * Dollar amount of customer savings as a result of the coupon.
     */
    public function unsetSavings(): void
    {
        $this->savings = [];
    }

    /**
     * Returns Savings in Cents.
     * Dollar amount of customer savings as a result of the coupon.
     */
    public function getSavingsInCents(): ?int
    {
        if (count($this->savingsInCents) == 0) {
            return null;
        }
        return $this->savingsInCents['value'];
    }

    /**
     * Sets Savings in Cents.
     * Dollar amount of customer savings as a result of the coupon.
     *
     * @maps savings_in_cents
     */
    public function setSavingsInCents(?int $savingsInCents): void
    {
        $this->savingsInCents['value'] = $savingsInCents;
    }

    /**
     * Unsets Savings in Cents.
     * Dollar amount of customer savings as a result of the coupon.
     */
    public function unsetSavingsInCents(): void
    {
        $this->savingsInCents = [];
    }

    /**
     * Returns Revenue.
     * Total revenue of the all subscriptions that have received a discount from this coupon.
     */
    public function getRevenue(): ?int
    {
        if (count($this->revenue) == 0) {
            return null;
        }
        return $this->revenue['value'];
    }

    /**
     * Sets Revenue.
     * Total revenue of the all subscriptions that have received a discount from this coupon.
     *
     * @maps revenue
     */
    public function setRevenue(?int $revenue): void
    {
        $this->revenue['value'] = $revenue;
    }

    /**
     * Unsets Revenue.
     * Total revenue of the all subscriptions that have received a discount from this coupon.
     */
    public function unsetRevenue(): void
    {
        $this->revenue = [];
    }

    /**
     * Returns Revenue in Cents.
     * Total revenue of the all subscriptions that have received a discount from this coupon.
     */
    public function getRevenueInCents(): ?int
    {
        return $this->revenueInCents;
    }

    /**
     * Sets Revenue in Cents.
     * Total revenue of the all subscriptions that have received a discount from this coupon.
     *
     * @maps revenue_in_cents
     */
    public function setRevenueInCents(?int $revenueInCents): void
    {
        $this->revenueInCents = $revenueInCents;
    }

    /**
     * Converts the CouponUsage object to a human-readable string representation.
     *
     * @return string The string representation of the CouponUsage object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CouponUsage',
            [
                'id' => $this->id,
                'name' => $this->name,
                'signups' => $this->signups,
                'savings' => $this->getSavings(),
                'savingsInCents' => $this->getSavingsInCents(),
                'revenue' => $this->getRevenue(),
                'revenueInCents' => $this->revenueInCents,
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
            $json['id']               = $this->id;
        }
        if (isset($this->name)) {
            $json['name']             = $this->name;
        }
        if (isset($this->signups)) {
            $json['signups']          = $this->signups;
        }
        if (!empty($this->savings)) {
            $json['savings']          = $this->savings['value'];
        }
        if (!empty($this->savingsInCents)) {
            $json['savings_in_cents'] = $this->savingsInCents['value'];
        }
        if (!empty($this->revenue)) {
            $json['revenue']          = $this->revenue['value'];
        }
        if (isset($this->revenueInCents)) {
            $json['revenue_in_cents'] = $this->revenueInCents;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
