<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PrepaymentAccountBalanceChanged implements \JsonSerializable
{
    /**
     * @var string
     */
    private $reason;

    /**
     * @var int
     */
    private $prepaymentAccountBalanceInCents;

    /**
     * @var int
     */
    private $prepaymentBalanceChangeInCents;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @param string $reason
     * @param int $prepaymentAccountBalanceInCents
     * @param int $prepaymentBalanceChangeInCents
     * @param string $currencyCode
     */
    public function __construct(
        string $reason,
        int $prepaymentAccountBalanceInCents,
        int $prepaymentBalanceChangeInCents,
        string $currencyCode
    ) {
        $this->reason = $reason;
        $this->prepaymentAccountBalanceInCents = $prepaymentAccountBalanceInCents;
        $this->prepaymentBalanceChangeInCents = $prepaymentBalanceChangeInCents;
        $this->currencyCode = $currencyCode;
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
     * Returns Prepayment Balance Change in Cents.
     */
    public function getPrepaymentBalanceChangeInCents(): int
    {
        return $this->prepaymentBalanceChangeInCents;
    }

    /**
     * Sets Prepayment Balance Change in Cents.
     *
     * @required
     * @maps prepayment_balance_change_in_cents
     */
    public function setPrepaymentBalanceChangeInCents(int $prepaymentBalanceChangeInCents): void
    {
        $this->prepaymentBalanceChangeInCents = $prepaymentBalanceChangeInCents;
    }

    /**
     * Returns Currency Code.
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * Sets Currency Code.
     *
     * @required
     * @maps currency_code
     */
    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
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
        $json['prepayment_account_balance_in_cents'] = $this->prepaymentAccountBalanceInCents;
        $json['prepayment_balance_change_in_cents']  = $this->prepaymentBalanceChangeInCents;
        $json['currency_code']                       = $this->currencyCode;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
