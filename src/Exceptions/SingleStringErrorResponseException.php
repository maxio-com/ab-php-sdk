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
}
