<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReactivateSubscriptionGroupRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReactivateSubscriptionGroupRequest
 *
 * @see ReactivateSubscriptionGroupRequest
 */
class ReactivateSubscriptionGroupRequestBuilder
{
    /**
     * @var ReactivateSubscriptionGroupRequest
     */
    private $instance;

    private function __construct(ReactivateSubscriptionGroupRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reactivate subscription group request Builder object.
     */
    public static function init(): self
    {
        return new self(new ReactivateSubscriptionGroupRequest());
    }

    /**
     * Sets resume field.
     */
    public function resume(?bool $value): self
    {
        $this->instance->setResume($value);
        return $this;
    }

    /**
     * Sets resume members field.
     */
    public function resumeMembers(?bool $value): self
    {
        $this->instance->setResumeMembers($value);
        return $this;
    }

    /**
     * Initializes a new reactivate subscription group request object.
     */
    public function build(): ReactivateSubscriptionGroupRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
