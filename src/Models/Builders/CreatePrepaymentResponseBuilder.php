<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatedPrepayment;
use AdvancedBillingLib\Models\CreatePrepaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePrepaymentResponse
 *
 * @see CreatePrepaymentResponse
 */
class CreatePrepaymentResponseBuilder
{
    /**
     * @var CreatePrepaymentResponse
     */
    private $instance;

    private function __construct(CreatePrepaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Prepayment Response Builder object.
     *
     * @param CreatedPrepayment $prepayment
     */
    public static function init(CreatedPrepayment $prepayment): self
    {
        return new self(new CreatePrepaymentResponse($prepayment));
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
     * Initializes a new Create Prepayment Response object.
     */
    public function build(): CreatePrepaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
