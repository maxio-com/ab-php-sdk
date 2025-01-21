<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
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
     * Converts the PaymentMethodBankAccount object to a human-readable string representation.
     *
     * @return string The string representation of the PaymentMethodBankAccount object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaymentMethodBankAccount',
            [
                'maskedAccountNumber' => $this->maskedAccountNumber,
                'maskedRoutingNumber' => $this->maskedRoutingNumber,
                'type' => $this->type,
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
        $json['masked_account_number'] = $this->maskedAccountNumber;
        $json['masked_routing_number'] = $this->maskedRoutingNumber;
        $json['type']                  = InvoiceEventPaymentMethod::checkValue($this->type);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
