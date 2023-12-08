<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionIncludedCoupon implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var int|null
     */
    private $useCount;

    /**
     * @var int|null
     */
    private $usesAllowed;

    /**
     * @var array
     */
    private $expiresAt = [];

    /**
     * @var bool|null
     */
    private $recurring;

    /**
     * @var array
     */
    private $amountInCents = [];

    /**
     * @var array
     */
    private $percentage = [];

    /**
     * Returns Code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Use Count.
     */
    public function getUseCount(): ?int
    {
        return $this->useCount;
    }

    /**
     * Sets Use Count.
     *
     * @maps use_count
     */
    public function setUseCount(?int $useCount): void
    {
        $this->useCount = $useCount;
    }

    /**
     * Returns Uses Allowed.
     */
    public function getUsesAllowed(): ?int
    {
        return $this->usesAllowed;
    }

    /**
     * Sets Uses Allowed.
     *
     * @maps uses_allowed
     */
    public function setUsesAllowed(?int $usesAllowed): void
    {
        $this->usesAllowed = $usesAllowed;
    }

    /**
     * Returns Expires At.
     */
    public function getExpiresAt(): ?string
    {
        if (count($this->expiresAt) == 0) {
            return null;
        }
        return $this->expiresAt['value'];
    }

    /**
     * Sets Expires At.
     *
     * @maps expires_at
     */
    public function setExpiresAt(?string $expiresAt): void
    {
        $this->expiresAt['value'] = $expiresAt;
    }

    /**
     * Unsets Expires At.
     */
    public function unsetExpiresAt(): void
    {
        $this->expiresAt = [];
    }

    /**
     * Returns Recurring.
     */
    public function getRecurring(): ?bool
    {
        return $this->recurring;
    }

    /**
     * Sets Recurring.
     *
     * @maps recurring
     */
    public function setRecurring(?bool $recurring): void
    {
        $this->recurring = $recurring;
    }

    /**
     * Returns Amount in Cents.
     */
    public function getAmountInCents(): ?int
    {
        if (count($this->amountInCents) == 0) {
            return null;
        }
        return $this->amountInCents['value'];
    }

    /**
     * Sets Amount in Cents.
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?int $amountInCents): void
    {
        $this->amountInCents['value'] = $amountInCents;
    }

    /**
     * Unsets Amount in Cents.
     */
    public function unsetAmountInCents(): void
    {
        $this->amountInCents = [];
    }

    /**
     * Returns Percentage.
     */
    public function getPercentage(): ?string
    {
        if (count($this->percentage) == 0) {
            return null;
        }
        return $this->percentage['value'];
    }

    /**
     * Sets Percentage.
     *
     * @maps percentage
     */
    public function setPercentage(?string $percentage): void
    {
        $this->percentage['value'] = $percentage;
    }

    /**
     * Unsets Percentage.
     */
    public function unsetPercentage(): void
    {
        $this->percentage = [];
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
        if (isset($this->code)) {
            $json['code']            = $this->code;
        }
        if (isset($this->useCount)) {
            $json['use_count']       = $this->useCount;
        }
        if (isset($this->usesAllowed)) {
            $json['uses_allowed']    = $this->usesAllowed;
        }
        if (!empty($this->expiresAt)) {
            $json['expires_at']      = $this->expiresAt['value'];
        }
        if (isset($this->recurring)) {
            $json['recurring']       = $this->recurring;
        }
        if (!empty($this->amountInCents)) {
            $json['amount_in_cents'] = $this->amountInCents['value'];
        }
        if (!empty($this->percentage)) {
            $json['percentage']      = $this->percentage['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
