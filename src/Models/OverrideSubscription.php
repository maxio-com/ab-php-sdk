<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class OverrideSubscription implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $activatedAt;

    /**
     * @var \DateTime|null
     */
    private $canceledAt;

    /**
     * @var string|null
     */
    private $cancellationMessage;

    /**
     * @var \DateTime|null
     */
    private $expiresAt;

    /**
     * @var \DateTime|null
     */
    private $currentPeriodStartsAt;

    /**
     * Returns Activated At.
     * Can be used to record an external signup date. Chargify uses this field to record when a
     * subscription first goes active (either at signup or at trial end). Only ISO8601 format is supported.
     */
    public function getActivatedAt(): ?\DateTime
    {
        return $this->activatedAt;
    }

    /**
     * Sets Activated At.
     * Can be used to record an external signup date. Chargify uses this field to record when a
     * subscription first goes active (either at signup or at trial end). Only ISO8601 format is supported.
     *
     * @maps activated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setActivatedAt(?\DateTime $activatedAt): void
    {
        $this->activatedAt = $activatedAt;
    }

    /**
     * Returns Canceled At.
     * Can be used to record an external cancellation date. Chargify sets this field automatically when a
     * subscription is canceled, whether by request or via dunning. Only ISO8601 format is supported.
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }

    /**
     * Sets Canceled At.
     * Can be used to record an external cancellation date. Chargify sets this field automatically when a
     * subscription is canceled, whether by request or via dunning. Only ISO8601 format is supported.
     *
     * @maps canceled_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCanceledAt(?\DateTime $canceledAt): void
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
     * subscription expires (ceases billing) after a prescribed amount of time. Only ISO8601 format is
     * supported. This field is not supported when Multi-frequency is enabled for the Site. To change the
     * Term End of a Subscription, use the Update Subscription endpoint.
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     * Can be used to record an external expiration date. Chargify sets this field automatically when a
     * subscription expires (ceases billing) after a prescribed amount of time. Only ISO8601 format is
     * supported. This field is not supported when Multi-frequency is enabled for the Site. To change the
     * Term End of a Subscription, use the Update Subscription endpoint.
     *
     * @maps expires_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiresAt(?\DateTime $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * Returns Current Period Starts At.
     * Can only be used when a subscription is unbilled, which happens when a future initial billing date
     * is passed at subscription creation. The value passed must be before the current date and time.
     * Allows you to set when the period started so mid period component allocations have the correct
     * proration. Only ISO8601 format is supported.
     */
    public function getCurrentPeriodStartsAt(): ?\DateTime
    {
        return $this->currentPeriodStartsAt;
    }

    /**
     * Sets Current Period Starts At.
     * Can only be used when a subscription is unbilled, which happens when a future initial billing date
     * is passed at subscription creation. The value passed must be before the current date and time.
     * Allows you to set when the period started so mid period component allocations have the correct
     * proration. Only ISO8601 format is supported.
     *
     * @maps current_period_starts_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCurrentPeriodStartsAt(?\DateTime $currentPeriodStartsAt): void
    {
        $this->currentPeriodStartsAt = $currentPeriodStartsAt;
    }

    /**
     * Converts the OverrideSubscription object to a human-readable string representation.
     *
     * @return string The string representation of the OverrideSubscription object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'OverrideSubscription',
            [
                'activatedAt' => $this->activatedAt,
                'canceledAt' => $this->canceledAt,
                'cancellationMessage' => $this->cancellationMessage,
                'expiresAt' => $this->expiresAt,
                'currentPeriodStartsAt' => $this->currentPeriodStartsAt,
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
        if (isset($this->activatedAt)) {
            $json['activated_at']             = DateTimeHelper::toRfc3339DateTime($this->activatedAt);
        }
        if (isset($this->canceledAt)) {
            $json['canceled_at']              = DateTimeHelper::toRfc3339DateTime($this->canceledAt);
        }
        if (isset($this->cancellationMessage)) {
            $json['cancellation_message']     = $this->cancellationMessage;
        }
        if (isset($this->expiresAt)) {
            $json['expires_at']               = DateTimeHelper::toRfc3339DateTime($this->expiresAt);
        }
        if (isset($this->currentPeriodStartsAt)) {
            $json['current_period_starts_at'] = DateTimeHelper::toRfc3339DateTime($this->currentPeriodStartsAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
