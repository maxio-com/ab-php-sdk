<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OverrideSubscription;
use Core\Utils\CoreHelper;

/**
 * Builder for model OverrideSubscription
 *
 * @see OverrideSubscription
 */
class OverrideSubscriptionBuilder
{
    /**
     * @var OverrideSubscription
     */
    private $instance;

    private function __construct(OverrideSubscription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new override subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new OverrideSubscription());
    }

    /**
     * Sets activated at field.
     */
    public function activatedAt(?\DateTime $value): self
    {
        $this->instance->setActivatedAt($value);
        return $this;
    }

    /**
     * Sets canceled at field.
     */
    public function canceledAt(?\DateTime $value): self
    {
        $this->instance->setCanceledAt($value);
        return $this;
    }

    /**
     * Sets cancellation message field.
     */
    public function cancellationMessage(?string $value): self
    {
        $this->instance->setCancellationMessage($value);
        return $this;
    }

    /**
     * Sets expires at field.
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Sets current period starts at field.
     */
    public function currentPeriodStartsAt(?\DateTime $value): self
    {
        $this->instance->setCurrentPeriodStartsAt($value);
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
     * Initializes a new override subscription object.
     */
    public function build(): OverrideSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
