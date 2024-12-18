<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditSchemeRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreditSchemeRequest
 *
 * @see CreditSchemeRequest
 */
class CreditSchemeRequestBuilder
{
    /**
     * @var CreditSchemeRequest
     */
    private $instance;

    private function __construct(CreditSchemeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Credit Scheme Request Builder object.
     *
     * @param string $creditScheme
     */
    public static function init(string $creditScheme): self
    {
        return new self(new CreditSchemeRequest($creditScheme));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Credit Scheme Request object.
     */
    public function build(): CreditSchemeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
