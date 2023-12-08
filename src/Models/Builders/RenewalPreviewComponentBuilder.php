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
     * Initializes a new renewal preview component Builder object.
     */
    public static function init(): self
    {
        return new self(new RenewalPreviewComponent());
    }

    /**
     * Sets component id field.
     */
    public function componentId($value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets quantity field.
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId($value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Initializes a new renewal preview component object.
     */
    public function build(): RenewalPreviewComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
