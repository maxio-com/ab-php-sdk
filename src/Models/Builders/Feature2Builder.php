<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Feature2;
use Core\Utils\CoreHelper;

/**
 * Builder for model Feature2
 *
 * @see Feature2
 */
class Feature2Builder
{
    /**
     * @var Feature2
     */
    private $instance;

    private function __construct(Feature2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Feature 2 Builder object.
     *
     * @param int $featureTemplateId
     */
    public static function init(int $featureTemplateId): self
    {
        return new self(new Feature2($featureTemplateId));
    }

    /**
     * Sets value field.
     *
     * @param string|null $value
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets periodicity interval field.
     *
     * @param int|null $value
     */
    public function periodicityInterval(?int $value): self
    {
        $this->instance->setPeriodicityInterval($value);
        return $this;
    }

    /**
     * Unsets periodicity interval field.
     */
    public function unsetPeriodicityInterval(): self
    {
        $this->instance->unsetPeriodicityInterval();
        return $this;
    }

    /**
     * Sets periodicity unit field.
     *
     * @param string|null $value
     */
    public function periodicityUnit(?string $value): self
    {
        $this->instance->setPeriodicityUnit($value);
        return $this;
    }

    /**
     * Unsets periodicity unit field.
     */
    public function unsetPeriodicityUnit(): self
    {
        $this->instance->unsetPeriodicityUnit();
        return $this;
    }

    /**
     * Sets price point type field.
     *
     * @param string|null $value
     */
    public function pricePointType(?string $value): self
    {
        $this->instance->setPricePointType($value);
        return $this;
    }

    /**
     * Unsets price point type field.
     */
    public function unsetPricePointType(): self
    {
        $this->instance->unsetPricePointType();
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param int|null $value
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Unsets price point id field.
     */
    public function unsetPricePointId(): self
    {
        $this->instance->unsetPricePointId();
        return $this;
    }

    /**
     * Sets propagate to subscriptions field.
     *
     * @param bool|null $value
     */
    public function propagateToSubscriptions(?bool $value): self
    {
        $this->instance->setPropagateToSubscriptions($value);
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
     * Initializes a new Feature 2 object.
     */
    public function build(): Feature2
    {
        return CoreHelper::clone($this->instance);
    }
}
