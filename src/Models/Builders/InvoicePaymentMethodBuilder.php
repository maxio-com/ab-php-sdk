<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoicePaymentMethod;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoicePaymentMethod
 *
 * @see InvoicePaymentMethod
 */
class InvoicePaymentMethodBuilder
{
    /**
     * @var InvoicePaymentMethod
     */
    private $instance;

    private function __construct(InvoicePaymentMethod $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Invoice Payment Method Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoicePaymentMethod());
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
     * Sets kind field.
     *
     * @param string|null $value
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets card brand field.
     *
     * @param string|null $value
     */
    public function cardBrand(?string $value): self
    {
        $this->instance->setCardBrand($value);
        return $this;
    }

    /**
     * Sets card expiration field.
     *
     * @param string|null $value
     */
    public function cardExpiration(?string $value): self
    {
        $this->instance->setCardExpiration($value);
        return $this;
    }

    /**
     * Sets last four field.
     *
     * @param string|null $value
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
     * Sets masked card number field.
     *
     * @param string|null $value
     */
    public function maskedCardNumber(?string $value): self
    {
        $this->instance->setMaskedCardNumber($value);
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
     * Initializes a new Invoice Payment Method object.
     */
    public function build(): InvoicePaymentMethod
    {
        return CoreHelper::clone($this->instance);
    }
}
