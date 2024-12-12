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
     * Initializes a new Prepayment Builder object.
     *
     * @param int $id
     * @param int $subscriptionId
     * @param int $amountInCents
     * @param int $remainingAmountInCents
     * @param bool $external
     * @param string $memo
     * @param \DateTime $createdAt
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
     *
     * @param int|null $value
     */
    public function refundedAmountInCents(?int $value): self
    {
        $this->instance->setRefundedAmountInCents($value);
        return $this;
    }

    /**
     * Sets details field.
     *
     * @param string|null $value
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
        return $this;
    }

    /**
     * Sets payment type field.
     *
     * @param string|null $value
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
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
     * Initializes a new Prepayment object.
     */
    public function build(): Prepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
