<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RefundPrepayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundPrepayment
 *
 * @see RefundPrepayment
 */
class RefundPrepaymentBuilder
{
    /**
     * @var RefundPrepayment
     */
    private $instance;

    private function __construct(RefundPrepayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund prepayment Builder object.
     */
    public static function init(int $amountInCents, $amount, string $memo): self
    {
        return new self(new RefundPrepayment($amountInCents, $amount, $memo));
    }

    /**
     * Sets external field.
     */
    public function external(?bool $value): self
    {
        $this->instance->setExternal($value);
        return $this;
    }

    /**
     * Initializes a new refund prepayment object.
     */
    public function build(): RefundPrepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
