<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionComponentAllocationErrorItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionComponentAllocationErrorItem
 *
 * @see SubscriptionComponentAllocationErrorItem
 */
class SubscriptionComponentAllocationErrorItemBuilder
{
    /**
     * @var SubscriptionComponentAllocationErrorItem
     */
    private $instance;

    private function __construct(SubscriptionComponentAllocationErrorItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription component allocation error item Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionComponentAllocationErrorItem());
    }

    /**
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Initializes a new subscription component allocation error item object.
     */
    public function build(): SubscriptionComponentAllocationErrorItem
    {
        return CoreHelper::clone($this->instance);
    }
}
