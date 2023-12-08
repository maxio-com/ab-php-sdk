<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class SubscriptionGroupUpdateErrorResponseException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\SubscriptionGroupUpdateError|null
     */
    private $errors;

    /**
     * Returns Errors.
     */
    public function getErrors(): ?\AdvancedBillingLib\Models\SubscriptionGroupUpdateError
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     */
    public function setErrors(?\AdvancedBillingLib\Models\SubscriptionGroupUpdateError $errors): void
    {
        $this->errors = $errors;
    }
}
