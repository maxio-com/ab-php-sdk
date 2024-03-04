<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupPrepayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupPrepayment
 *
 * @see SubscriptionGroupPrepayment
 */
class SubscriptionGroupPrepaymentBuilder
{
    /**
     * @var SubscriptionGroupPrepayment
     */
    private $instance;

    private function __construct(SubscriptionGroupPrepayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group prepayment Builder object.
     */
    public static function init(int $amount, string $details, string $memo, string $method): self
    {
        return new self(new SubscriptionGroupPrepayment($amount, $details, $memo, $method));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new subscription group prepayment object.
     */
    public function build(): SubscriptionGroupPrepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
