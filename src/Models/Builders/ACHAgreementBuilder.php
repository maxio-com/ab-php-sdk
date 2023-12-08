<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ACHAgreement;
use Core\Utils\CoreHelper;

/**
 * Builder for model ACHAgreement
 *
 * @see ACHAgreement
 */
class ACHAgreementBuilder
{
    /**
     * @var ACHAgreement
     */
    private $instance;

    private function __construct(ACHAgreement $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new achagreement Builder object.
     */
    public static function init(): self
    {
        return new self(new ACHAgreement());
    }

    /**
     * Sets agreement terms field.
     */
    public function agreementTerms(?string $value): self
    {
        $this->instance->setAgreementTerms($value);
        return $this;
    }

    /**
     * Sets authorizer first name field.
     */
    public function authorizerFirstName(?string $value): self
    {
        $this->instance->setAuthorizerFirstName($value);
        return $this;
    }

    /**
     * Sets authorizer last name field.
     */
    public function authorizerLastName(?string $value): self
    {
        $this->instance->setAuthorizerLastName($value);
        return $this;
    }

    /**
     * Sets ip address field.
     */
    public function ipAddress(?string $value): self
    {
        $this->instance->setIpAddress($value);
        return $this;
    }

    /**
     * Initializes a new achagreement object.
     */
    public function build(): ACHAgreement
    {
        return CoreHelper::clone($this->instance);
    }
}
