<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreditSchemeRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $creditScheme;

    /**
     * @param string $creditScheme
     */
    public function __construct(string $creditScheme)
    {
        $this->creditScheme = $creditScheme;
    }

    /**
     * Returns Credit Scheme.
     */
    public function getCreditScheme(): string
    {
        return $this->creditScheme;
    }

    /**
     * Sets Credit Scheme.
     *
     * @required
     * @maps credit_scheme
     * @factory \AdvancedBillingLib\Models\CreditScheme::checkValue
     */
    public function setCreditScheme(string $creditScheme): void
    {
        $this->creditScheme = $creditScheme;
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
        $json['credit_scheme'] = CreditScheme::checkValue($this->creditScheme);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
