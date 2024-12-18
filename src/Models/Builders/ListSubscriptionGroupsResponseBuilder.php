<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSubscriptionGroupsItem;
use AdvancedBillingLib\Models\ListSubscriptionGroupsMeta;
use AdvancedBillingLib\Models\ListSubscriptionGroupsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSubscriptionGroupsResponse
 *
 * @see ListSubscriptionGroupsResponse
 */
class ListSubscriptionGroupsResponseBuilder
{
    /**
     * @var ListSubscriptionGroupsResponse
     */
    private $instance;

    private function __construct(ListSubscriptionGroupsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Subscription Groups Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSubscriptionGroupsResponse());
    }

    /**
     * Sets subscription groups field.
     *
     * @param ListSubscriptionGroupsItem[]|null $value
     */
    public function subscriptionGroups(?array $value): self
    {
        $this->instance->setSubscriptionGroups($value);
        return $this;
    }

    /**
     * Sets meta field.
     *
     * @param ListSubscriptionGroupsMeta|null $value
     */
    public function meta(?ListSubscriptionGroupsMeta $value): self
    {
        $this->instance->setMeta($value);
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
     * Initializes a new List Subscription Groups Response object.
     */
    public function build(): ListSubscriptionGroupsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
