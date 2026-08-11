<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionProductChangeScheduled;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionProductChangeScheduled
 *
 * @see SubscriptionProductChangeScheduled
 */
class SubscriptionProductChangeScheduledBuilder
{
    /**
     * @var SubscriptionProductChangeScheduled
     */
    private $instance;

    private function __construct(SubscriptionProductChangeScheduled $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Product Change Scheduled Builder object.
     *
     * @param int $previousProductId
     * @param int $newProductId
     */
    public static function init(int $previousProductId, int $newProductId): self
    {
        return new self(new SubscriptionProductChangeScheduled($previousProductId, $newProductId));
    }

    /**
     * Sets previous product price point id field.
     *
     * @param int|null $value
     */
    public function previousProductPricePointId(?int $value): self
    {
        $this->instance->setPreviousProductPricePointId($value);
        return $this;
    }

    /**
     * Unsets previous product price point id field.
     */
    public function unsetPreviousProductPricePointId(): self
    {
        $this->instance->unsetPreviousProductPricePointId();
        return $this;
    }

    /**
     * Sets new product price point id field.
     *
     * @param int|null $value
     */
    public function newProductPricePointId(?int $value): self
    {
        $this->instance->setNewProductPricePointId($value);
        return $this;
    }

    /**
     * Unsets new product price point id field.
     */
    public function unsetNewProductPricePointId(): self
    {
        $this->instance->unsetNewProductPricePointId();
        return $this;
    }

    /**
     * Sets effective at field.
     *
     * @param \DateTime|null $value
     */
    public function effectiveAt(?\DateTime $value): self
    {
        $this->instance->setEffectiveAt($value);
        return $this;
    }

    /**
     * Unsets effective at field.
     */
    public function unsetEffectiveAt(): self
    {
        $this->instance->unsetEffectiveAt();
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
     * Initializes a new Subscription Product Change Scheduled object.
     */
    public function build(): SubscriptionProductChangeScheduled
    {
        return CoreHelper::clone($this->instance);
    }
}
