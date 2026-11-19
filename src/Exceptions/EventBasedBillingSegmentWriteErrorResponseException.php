<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

use AdvancedBillingLib\ApiHelper;

/**
 * Errors returned when creating or updating a single segment. Validation problems use the per-field
 * error map; a write to a subscription's custom price point returns a `price_point` error.
 */
class EventBasedBillingSegmentWriteErrorResponseException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\EventBasedBillingSegmentSingleError|null
     */
    private $errors;

    /**
     * Returns Errors.
     * The key of the object would be a number (an index in the request array) where the error occurred. In
     * the value object, the key represents the field and the value is an array with error messages. In
     * most cases, this object would contain just one key.
     */
    public function getErrors(): ?\AdvancedBillingLib\Models\EventBasedBillingSegmentSingleError
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
    public function setErrors(?\AdvancedBillingLib\Models\EventBasedBillingSegmentSingleError $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Converts the EventBasedBillingSegmentWriteErrorResponseException object to a human-readable string
     * representation.
     *
     * @return string The string representation of the EventBasedBillingSegmentWriteErrorResponseException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'EventBasedBillingSegmentWriteErrorResponseException',
            ['errors' => $this->errors, 'additionalProperties' => $this->additionalProperties],
            parent::__toString()
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
}
