<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSubscriptionComponentsResponse;
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
     * Initializes a new list subscription components response Builder object.
     */
    public static function init(array $subscriptionsComponents): self
    {
        return new self(new ListSubscriptionComponentsResponse($subscriptionsComponents));
    }

    /**
     * Initializes a new list subscription components response object.
     */
    public function build(): ListSubscriptionComponentsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
