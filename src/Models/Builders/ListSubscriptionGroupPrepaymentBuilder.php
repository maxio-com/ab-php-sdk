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
     * Initializes a new List Subscription Group Prepayment Builder object.
     *
     * @param ListSubcriptionGroupPrepaymentItem $prepayment
     */
    public static function init(ListSubcriptionGroupPrepaymentItem $prepayment): self
    {
        return new self(new ListSubscriptionGroupPrepayment($prepayment));
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
     * Initializes a new List Subscription Group Prepayment object.
     */
    public function build(): ListSubscriptionGroupPrepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
