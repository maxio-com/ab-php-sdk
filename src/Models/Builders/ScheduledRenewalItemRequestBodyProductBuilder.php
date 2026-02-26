<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalItemRequestBodyProduct;
use AdvancedBillingLib\Models\ScheduledRenewalProductPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalItemRequestBodyProduct
 *
 * @see ScheduledRenewalItemRequestBodyProduct
 */
class ScheduledRenewalItemRequestBodyProductBuilder
{
    /**
     * @var ScheduledRenewalItemRequestBodyProduct
     */
    private $instance;

    private function __construct(ScheduledRenewalItemRequestBodyProduct $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Item Request Body Product Builder object.
     *
     * @param int $itemId
     */
    public static function init(int $itemId): self
    {
        return new self(new ScheduledRenewalItemRequestBodyProduct($itemId));
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
     * Sets custom price field.
     *
     * @param ScheduledRenewalProductPricePoint|null $value
     */
    public function customPrice(?ScheduledRenewalProductPricePoint $value): self
    {
        $this->instance->setCustomPrice($value);
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
     * Initializes a new Scheduled Renewal Item Request Body Product object.
     */
    public function build(): ScheduledRenewalItemRequestBodyProduct
    {
        return CoreHelper::clone($this->instance);
    }
}
