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
    public static function init($amount, string $memo): self
    {
        return new self(new RefundPrepayment($amount, $memo));
    }

    /**
     * Sets amount in cents field.
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
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
     * Initializes a new refund prepayment object.
     */
    public function build(): RefundPrepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
