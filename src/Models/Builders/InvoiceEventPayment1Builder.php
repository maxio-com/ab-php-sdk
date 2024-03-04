<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceEventPayment1;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceEventPayment1
 *
 * @see InvoiceEventPayment1
 */
class InvoiceEventPayment1Builder
{
    /**
     * @var InvoiceEventPayment1
     */
    private $instance;

    private function __construct(InvoiceEventPayment1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice event payment 1 Builder object.
     */
    public static function init(
        string $maskedAccountNumber,
        string $maskedRoutingNumber,
        string $cardBrand,
        string $maskedCardNumber,
        string $kind,
        string $email
    ): self {
        return new self(new InvoiceEventPayment1(
            $maskedAccountNumber,
            $maskedRoutingNumber,
            $cardBrand,
            $maskedCardNumber,
            $kind,
            $email
        ));
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets card expiration field.
     */
    public function cardExpiration(?string $value): self
    {
        $this->instance->setCardExpiration($value);
        return $this;
    }

    /**
     * Sets last four field.
     */
    public function lastFour(?string $value): self
    {
        $this->instance->setLastFour($value);
        return $this;
    }

    /**
     * Unsets last four field.
     */
    public function unsetLastFour(): self
    {
        $this->instance->unsetLastFour();
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
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
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
     * Initializes a new invoice event payment 1 object.
     */
    public function build(): InvoiceEventPayment1
    {
        return CoreHelper::clone($this->instance);
    }
}
