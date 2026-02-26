<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalConfigurationItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalConfigurationItem
 *
 * @see ScheduledRenewalConfigurationItem
 */
class ScheduledRenewalConfigurationItemBuilder
{
    /**
     * @var ScheduledRenewalConfigurationItem
     */
    private $instance;

    private function __construct(ScheduledRenewalConfigurationItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Configuration Item Builder object.
     */
    public static function init(): self
    {
        return new self(new ScheduledRenewalConfigurationItem());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     *
     * @param int|null $value
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets subscription renewal configuration id field.
     *
     * @param int|null $value
     */
    public function subscriptionRenewalConfigurationId(?int $value): self
    {
        $this->instance->setSubscriptionRenewalConfigurationId($value);
        return $this;
    }

    /**
     * Sets item id field.
     *
     * @param int|null $value
     */
    public function itemId(?int $value): self
    {
        $this->instance->setItemId($value);
        return $this;
    }

    /**
     * Sets item type field.
     *
     * @param string|null $value
     */
    public function itemType(?string $value): self
    {
        $this->instance->setItemType($value);
        return $this;
    }

    /**
     * Sets item subclass field.
     *
     * @param string|null $value
     */
    public function itemSubclass(?string $value): self
    {
        $this->instance->setItemSubclass($value);
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
     * Sets decimal quantity field.
     *
     * @param string|null $value
     */
    public function decimalQuantity(?string $value): self
    {
        $this->instance->setDecimalQuantity($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
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
     * Initializes a new Scheduled Renewal Configuration Item object.
     */
    public function build(): ScheduledRenewalConfigurationItem
    {
        return CoreHelper::clone($this->instance);
    }
}
