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

class ChjsTokenizationFailure implements \JsonSerializable
{
    /**
     * @var string
     */
    private $errors;

    /**
     * @var PaymentProfileParams|null
     */
    private $paymentProfileParams;

    /**
     * @param string $errors
     */
    public function __construct(string $errors)
    {
        $this->errors = $errors;
    }

    /**
     * Returns Errors.
     */
    public function getErrors(): string
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @required
     * @maps errors
     */
    public function setErrors(string $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Returns Payment Profile Params.
     * PCI-safe cardholder fields only. Full card numbers, CVV, and billing address are never included.
     */
    public function getPaymentProfileParams(): ?PaymentProfileParams
    {
        return $this->paymentProfileParams;
    }

    /**
     * Sets Payment Profile Params.
     * PCI-safe cardholder fields only. Full card numbers, CVV, and billing address are never included.
     *
     * @maps payment_profile_params
     */
    public function setPaymentProfileParams(?PaymentProfileParams $paymentProfileParams): void
    {
        $this->paymentProfileParams = $paymentProfileParams;
    }

    /**
     * Converts the ChjsTokenizationFailure object to a human-readable string representation.
     *
     * @return string The string representation of the ChjsTokenizationFailure object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChjsTokenizationFailure',
            [
                'errors' => $this->errors,
                'paymentProfileParams' => $this->paymentProfileParams,
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
        $json['errors']                     = $this->errors;
        if (isset($this->paymentProfileParams)) {
            $json['payment_profile_params'] = $this->paymentProfileParams;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
