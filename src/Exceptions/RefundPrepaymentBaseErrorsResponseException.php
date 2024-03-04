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
