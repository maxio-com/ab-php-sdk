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
     * Initializes a new subscription group payment profile Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupPaymentProfile());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets first name field.
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
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
     * Initializes a new subscription group payment profile object.
     */
    public function build(): SubscriptionGroupPaymentProfile
    {
        return CoreHelper::clone($this->instance);
    }
}
