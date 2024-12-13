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
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var int|null
     */
    private $endingBalanceInCents;

    /**
     * Returns Subscription Id.
     * The subscription id for the prepayment account
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * The subscription id for the prepayment account
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Amount in Cents.
     * The amount in cents of the prepayment that was created as a result of this payment.
     */
    public function getAmountInCents(): ?int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     * The amount in cents of the prepayment that was created as a result of this payment.
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Ending Balance in Cents.
     * The total balance of the prepayment account for this subscription including any prior prepayments
     */
    public function getEndingBalanceInCents(): ?int
    {
        return $this->endingBalanceInCents;
    }

    /**
     * Sets Ending Balance in Cents.
     * The total balance of the prepayment account for this subscription including any prior prepayments
     *
     * @maps ending_balance_in_cents
     */
    public function setEndingBalanceInCents(?int $endingBalanceInCents): void
    {
        $this->endingBalanceInCents = $endingBalanceInCents;
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
        if (isset($this->subscriptionId)) {
            $json['subscription_id']         = $this->subscriptionId;
        }
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']         = $this->amountInCents;
        }
        if (isset($this->endingBalanceInCents)) {
            $json['ending_balance_in_cents'] = $this->endingBalanceInCents;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
