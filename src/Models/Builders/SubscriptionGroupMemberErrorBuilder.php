<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupMemberError;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupMemberError
 *
 * @see SubscriptionGroupMemberError
 */
class SubscriptionGroupMemberErrorBuilder
{
    /**
     * @var SubscriptionGroupMemberError
     */
    private $instance;

    private function __construct(SubscriptionGroupMemberError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group member error Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupMemberError());
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
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
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
     * Initializes a new subscription group member error object.
     */
    public function build(): SubscriptionGroupMemberError
    {
        return CoreHelper::clone($this->instance);
    }
}
