<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupPaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupPaymentProfile
 *
 * @see SubscriptionGroupPaymentProfile
 */
class SubscriptionGroupPaymentProfileBuilder
{
    /**
     * @var SubscriptionGroupPaymentProfile
     */
    private $instance;

    private function __construct(SubscriptionGroupPaymentProfile $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Payment Profile Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupPaymentProfile());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets first name field.
     *
     * @param string|null $value
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     *
     * @param string|null $value
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
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
     * Initializes a new Subscription Group Payment Profile object.
     */
    public function build(): SubscriptionGroupPaymentProfile
    {
        return CoreHelper::clone($this->instance);
    }
}
