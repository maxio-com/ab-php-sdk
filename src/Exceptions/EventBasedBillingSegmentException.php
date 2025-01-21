<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

use AdvancedBillingLib\ApiHelper;

class EventBasedBillingSegmentException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\EventBasedBillingSegmentError
     */
    private $errors;

    /**
     * @param string $reason
     * @param \AdvancedBillingLib\Http\HttpRequest $request
     * @param \AdvancedBillingLib\Http\HttpResponse $response
     * @param \AdvancedBillingLib\Models\EventBasedBillingSegmentError $errors
     */
    public function __construct(
        string $reason,
        \AdvancedBillingLib\Http\HttpRequest $request,
        \AdvancedBillingLib\Http\HttpResponse $response,
        \AdvancedBillingLib\Models\EventBasedBillingSegmentError $errors
    ) {
        parent::__construct($reason, $request, $response);
        $this->errors = $errors;
    }

    /**
     * Returns Errors.
     */
    public function getErrors(): \AdvancedBillingLib\Models\EventBasedBillingSegmentError
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @required
     * @maps errors
     */
    public function setErrors(\AdvancedBillingLib\Models\EventBasedBillingSegmentError $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Converts the EventBasedBillingSegmentException object to a human-readable string representation.
     *
     * @return string The string representation of the EventBasedBillingSegmentException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'EventBasedBillingSegmentException',
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
