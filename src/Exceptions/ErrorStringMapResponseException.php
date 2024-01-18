<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class ErrorStringMapResponseException extends ApiException
{
    /**
     * @var array<string,string>|null
     */
    private $errors;

    /**
     * Returns Errors.
     *
     * @return array<string,string>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     *
     * @param array<string,string>|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }
}
