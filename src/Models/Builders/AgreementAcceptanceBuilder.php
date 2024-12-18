<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AgreementAcceptance;
use Core\Utils\CoreHelper;

/**
 * Builder for model AgreementAcceptance
 *
 * @see AgreementAcceptance
 */
class AgreementAcceptanceBuilder
{
    /**
     * @var AgreementAcceptance
     */
    private $instance;

    private function __construct(AgreementAcceptance $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Agreement Acceptance Builder object.
     */
    public static function init(): self
    {
        return new self(new AgreementAcceptance());
    }

    /**
     * Sets ip address field.
     *
     * @param string|null $value
     */
    public function ipAddress(?string $value): self
    {
        $this->instance->setIpAddress($value);
        return $this;
    }

    /**
     * Sets terms url field.
     *
     * @param string|null $value
     */
    public function termsUrl(?string $value): self
    {
        $this->instance->setTermsUrl($value);
        return $this;
    }

    /**
     * Sets privacy policy url field.
     *
     * @param string|null $value
     */
    public function privacyPolicyUrl(?string $value): self
    {
        $this->instance->setPrivacyPolicyUrl($value);
        return $this;
    }

    /**
     * Sets return refund policy url field.
     *
     * @param string|null $value
     */
    public function returnRefundPolicyUrl(?string $value): self
    {
        $this->instance->setReturnRefundPolicyUrl($value);
        return $this;
    }

    /**
     * Sets delivery policy url field.
     *
     * @param string|null $value
     */
    public function deliveryPolicyUrl(?string $value): self
    {
        $this->instance->setDeliveryPolicyUrl($value);
        return $this;
    }

    /**
     * Sets secure checkout policy url field.
     *
     * @param string|null $value
     */
    public function secureCheckoutPolicyUrl(?string $value): self
    {
        $this->instance->setSecureCheckoutPolicyUrl($value);
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
     * Initializes a new Agreement Acceptance object.
     */
    public function build(): AgreementAcceptance
    {
        return CoreHelper::clone($this->instance);
    }
}
