<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

use AdvancedBillingLib\ApiHelper;

class SubscriptionComponentAllocationErrorException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\SubscriptionComponentAllocationErrorItem[]|null
     */
    private $errors;

    /**
     * Returns Errors.
     *
     * @return \AdvancedBillingLib\Models\SubscriptionComponentAllocationErrorItem[]|null
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
     * @param \AdvancedBillingLib\Models\SubscriptionComponentAllocationErrorItem[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Converts the SubscriptionComponentAllocationErrorException object to a human-readable string
     * representation.
     *
     * @return string The string representation of the SubscriptionComponentAllocationErrorException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionComponentAllocationErrorException',
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
