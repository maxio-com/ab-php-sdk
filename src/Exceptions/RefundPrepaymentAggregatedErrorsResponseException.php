<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

/**
 * Errors returned on creating a refund prepayment, grouped by field, as arrays of strings.
 */
class RefundPrepaymentAggregatedErrorsResponseException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\RefundPrepaymentAggregatedError|null
     */
    private $errors;

    /**
     * Returns Errors.
     */
    public function getErrors(): ?\AdvancedBillingLib\Models\RefundPrepaymentAggregatedError
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     */
    public function setErrors(?\AdvancedBillingLib\Models\RefundPrepaymentAggregatedError $errors): void
    {
        $this->errors = $errors;
    }
}
