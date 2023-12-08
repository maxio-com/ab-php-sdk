<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreditAccountBalanceChanged implements \JsonSerializable
{
    /**
     * @var string
     */
    private $reason;

    /**
     * @var int
     */
    private $serviceCreditAccountBalanceInCents;

    /**
     * @var int
     */
    private $serviceCreditBalanceChangeInCents;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $atTime;

    /**
     * @param string $reason
     * @param int $serviceCreditAccountBalanceInCents
     * @param int $serviceCreditBalanceChangeInCents
     * @param string $currencyCode
     * @param string $atTime
     */
    public function __construct(
        string $reason,
        int $serviceCreditAccountBalanceInCents,
        int $serviceCreditBalanceChangeInCents,
        string $currencyCode,
        string $atTime
    ) {
        $this->reason = $reason;
        $this->serviceCreditAccountBalanceInCents = $serviceCreditAccountBalanceInCents;
        $this->serviceCreditBalanceChangeInCents = $serviceCreditBalanceChangeInCents;
        $this->currencyCode = $currencyCode;
        $this->atTime = $atTime;
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
     * Returns Service Credit Account Balance in Cents.
     */
    public function getServiceCreditAccountBalanceInCents(): int
    {
        return $this->serviceCreditAccountBalanceInCents;
    }

    /**
     * Sets Service Credit Account Balance in Cents.
     *
     * @required
     * @maps service_credit_account_balance_in_cents
     */
    public function setServiceCreditAccountBalanceInCents(int $serviceCreditAccountBalanceInCents): void
    {
        $this->serviceCreditAccountBalanceInCents = $serviceCreditAccountBalanceInCents;
    }

    /**
     * Returns Service Credit Balance Change in Cents.
     */
    public function getServiceCreditBalanceChangeInCents(): int
    {
        return $this->serviceCreditBalanceChangeInCents;
    }

    /**
     * Sets Service Credit Balance Change in Cents.
     *
     * @required
     * @maps service_credit_balance_change_in_cents
     */
    public function setServiceCreditBalanceChangeInCents(int $serviceCreditBalanceChangeInCents): void
    {
        $this->serviceCreditBalanceChangeInCents = $serviceCreditBalanceChangeInCents;
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

    /**
     * Returns At Time.
     */
    public function getAtTime(): string
    {
        return $this->atTime;
    }

    /**
     * Sets At Time.
     *
     * @required
     * @maps at_time
     */
    public function setAtTime(string $atTime): void
    {
        $this->atTime = $atTime;
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
        $json['reason']                                  = $this->reason;
        $json['service_credit_account_balance_in_cents'] = $this->serviceCreditAccountBalanceInCents;
        $json['service_credit_balance_change_in_cents']  = $this->serviceCreditBalanceChangeInCents;
        $json['currency_code']                           = $this->currencyCode;
        $json['at_time']                                 = $this->atTime;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
