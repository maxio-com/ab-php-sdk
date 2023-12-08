<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class ProformaBadRequestErrorResponseException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\ProformaError|null
     */
    private $errors;

    /**
     * Returns Errors.
     */
    public function getErrors(): ?\AdvancedBillingLib\Models\ProformaError
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     */
    public function setErrors(?\AdvancedBillingLib\Models\ProformaError $errors): void
    {
        $this->errors = $errors;
    }
}
