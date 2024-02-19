<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Prepayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model Prepayment
 *
 * @see Prepayment
 */
class PrepaymentBuilder
{
    /**
     * @var Prepayment
     */
    private $instance;

    private function __construct(Prepayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepayment Builder object.
     */
    public static function init(
        int $id,
        int $subscriptionId,
        int $amountInCents,
        int $remainingAmountInCents,
        bool $external,
        string $memo,
        \DateTime $createdAt
    ): self {
        return new self(
            new Prepayment(
                $id,
                $subscriptionId,
                $amountInCents,
                $remainingAmountInCents,
                $external,
                $memo,
                $createdAt
            )
        );
    }

    /**
     * Sets refunded amount in cents field.
     */
    public function refundedAmountInCents(?int $value): self
    {
        $this->instance->setRefundedAmountInCents($value);
        return $this;
    }

    /**
     * Sets details field.
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
        return $this;
    }

    /**
     * Sets payment type field.
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Initializes a new prepayment object.
     */
    public function build(): Prepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
