<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RenewalPreviewComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model RenewalPreviewComponent
 *
 * @see RenewalPreviewComponent
 */
class RenewalPreviewComponentBuilder
{
    /**
     * @var RenewalPreviewComponent
     */
    private $instance;

    private function __construct(RenewalPreviewComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Renewal Preview Component Builder object.
     */
    public static function init(): self
    {
        return new self(new RenewalPreviewComponent());
    }

    /**
     * Sets component id field.
     *
     * @param string|int|null $value
     */
    public function componentId($value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets quantity field.
     *
     * @param int|null $value
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param string|int|null $value
     */
    public function pricePointId($value): self
    {
        $this->instance->setPricePointId($value);
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
     * Initializes a new Renewal Preview Component object.
     */
    public function build(): RenewalPreviewComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
