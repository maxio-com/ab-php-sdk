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

class CancellationOptions implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cancellationMessage;

    /**
     * @var string|null
     */
    private $reasonCode;

    /**
     * @var bool|null
     */
    private $cancelAtEndOfPeriod;

    /**
     * @var array
     */
    private $scheduledCancellationAt = [];

    /**
     * @var bool|null
     */
    private $refundPrepaymentAccountBalance;

    /**
     * Returns Cancellation Message.
     * An indication as to why the subscription is being canceled. For your internal use.
     */
    public function getCancellationMessage(): ?string
    {
        return $this->cancellationMessage;
    }

    /**
     * Sets Cancellation Message.
     * An indication as to why the subscription is being canceled. For your internal use.
     *
     * @maps cancellation_message
     */
    public function setCancellationMessage(?string $cancellationMessage): void
    {
        $this->cancellationMessage = $cancellationMessage;
    }

    /**
     * Returns Reason Code.
     * The reason code associated with the cancellation. Use the [List Reason
     * Codes]($e/Reason%20Codes/listReasonCodes) endpoint to retrieve the reason codes associated with your
     * site.
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     * The reason code associated with the cancellation. Use the [List Reason
     * Codes]($e/Reason%20Codes/listReasonCodes) endpoint to retrieve the reason codes associated with your
     * site.
     *
     * @maps reason_code
     */
    public function setReasonCode(?string $reasonCode): void
    {
        $this->reasonCode = $reasonCode;
    }

    /**
     * Returns Cancel at End of Period.
     * When true, the subscription is cancelled at the current period end instead of immediately. To use
     * this option, the Schedule Subscription Cancellation feature must be enabled on your site.
     */
    public function getCancelAtEndOfPeriod(): ?bool
    {
        return $this->cancelAtEndOfPeriod;
    }

    /**
     * Sets Cancel at End of Period.
     * When true, the subscription is cancelled at the current period end instead of immediately. To use
     * this option, the Schedule Subscription Cancellation feature must be enabled on your site.
     *
     * @maps cancel_at_end_of_period
     */
    public function setCancelAtEndOfPeriod(?bool $cancelAtEndOfPeriod): void
    {
        $this->cancelAtEndOfPeriod = $cancelAtEndOfPeriod;
    }

    /**
     * Returns Scheduled Cancellation At.
     * Schedules the cancellation on the provided date. This is option is not applicable for prepaid
     * subscriptions. To use this option, the Schedule Subscription Cancellation feature must be enabled on
     * your site.
     */
    public function getScheduledCancellationAt(): ?\DateTime
    {
        if (count($this->scheduledCancellationAt) == 0) {
            return null;
        }
        return $this->scheduledCancellationAt['value'];
    }

    /**
     * Sets Scheduled Cancellation At.
     * Schedules the cancellation on the provided date. This is option is not applicable for prepaid
     * subscriptions. To use this option, the Schedule Subscription Cancellation feature must be enabled on
     * your site.
     *
     * @maps scheduled_cancellation_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setScheduledCancellationAt(?\DateTime $scheduledCancellationAt): void
    {
        $this->scheduledCancellationAt['value'] = $scheduledCancellationAt;
    }

    /**
     * Unsets Scheduled Cancellation At.
     * Schedules the cancellation on the provided date. This is option is not applicable for prepaid
     * subscriptions. To use this option, the Schedule Subscription Cancellation feature must be enabled on
     * your site.
     */
    public function unsetScheduledCancellationAt(): void
    {
        $this->scheduledCancellationAt = [];
    }

    /**
     * Returns Refund Prepayment Account Balance.
     * Applies to prepaid subscriptions. When true, which is the default, the remaining prepaid balance is
     * refunded as part of cancellation processing. When false, prepaid balance is not refunded as part of
     * cancellation processing. To use this option, the Schedule Subscription Cancellation feature must be
     * enabled on your site.
     */
    public function getRefundPrepaymentAccountBalance(): ?bool
    {
        return $this->refundPrepaymentAccountBalance;
    }

    /**
     * Sets Refund Prepayment Account Balance.
     * Applies to prepaid subscriptions. When true, which is the default, the remaining prepaid balance is
     * refunded as part of cancellation processing. When false, prepaid balance is not refunded as part of
     * cancellation processing. To use this option, the Schedule Subscription Cancellation feature must be
     * enabled on your site.
     *
     * @maps refund_prepayment_account_balance
     */
    public function setRefundPrepaymentAccountBalance(?bool $refundPrepaymentAccountBalance): void
    {
        $this->refundPrepaymentAccountBalance = $refundPrepaymentAccountBalance;
    }

    /**
     * Converts the CancellationOptions object to a human-readable string representation.
     *
     * @return string The string representation of the CancellationOptions object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CancellationOptions',
            [
                'cancellationMessage' => $this->cancellationMessage,
                'reasonCode' => $this->reasonCode,
                'cancelAtEndOfPeriod' => $this->cancelAtEndOfPeriod,
                'scheduledCancellationAt' => $this->getScheduledCancellationAt(),
                'refundPrepaymentAccountBalance' => $this->refundPrepaymentAccountBalance,
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
        if (isset($this->cancellationMessage)) {
            $json['cancellation_message']              = $this->cancellationMessage;
        }
        if (isset($this->reasonCode)) {
            $json['reason_code']                       = $this->reasonCode;
        }
        if (isset($this->cancelAtEndOfPeriod)) {
            $json['cancel_at_end_of_period']           = $this->cancelAtEndOfPeriod;
        }
        if (!empty($this->scheduledCancellationAt)) {
            $json['scheduled_cancellation_at']         =
                DateTimeHelper::toRfc3339DateTime(
                    $this->scheduledCancellationAt['value']
                );
        }
        if (isset($this->refundPrepaymentAccountBalance)) {
            $json['refund_prepayment_account_balance'] = $this->refundPrepaymentAccountBalance;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
