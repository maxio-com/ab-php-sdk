<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePrepayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePrepayment
 *
 * @see CreatePrepayment
 */
class CreatePrepaymentBuilder
{
    /**
     * @var CreatePrepayment
     */
    private $instance;

    private function __construct(CreatePrepayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create prepayment Builder object.
     */
    public static function init(float $amount, string $details, string $memo, string $method): self
    {
        return new self(new CreatePrepayment($amount, $details, $memo, $method));
    }

    /**
     * Sets payment profile id field.
     */
    public function paymentProfileId(?int $value): self
    {
        $this->instance->setPaymentProfileId($value);
        return $this;
    }

    /**
     * Initializes a new create prepayment object.
     */
    public function build(): CreatePrepayment
    {
        return CoreHelper::clone($this->instance);
    }
}
