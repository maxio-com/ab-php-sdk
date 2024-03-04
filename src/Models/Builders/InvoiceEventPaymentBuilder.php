<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceEventPayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceEventPayment
 *
 * @see InvoiceEventPayment
 */
class InvoiceEventPaymentBuilder
{
    /**
     * @var InvoiceEventPayment
     */
    private $instance;

    private function __construct(InvoiceEventPayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice event payment Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceEventPayment());
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
     * Sets masked account number field.
     */
    public function maskedAccountNumber(?string $value): self
    {
        $this->instance->setMaskedAccountNumber($value);
        return $this;
    }

    /**
     * Sets masked routing number field.
     */
    public function maskedRoutingNumber(?string $value): self
    {
        $this->instance->setMaskedRoutingNumber($value);
        return $this;
    }

    /**
     * Sets card brand field.
     */
    public function cardBrand(?string $value): self
    {
        $this->instance->setCardBrand($value);
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
     * Sets masked card number field.
     */
    public function maskedCardNumber(?string $value): self
    {
        $this->instance->setMaskedCardNumber($value);
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
     * Unsets details field.
     */
    public function unsetDetails(): self
    {
        $this->instance->unsetDetails();
        return $this;
    }

    /**
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
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
     * Unsets memo field.
     */
    public function unsetMemo(): self
    {
        $this->instance->unsetMemo();
        return $this;
    }

    /**
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
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
     * Initializes a new invoice event payment object.
     */
    public function build(): InvoiceEventPayment
    {
        return CoreHelper::clone($this->instance);
    }
}
