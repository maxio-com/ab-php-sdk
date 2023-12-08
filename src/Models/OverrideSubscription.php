<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class OverrideSubscription implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $activatedAt;

    /**
     * @var string|null
     */
    private $canceledAt;

    /**
     * @var string|null
     */
    private $cancellationMessage;

    /**
     * @var string|null
     */
    private $expiresAt;

    /**
     * @var string|null
     */
    private $currentPeriodStartsAt;

    /**
     * Returns Activated At.
     * Can be used to record an external signup date. Chargify uses this field to record when a
     * subscription first goes active (either at signup or at trial end)
     */
    public function getActivatedAt(): ?string
    {
        return $this->activatedAt;
    }

    /**
     * Sets Activated At.
     * Can be used to record an external signup date. Chargify uses this field to record when a
     * subscription first goes active (either at signup or at trial end)
     *
     * @maps activated_at
     */
    public function setActivatedAt(?string $activatedAt): void
    {
        $this->activatedAt = $activatedAt;
    }

    /**
     * Returns Canceled At.
     * Can be used to record an external cancellation date. Chargify sets this field automatically when a
     * subscription is canceled, whether by request or via dunning.
     */
    public function getCanceledAt(): ?string
    {
        return $this->canceledAt;
    }

    /**
     * Sets Canceled At.
     * Can be used to record an external cancellation date. Chargify sets this field automatically when a
     * subscription is canceled, whether by request or via dunning.
     *
     * @maps canceled_at
     */
    public function setCanceledAt(?string $canceledAt): void
    {
        $this->canceledAt = $canceledAt;
    }

    /**
     * Returns Cancellation Message.
     * Can be used to record a reason for the original cancellation.
     */
    public function getCancellationMessage(): ?string
    {
        return $this->cancellationMessage;
    }

    /**
     * Sets Cancellation Message.
     * Can be used to record a reason for the original cancellation.
     *
     * @maps cancellation_message
     */
    public function setCancellationMessage(?string $cancellationMessage): void
    {
        $this->cancellationMessage = $cancellationMessage;
    }

    /**
     * Returns Expires At.
     * Can be used to record an external expiration date. Chargify sets this field automatically when a
     * subscription expires (ceases billing) after a prescribed amount of time.
     */
    public function getExpiresAt(): ?string
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     * Can be used to record an external expiration date. Chargify sets this field automatically when a
     * subscription expires (ceases billing) after a prescribed amount of time.
     *
     * @maps expires_at
     */
    public function setExpiresAt(?string $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * Returns Current Period Starts At.
     * Can only be used when a subscription is unbilled, which happens when a future initial billing date
     * is passed at subscription creation. The value passed must be before the current date and time.
     * Allows you to set when the period started so mid period component allocations have the correct
     * proration.
     */
    public function getCurrentPeriodStartsAt(): ?string
    {
        return $this->currentPeriodStartsAt;
    }

    /**
     * Sets Current Period Starts At.
     * Can only be used when a subscription is unbilled, which happens when a future initial billing date
     * is passed at subscription creation. The value passed must be before the current date and time.
     * Allows you to set when the period started so mid period component allocations have the correct
     * proration.
     *
     * @maps current_period_starts_at
     */
    public function setCurrentPeriodStartsAt(?string $currentPeriodStartsAt): void
    {
        $this->currentPeriodStartsAt = $currentPeriodStartsAt;
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
        if (isset($this->activatedAt)) {
            $json['activated_at']             = $this->activatedAt;
        }
        if (isset($this->canceledAt)) {
            $json['canceled_at']              = $this->canceledAt;
        }
        if (isset($this->cancellationMessage)) {
            $json['cancellation_message']     = $this->cancellationMessage;
        }
        if (isset($this->expiresAt)) {
            $json['expires_at']               = $this->expiresAt;
        }
        if (isset($this->currentPeriodStartsAt)) {
            $json['current_period_starts_at'] = $this->currentPeriodStartsAt;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
