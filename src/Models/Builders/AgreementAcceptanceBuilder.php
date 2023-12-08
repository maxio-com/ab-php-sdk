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
     * Initializes a new agreement acceptance Builder object.
     */
    public static function init(): self
    {
        return new self(new AgreementAcceptance());
    }

    /**
     * Sets ip address field.
     */
    public function ipAddress(?string $value): self
    {
        $this->instance->setIpAddress($value);
        return $this;
    }

    /**
     * Sets terms url field.
     */
    public function termsUrl(?string $value): self
    {
        $this->instance->setTermsUrl($value);
        return $this;
    }

    /**
     * Sets privacy policy url field.
     */
    public function privacyPolicyUrl(?string $value): self
    {
        $this->instance->setPrivacyPolicyUrl($value);
        return $this;
    }

    /**
     * Sets return refund policy url field.
     */
    public function returnRefundPolicyUrl(?string $value): self
    {
        $this->instance->setReturnRefundPolicyUrl($value);
        return $this;
    }

    /**
     * Sets delivery policy url field.
     */
    public function deliveryPolicyUrl(?string $value): self
    {
        $this->instance->setDeliveryPolicyUrl($value);
        return $this;
    }

    /**
     * Sets secure checkout policy url field.
     */
    public function secureCheckoutPolicyUrl(?string $value): self
    {
        $this->instance->setSecureCheckoutPolicyUrl($value);
        return $this;
    }

    /**
     * Initializes a new agreement acceptance object.
     */
    public function build(): AgreementAcceptance
    {
        return CoreHelper::clone($this->instance);
    }
}
