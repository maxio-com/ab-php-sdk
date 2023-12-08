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
     * Initializes a new payment related events Builder object.
     */
    public static function init(int $productId, int $accountTransactionId): self
    {
        return new self(new PaymentRelatedEvents($productId, $accountTransactionId));
    }

    /**
     * Initializes a new payment related events object.
     */
    public function build(): PaymentRelatedEvents
    {
        return CoreHelper::clone($this->instance);
    }
}
