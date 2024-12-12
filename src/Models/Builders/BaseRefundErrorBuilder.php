<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BaseRefundError;
use Core\Utils\CoreHelper;

/**
 * Builder for model BaseRefundError
 *
 * @see BaseRefundError
 */
class BaseRefundErrorBuilder
{
    /**
     * @var BaseRefundError
     */
    private $instance;

    private function __construct(BaseRefundError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Base Refund Error Builder object.
     */
    public static function init(): self
    {
        return new self(new BaseRefundError());
    }

    /**
     * Sets base field.
     *
     * @param array[]|null $value
     */
    public function base(?array $value): self
    {
        $this->instance->setBase($value);
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
     * Initializes a new Base Refund Error object.
     */
    public function build(): BaseRefundError
    {
        return CoreHelper::clone($this->instance);
    }
}
