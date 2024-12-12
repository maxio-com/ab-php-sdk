<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BillingSchedule;
use AdvancedBillingLib\Models\CreateUsage;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateUsage
 *
 * @see CreateUsage
 */
class CreateUsageBuilder
{
    /**
     * @var CreateUsage
     */
    private $instance;

    private function __construct(CreateUsage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Usage Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateUsage());
    }

    /**
     * Sets quantity field.
     *
     * @param float|null $value
     */
    public function quantity(?float $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param string|null $value
     */
    public function pricePointId(?string $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets billing schedule field.
     *
     * @param BillingSchedule|null $value
     */
    public function billingSchedule(?BillingSchedule $value): self
    {
        $this->instance->setBillingSchedule($value);
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
     * Initializes a new Create Usage object.
     */
    public function build(): CreateUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
