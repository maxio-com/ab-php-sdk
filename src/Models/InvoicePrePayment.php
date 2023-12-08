<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoicePrePayment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $subscriptionId;

    /**
     * @var string|null
     */
    private $amountInCents;

    /**
     * @var string|null
     */
    private $endingBalanceInCents;

    /**
     * Returns Subscription Id.
     * The subscription id for the prepayment account
     */
    public function getSubscriptionId(): ?string
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * The subscription id for the prepayment account
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?string $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Amount in Cents.
     * The amount in cents of the prepayment that was created as a result of this payment.
     */
    public function getAmountInCents(): ?string
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     * The amount in cents of the prepayment that was created as a result of this payment.
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?string $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Ending Balance in Cents.
     * The total balance of the prepayment account for this subscription including any prior prepayments
     */
    public function getEndingBalanceInCents(): ?string
    {
        return $this->endingBalanceInCents;
    }

    /**
     * Sets Ending Balance in Cents.
     * The total balance of the prepayment account for this subscription including any prior prepayments
     *
     * @maps ending_balance_in_cents
     */
    public function setEndingBalanceInCents(?string $endingBalanceInCents): void
    {
        $this->endingBalanceInCents = $endingBalanceInCents;
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
        if (isset($this->subscriptionId)) {
            $json['subscription_id']         = $this->subscriptionId;
        }
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']         = $this->amountInCents;
        }
        if (isset($this->endingBalanceInCents)) {
            $json['ending_balance_in_cents'] = $this->endingBalanceInCents;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
