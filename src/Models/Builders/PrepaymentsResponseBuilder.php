<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Prepayment;
use AdvancedBillingLib\Models\PrepaymentsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaymentsResponse
 *
 * @see PrepaymentsResponse
 */
class PrepaymentsResponseBuilder
{
    /**
     * @var PrepaymentsResponse
     */
    private $instance;

    private function __construct(PrepaymentsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepayments Response Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaymentsResponse());
    }

    /**
     * Sets prepayments field.
     *
     * @param Prepayment[]|null $value
     */
    public function prepayments(?array $value): self
    {
        $this->instance->setPrepayments($value);
        return $this;
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
     * Initializes a new Prepayments Response object.
     */
    public function build(): PrepaymentsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
