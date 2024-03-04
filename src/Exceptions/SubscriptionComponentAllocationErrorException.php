<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

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
