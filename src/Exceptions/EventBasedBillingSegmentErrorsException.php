<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class EventBasedBillingSegmentErrorsException extends ApiException
{
    /**
     * @var array|null
     */
    private $errors;

    /**
     * Returns Errors.
     * The key of the object would be a number (an index in the request array) where the error occurred. In
     * the value object, the key represents the field and the value is an array with error messages. In
     * most cases, this object would contain just one key.
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * The key of the object would be a number (an index in the request array) where the error occurred. In
     * the value object, the key represents the field and the value is an array with error messages. In
     * most cases, this object would contain just one key.
     *
     * @maps errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }
}
