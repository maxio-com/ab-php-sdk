<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyPaymentEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ApplyPaymentEventData
 *
 * @see ApplyPaymentEventData
 */
class ApplyPaymentEventDataBuilder
{
    /**
     * @var ApplyPaymentEventData
     */
    private $instance;

    private function __construct(ApplyPaymentEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apply payment event data Builder object.
     */
    public static function init(
        string $memo,
        string $originalAmount,
        string $appliedAmount,
        \DateTime $transactionTime,
        $paymentMethod
    ): self {
        return new self(
            new ApplyPaymentEventData($memo, $originalAmount, $appliedAmount, $transactionTime, $paymentMethod)
        );
    }

    /**
     * Sets transaction id field.
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Initializes a new apply payment event data object.
     */
    public function build(): ApplyPaymentEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
