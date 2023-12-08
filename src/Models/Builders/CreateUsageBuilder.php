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
     * Initializes a new create usage Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateUsage());
    }

    /**
     * Sets quantity field.
     */
    public function quantity(?float $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId(?string $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets billing schedule field.
     */
    public function billingSchedule(?BillingSchedule $value): self
    {
        $this->instance->setBillingSchedule($value);
        return $this;
    }

    /**
     * Initializes a new create usage object.
     */
    public function build(): CreateUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
