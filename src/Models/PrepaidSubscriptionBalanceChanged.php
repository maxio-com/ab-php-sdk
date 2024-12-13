<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PrepaidSubscriptionBalanceChanged implements \JsonSerializable
{
    /**
     * @var string
     */
    private $reason;

    /**
     * @var int
     */
    private $currentAccountBalanceInCents;

    /**
     * @var int
     */
    private $prepaymentAccountBalanceInCents;

    /**
     * @var int
     */
    private $currentUsageAmountInCents;

    /**
     * @param string $reason
     * @param int $currentAccountBalanceInCents
     * @param int $prepaymentAccountBalanceInCents
     * @param int $currentUsageAmountInCents
     */
    public function __construct(
        string $reason,
        int $currentAccountBalanceInCents,
        int $prepaymentAccountBalanceInCents,
        int $currentUsageAmountInCents
    ) {
        $this->reason = $reason;
        $this->currentAccountBalanceInCents = $currentAccountBalanceInCents;
        $this->prepaymentAccountBalanceInCents = $prepaymentAccountBalanceInCents;
        $this->currentUsageAmountInCents = $currentUsageAmountInCents;
    }

    /**
     * Returns Reason.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     *
     * @required
     * @maps reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Current Account Balance in Cents.
     */
    public function getCurrentAccountBalanceInCents(): int
    {
        return $this->currentAccountBalanceInCents;
    }

    /**
     * Sets Current Account Balance in Cents.
     *
     * @required
     * @maps current_account_balance_in_cents
     */
    public function setCurrentAccountBalanceInCents(int $currentAccountBalanceInCents): void
    {
        $this->currentAccountBalanceInCents = $currentAccountBalanceInCents;
    }

    /**
     * Returns Prepayment Account Balance in Cents.
     */
    public function getPrepaymentAccountBalanceInCents(): int
    {
        return $this->prepaymentAccountBalanceInCents;
    }

    /**
     * Sets Prepayment Account Balance in Cents.
     *
     * @required
     * @maps prepayment_account_balance_in_cents
     */
    public function setPrepaymentAccountBalanceInCents(int $prepaymentAccountBalanceInCents): void
    {
        $this->prepaymentAccountBalanceInCents = $prepaymentAccountBalanceInCents;
    }

    /**
     * Returns Current Usage Amount in Cents.
     */
    public function getCurrentUsageAmountInCents(): int
    {
        return $this->currentUsageAmountInCents;
    }

    /**
     * Sets Current Usage Amount in Cents.
     *
     * @required
     * @maps current_usage_amount_in_cents
     */
    public function setCurrentUsageAmountInCents(int $currentUsageAmountInCents): void
    {
        $this->currentUsageAmountInCents = $currentUsageAmountInCents;
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
        $json['reason']                              = $this->reason;
        $json['current_account_balance_in_cents']    = $this->currentAccountBalanceInCents;
        $json['prepayment_account_balance_in_cents'] = $this->prepaymentAccountBalanceInCents;
        $json['current_usage_amount_in_cents']       = $this->currentUsageAmountInCents;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
