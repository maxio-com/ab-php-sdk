<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalComponentCustomPrice;
use AdvancedBillingLib\Models\ScheduledRenewalItemRequestBodyComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalItemRequestBodyComponent
 *
 * @see ScheduledRenewalItemRequestBodyComponent
 */
class ScheduledRenewalItemRequestBodyComponentBuilder
{
    /**
     * @var ScheduledRenewalItemRequestBodyComponent
     */
    private $instance;

    private function __construct(ScheduledRenewalItemRequestBodyComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Item Request Body Component Builder object.
     *
     * @param int $itemId
     */
    public static function init(int $itemId): self
    {
        return new self(new ScheduledRenewalItemRequestBodyComponent($itemId));
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
     * @param ScheduledRenewalComponentCustomPrice|null $value
     */
    public function customPrice(?ScheduledRenewalComponentCustomPrice $value): self
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
     * Initializes a new Scheduled Renewal Item Request Body Component object.
     */
    public function build(): ScheduledRenewalItemRequestBodyComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
