<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSubcriptionGroupPrepaymentItem;
use AdvancedBillingLib\Models\ListSubscriptionGroupPrepayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSubscriptionGroupPrepayment
 *
 * @see ListSubscriptionGroupPrepayment
 */
class ListSubscriptionGroupPrepaymentBuilder
{
    /**
     * @var ListSubscriptionGroupPrepayment
     */
    private $instance;

    private function __construct(ListSubscriptionGroupPrepayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list subscription group prepayment Builder object.
     */
    public static function init(ListSubcriptionGroupPrepaymentItem $prepayment): self
    {
        return new self(new ListSubscriptionGroupPrepayment($prepayment));
    }

    /**
     * Initializes a new list subscription group prepayment object.
     */
    public function build(): ListSubscriptionGroupPrepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
