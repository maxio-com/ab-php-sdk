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
 * Returned when a segment write targets a subscription's custom price point. Segments on a custom
 * price point can only be set through `custom_price` on the subscription or component endpoints.
 */
class SegmentPricePointErrorsException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\SegmentPricePointErrorDetails
     */
    private $errors;

    /**
     * @param string $reason
     * @param \AdvancedBillingLib\Http\HttpRequest $request
     * @param \AdvancedBillingLib\Http\HttpResponse $response
     * @param \AdvancedBillingLib\Models\SegmentPricePointErrorDetails $errors
     */
    public function __construct(
        string $reason,
        \AdvancedBillingLib\Http\HttpRequest $request,
        \AdvancedBillingLib\Http\HttpResponse $response,
        \AdvancedBillingLib\Models\SegmentPricePointErrorDetails $errors
    ) {
        parent::__construct($reason, $request, $response);
        $this->errors = $errors;
    }

    /**
     * Returns Errors.
     * Price-point validation error details for segment writes.
     */
    public function getErrors(): \AdvancedBillingLib\Models\SegmentPricePointErrorDetails
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Price-point validation error details for segment writes.
     *
     * @required
     * @maps errors
     */
    public function setErrors(\AdvancedBillingLib\Models\SegmentPricePointErrorDetails $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Converts the SegmentPricePointErrorsException object to a human-readable string representation.
     *
     * @return string The string representation of the SegmentPricePointErrorsException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SegmentPricePointErrorsException',
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
