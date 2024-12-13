<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSubscriptionComponentsResponse;
use AdvancedBillingLib\Models\SubscriptionComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSubscriptionComponentsResponse
 *
 * @see ListSubscriptionComponentsResponse
 */
class ListSubscriptionComponentsResponseBuilder
{
    /**
     * @var ListSubscriptionComponentsResponse
     */
    private $instance;

    private function __construct(ListSubscriptionComponentsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Subscription Components Response Builder object.
     *
     * @param SubscriptionComponent[] $subscriptionsComponents
     */
    public static function init(array $subscriptionsComponents): self
    {
        return new self(new ListSubscriptionComponentsResponse($subscriptionsComponents));
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
     * Initializes a new List Subscription Components Response object.
     */
    public function build(): ListSubscriptionComponentsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
