<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\DeleteSubscriptionGroupResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model DeleteSubscriptionGroupResponse
 *
 * @see DeleteSubscriptionGroupResponse
 */
class DeleteSubscriptionGroupResponseBuilder
{
    /**
     * @var DeleteSubscriptionGroupResponse
     */
    private $instance;

    private function __construct(DeleteSubscriptionGroupResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new delete subscription group response Builder object.
     */
    public static function init(): self
    {
        return new self(new DeleteSubscriptionGroupResponse());
    }

    /**
     * Sets uid field.
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets deleted field.
     */
    public function deleted(?bool $value): self
    {
        $this->instance->setDeleted($value);
        return $this;
    }

    /**
     * Initializes a new delete subscription group response object.
     */
    public function build(): DeleteSubscriptionGroupResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
