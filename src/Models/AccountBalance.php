<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class AccountBalance implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $balanceInCents;

    /**
     * @var array
     */
    private $automaticBalanceInCents = [];

    /**
     * @var array
     */
    private $remittanceBalanceInCents = [];

    /**
     * Returns Balance in Cents.
     * The balance in cents.
     */
    public function getBalanceInCents(): ?int
    {
        return $this->balanceInCents;
    }

    /**
     * Sets Balance in Cents.
     * The balance in cents.
     *
     * @maps balance_in_cents
     */
    public function setBalanceInCents(?int $balanceInCents): void
    {
        $this->balanceInCents = $balanceInCents;
    }

    /**
     * Returns Automatic Balance in Cents.
     * The automatic balance in cents.
     */
    public function getAutomaticBalanceInCents(): ?int
    {
        if (count($this->automaticBalanceInCents) == 0) {
            return null;
        }
        return $this->automaticBalanceInCents['value'];
    }

    /**
     * Sets Automatic Balance in Cents.
     * The automatic balance in cents.
     *
     * @maps automatic_balance_in_cents
     */
    public function setAutomaticBalanceInCents(?int $automaticBalanceInCents): void
    {
        $this->automaticBalanceInCents['value'] = $automaticBalanceInCents;
    }

    /**
     * Unsets Automatic Balance in Cents.
     * The automatic balance in cents.
     */
    public function unsetAutomaticBalanceInCents(): void
    {
        $this->automaticBalanceInCents = [];
    }

    /**
     * Returns Remittance Balance in Cents.
     * The remittance balance in cents.
     */
    public function getRemittanceBalanceInCents(): ?int
    {
        if (count($this->remittanceBalanceInCents) == 0) {
            return null;
        }
        return $this->remittanceBalanceInCents['value'];
    }

    /**
     * Sets Remittance Balance in Cents.
     * The remittance balance in cents.
     *
     * @maps remittance_balance_in_cents
     */
    public function setRemittanceBalanceInCents(?int $remittanceBalanceInCents): void
    {
        $this->remittanceBalanceInCents['value'] = $remittanceBalanceInCents;
    }

    /**
     * Unsets Remittance Balance in Cents.
     * The remittance balance in cents.
     */
    public function unsetRemittanceBalanceInCents(): void
    {
        $this->remittanceBalanceInCents = [];
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->balanceInCents)) {
            $json['balance_in_cents']            = $this->balanceInCents;
        }
        if (!empty($this->automaticBalanceInCents)) {
            $json['automatic_balance_in_cents']  = $this->automaticBalanceInCents['value'];
        }
        if (!empty($this->remittanceBalanceInCents)) {
            $json['remittance_balance_in_cents'] = $this->remittanceBalanceInCents['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
