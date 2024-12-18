<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentRelatedEvents;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentRelatedEvents
 *
 * @see PaymentRelatedEvents
 */
class PaymentRelatedEventsBuilder
{
    /**
     * @var PaymentRelatedEvents
     */
    private $instance;

    private function __construct(PaymentRelatedEvents $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Related Events Builder object.
     *
     * @param int $productId
     * @param int $accountTransactionId
     */
    public static function init(int $productId, int $accountTransactionId): self
    {
        return new self(new PaymentRelatedEvents($productId, $accountTransactionId));
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
     * Initializes a new Payment Related Events object.
     */
    public function build(): PaymentRelatedEvents
    {
        return CoreHelper::clone($this->instance);
    }
}
