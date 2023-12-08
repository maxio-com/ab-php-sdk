<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class ComponentPricePointErrorException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\ComponentPricePointErrorItem[]|null
     */
    private $errors;

    /**
     * Returns Errors.
     *
     * @return \AdvancedBillingLib\Models\ComponentPricePointErrorItem[]|null
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
     * @param \AdvancedBillingLib\Models\ComponentPricePointErrorItem[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }
}
