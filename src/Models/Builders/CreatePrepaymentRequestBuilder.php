<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePrepayment;
use AdvancedBillingLib\Models\CreatePrepaymentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePrepaymentRequest
 *
 * @see CreatePrepaymentRequest
 */
class CreatePrepaymentRequestBuilder
{
    /**
     * @var CreatePrepaymentRequest
     */
    private $instance;

    private function __construct(CreatePrepaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Prepayment Request Builder object.
     *
     * @param CreatePrepayment $prepayment
     */
    public static function init(CreatePrepayment $prepayment): self
    {
        return new self(new CreatePrepaymentRequest($prepayment));
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
     * Initializes a new Create Prepayment Request object.
     */
    public function build(): CreatePrepaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
