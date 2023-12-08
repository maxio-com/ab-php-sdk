<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionNote;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionNote
 *
 * @see SubscriptionNote
 */
class SubscriptionNoteBuilder
{
    /**
     * @var SubscriptionNote
     */
    private $instance;

    private function __construct(SubscriptionNote $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription note Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionNote());
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
     * Sets body field.
     */
    public function body(?string $value): self
    {
        $this->instance->setBody($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?string $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets sticky field.
     */
    public function sticky(?bool $value): self
    {
        $this->instance->setSticky($value);
        return $this;
    }

    /**
     * Initializes a new subscription note object.
     */
    public function build(): SubscriptionNote
    {
        return CoreHelper::clone($this->instance);
    }
}
