<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSaleRepItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSaleRepItem
 *
 * @see ListSaleRepItem
 */
class ListSaleRepItemBuilder
{
    /**
     * @var ListSaleRepItem
     */
    private $instance;

    private function __construct(ListSaleRepItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list sale rep item Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSaleRepItem());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets full name field.
     */
    public function fullName(?string $value): self
    {
        $this->instance->setFullName($value);
        return $this;
    }

    /**
     * Sets subscriptions count field.
     */
    public function subscriptionsCount(?int $value): self
    {
        $this->instance->setSubscriptionsCount($value);
        return $this;
    }

    /**
     * Sets mrr data field.
     */
    public function mrrData(?array $value): self
    {
        $this->instance->setMrrData($value);
        return $this;
    }

    /**
     * Sets test mode field.
     */
    public function testMode(?bool $value): self
    {
        $this->instance->setTestMode($value);
        return $this;
    }

    /**
     * Initializes a new list sale rep item object.
     */
    public function build(): ListSaleRepItem
    {
        return CoreHelper::clone($this->instance);
    }
}
