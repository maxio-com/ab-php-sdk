<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\HistoricUsage;
use Core\Utils\CoreHelper;

/**
 * Builder for model HistoricUsage
 *
 * @see HistoricUsage
 */
class HistoricUsageBuilder
{
    /**
     * @var HistoricUsage
     */
    private $instance;

    private function __construct(HistoricUsage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new historic usage Builder object.
     */
    public static function init(): self
    {
        return new self(new HistoricUsage());
    }

    /**
     * Sets total usage quantity field.
     */
    public function totalUsageQuantity(?float $value): self
    {
        $this->instance->setTotalUsageQuantity($value);
        return $this;
    }

    /**
     * Sets billing period starts at field.
     */
    public function billingPeriodStartsAt(?\DateTime $value): self
    {
        $this->instance->setBillingPeriodStartsAt($value);
        return $this;
    }

    /**
     * Sets billing period ends at field.
     */
    public function billingPeriodEndsAt(?\DateTime $value): self
    {
        $this->instance->setBillingPeriodEndsAt($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new historic usage object.
     */
    public function build(): HistoricUsage
    {
        return CoreHelper::clone($this->instance);
    }
}
