<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PaymentMethodBankAccount implements \JsonSerializable
{
    /**
     * @var string
     */
    private $maskedAccountNumber;

    /**
     * @var string
     */
    private $maskedRoutingNumber;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $maskedAccountNumber
     * @param string $maskedRoutingNumber
     * @param string $type
     */
    public function __construct(string $maskedAccountNumber, string $maskedRoutingNumber, string $type)
    {
        $this->maskedAccountNumber = $maskedAccountNumber;
        $this->maskedRoutingNumber = $maskedRoutingNumber;
        $this->type = $type;
    }

    /**
     * Returns Masked Account Number.
     */
    public function getMaskedAccountNumber(): string
    {
        return $this->maskedAccountNumber;
    }

    /**
     * Sets Masked Account Number.
     *
     * @required
     * @maps masked_account_number
     */
    public function setMaskedAccountNumber(string $maskedAccountNumber): void
    {
        $this->maskedAccountNumber = $maskedAccountNumber;
    }

    /**
     * Returns Masked Routing Number.
     */
    public function getMaskedRoutingNumber(): string
    {
        return $this->maskedRoutingNumber;
    }

    /**
     * Sets Masked Routing Number.
     *
     * @required
     * @maps masked_routing_number
     */
    public function setMaskedRoutingNumber(string $maskedRoutingNumber): void
    {
        $this->maskedRoutingNumber = $maskedRoutingNumber;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     * @factory \AdvancedBillingLib\Models\InvoiceEventPaymentMethod::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
        $json['masked_account_number'] = $this->maskedAccountNumber;
        $json['masked_routing_number'] = $this->maskedRoutingNumber;
        $json['type']                  = InvoiceEventPaymentMethod::checkValue($this->type);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
