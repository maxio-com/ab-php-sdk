<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BankAccountVerification implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $deposit1InCents;

    /**
     * @var int|null
     */
    private $deposit2InCents;

    /**
     * Returns Deposit 1 in Cents.
     */
    public function getDeposit1InCents(): ?int
    {
        return $this->deposit1InCents;
    }

    /**
     * Sets Deposit 1 in Cents.
     *
     * @maps deposit_1_in_cents
     */
    public function setDeposit1InCents(?int $deposit1InCents): void
    {
        $this->deposit1InCents = $deposit1InCents;
    }

    /**
     * Returns Deposit 2 in Cents.
     */
    public function getDeposit2InCents(): ?int
    {
        return $this->deposit2InCents;
    }

    /**
     * Sets Deposit 2 in Cents.
     *
     * @maps deposit_2_in_cents
     */
    public function setDeposit2InCents(?int $deposit2InCents): void
    {
        $this->deposit2InCents = $deposit2InCents;
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
        if (isset($this->deposit1InCents)) {
            $json['deposit_1_in_cents'] = $this->deposit1InCents;
        }
        if (isset($this->deposit2InCents)) {
            $json['deposit_2_in_cents'] = $this->deposit2InCents;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
