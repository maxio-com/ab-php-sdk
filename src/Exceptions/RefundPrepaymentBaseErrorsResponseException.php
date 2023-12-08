<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

/**
 * Errors returned on creating a refund prepayment when bad request
 */
class RefundPrepaymentBaseErrorsResponseException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\RefundPrepaymentBaseRefundError|null
     */
    private $errors;

    /**
     * Returns Errors.
     */
    public function getErrors(): ?\AdvancedBillingLib\Models\RefundPrepaymentBaseRefundError
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     */
    public function setErrors(?\AdvancedBillingLib\Models\RefundPrepaymentBaseRefundError $errors): void
    {
        $this->errors = $errors;
    }
}
