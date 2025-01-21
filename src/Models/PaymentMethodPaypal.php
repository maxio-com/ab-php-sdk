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

class PaymentMethodPaypal implements \JsonSerializable
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $email
     * @param string $type
     */
    public function __construct(string $email, string $type)
    {
        $this->email = $email;
        $this->type = $type;
    }

    /**
     * Returns Email.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @required
     * @maps email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
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
     * Converts the PaymentMethodPaypal object to a human-readable string representation.
     *
     * @return string The string representation of the PaymentMethodPaypal object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaymentMethodPaypal',
            ['email' => $this->email, 'type' => $this->type, 'additionalProperties' => $this->additionalProperties]
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
        $json['email'] = $this->email;
        $json['type']  = InvoiceEventPaymentMethod::checkValue($this->type);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
