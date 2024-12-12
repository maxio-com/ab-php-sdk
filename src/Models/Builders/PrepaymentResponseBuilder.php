<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Prepayment;
use AdvancedBillingLib\Models\PrepaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaymentResponse
 *
 * @see PrepaymentResponse
 */
class PrepaymentResponseBuilder
{
    /**
     * @var PrepaymentResponse
     */
    private $instance;

    private function __construct(PrepaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepayment Response Builder object.
     *
     * @param Prepayment $prepayment
     */
    public static function init(Prepayment $prepayment): self
    {
        return new self(new PrepaymentResponse($prepayment));
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
     * Initializes a new Prepayment Response object.
     */
    public function build(): PrepaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
