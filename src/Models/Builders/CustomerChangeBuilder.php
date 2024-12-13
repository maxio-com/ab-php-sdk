<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AddressChange;
use AdvancedBillingLib\Models\CustomerChange;
use AdvancedBillingLib\Models\CustomerCustomFieldsChange;
use AdvancedBillingLib\Models\CustomerPayerChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerChange
 *
 * @see CustomerChange
 */
class CustomerChangeBuilder
{
    /**
     * @var CustomerChange
     */
    private $instance;

    private function __construct(CustomerChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customer Change Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerChange());
    }

    /**
     * Sets payer field.
     *
     * @param CustomerPayerChange|null $value
     */
    public function payer(?CustomerPayerChange $value): self
    {
        $this->instance->setPayer($value);
        return $this;
    }

    /**
     * Unsets payer field.
     */
    public function unsetPayer(): self
    {
        $this->instance->unsetPayer();
        return $this;
    }

    /**
     * Sets shipping address field.
     *
     * @param AddressChange|null $value
     */
    public function shippingAddress(?AddressChange $value): self
    {
        $this->instance->setShippingAddress($value);
        return $this;
    }

    /**
     * Unsets shipping address field.
     */
    public function unsetShippingAddress(): self
    {
        $this->instance->unsetShippingAddress();
        return $this;
    }

    /**
     * Sets billing address field.
     *
     * @param AddressChange|null $value
     */
    public function billingAddress(?AddressChange $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Unsets billing address field.
     */
    public function unsetBillingAddress(): self
    {
        $this->instance->unsetBillingAddress();
        return $this;
    }

    /**
     * Sets custom fields field.
     *
     * @param CustomerCustomFieldsChange|null $value
     */
    public function customFields(?CustomerCustomFieldsChange $value): self
    {
        $this->instance->setCustomFields($value);
        return $this;
    }

    /**
     * Unsets custom fields field.
     */
    public function unsetCustomFields(): self
    {
        $this->instance->unsetCustomFields();
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
     * Initializes a new Customer Change object.
     */
    public function build(): CustomerChange
    {
        return CoreHelper::clone($this->instance);
    }
}
