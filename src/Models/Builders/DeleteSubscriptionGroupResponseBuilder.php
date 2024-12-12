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
     * Initializes a new Delete Subscription Group Response Builder object.
     */
    public static function init(): self
    {
        return new self(new DeleteSubscriptionGroupResponse());
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets deleted field.
     *
     * @param bool|null $value
     */
    public function deleted(?bool $value): self
    {
        $this->instance->setDeleted($value);
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
     * Initializes a new Delete Subscription Group Response object.
     */
    public function build(): DeleteSubscriptionGroupResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
