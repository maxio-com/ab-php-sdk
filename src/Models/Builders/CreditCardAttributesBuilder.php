<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditCardAttributes;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreditCardAttributes
 *
 * @see CreditCardAttributes
 */
class CreditCardAttributesBuilder
{
    /**
     * @var CreditCardAttributes
     */
    private $instance;

    private function __construct(CreditCardAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new credit card attributes Builder object.
     */
    public static function init(): self
    {
        return new self(new CreditCardAttributes());
    }

    /**
     * Sets full number field.
     */
    public function fullNumber(?string $value): self
    {
        $this->instance->setFullNumber($value);
        return $this;
    }

    /**
     * Sets expiration month field.
     */
    public function expirationMonth(?string $value): self
    {
        $this->instance->setExpirationMonth($value);
        return $this;
    }

    /**
     * Sets expiration year field.
     */
    public function expirationYear(?string $value): self
    {
        $this->instance->setExpirationYear($value);
        return $this;
    }

    /**
     * Initializes a new credit card attributes object.
     */
    public function build(): CreditCardAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
