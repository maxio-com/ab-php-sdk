<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class SingleStringErrorResponseException extends ApiException
{
    /**
     * @var string|null
     */
    private $errors;

    /**
     * Returns Errors.
     */
    public function getErrors(): ?string
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     */
    public function setErrors(?string $errors): void
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
