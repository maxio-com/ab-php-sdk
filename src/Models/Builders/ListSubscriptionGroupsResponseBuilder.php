<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

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
     * Initializes a new list subscription groups response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSubscriptionGroupsResponse());
    }

    /**
     * Sets subscription groups field.
     */
    public function subscriptionGroups(?array $value): self
    {
        $this->instance->setSubscriptionGroups($value);
        return $this;
    }

    /**
     * Sets meta field.
     */
    public function meta(?ListSubscriptionGroupsMeta $value): self
    {
        $this->instance->setMeta($value);
        return $this;
    }

    /**
     * Initializes a new list subscription groups response object.
     */
    public function build(): ListSubscriptionGroupsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
