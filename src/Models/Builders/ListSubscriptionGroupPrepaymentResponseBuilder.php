<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSubscriptionGroupPrepaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSubscriptionGroupPrepaymentResponse
 *
 * @see ListSubscriptionGroupPrepaymentResponse
 */
class ListSubscriptionGroupPrepaymentResponseBuilder
{
    /**
     * @var ListSubscriptionGroupPrepaymentResponse
     */
    private $instance;

    private function __construct(ListSubscriptionGroupPrepaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list subscription group prepayment response Builder object.
     */
    public static function init(array $prepayments): self
    {
        return new self(new ListSubscriptionGroupPrepaymentResponse($prepayments));
    }

    /**
     * Initializes a new list subscription group prepayment response object.
     */
    public function build(): ListSubscriptionGroupPrepaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
