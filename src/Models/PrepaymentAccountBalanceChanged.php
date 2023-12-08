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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
