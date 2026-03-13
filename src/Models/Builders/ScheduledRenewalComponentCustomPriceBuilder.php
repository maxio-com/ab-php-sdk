<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Price;
use AdvancedBillingLib\Models\ScheduledRenewalComponentCustomPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalComponentCustomPrice
 *
 * @see ScheduledRenewalComponentCustomPrice
 */
class ScheduledRenewalComponentCustomPriceBuilder
{
    /**
     * @var ScheduledRenewalComponentCustomPrice
     */
    private $instance;

    private function __construct(ScheduledRenewalComponentCustomPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Component Custom Price Builder object.
     *
     * @param string $pricingScheme
     * @param Price[] $prices
     */
    public static function init(string $pricingScheme, array $prices): self
    {
        return new self(new ScheduledRenewalComponentCustomPrice($pricingScheme, $prices));
    }

    /**
     * Sets tax included field.
     *
     * @param bool|null $value
     */
    public function taxIncluded(?bool $value): self
    {
        $this->instance->setTaxIncluded($value);
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
     * Initializes a new Scheduled Renewal Component Custom Price object.
     */
    public function build(): ScheduledRenewalComponentCustomPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
