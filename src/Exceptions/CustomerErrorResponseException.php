<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class CustomerErrorResponseException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\CustomerError|string[]|null
     */
    private $errors;

    /**
     * Returns Errors.
     *
     * @return \AdvancedBillingLib\Models\CustomerError|string[]|null
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     * @mapsBy anyOf(oneOf(CustomerError,string[]),null)
     *
     * @param \AdvancedBillingLib\Models\CustomerError|string[]|null $errors
     */
    public function setErrors($errors): void
    {
        $this->errors = $errors;
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
}
