<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Required when creating a subscription with Maxio Payments.
 */
class AgreementAcceptance implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $ipAddress;

    /**
     * @var string|null
     */
    private $termsUrl;

    /**
     * @var string|null
     */
    private $privacyPolicyUrl;

    /**
     * @var string|null
     */
    private $returnRefundPolicyUrl;

    /**
     * @var string|null
     */
    private $deliveryPolicyUrl;

    /**
     * @var string|null
     */
    private $secureCheckoutPolicyUrl;

    /**
     * Returns Ip Address.
     * Required when providing agreement acceptance params.
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * Sets Ip Address.
     * Required when providing agreement acceptance params.
     *
     * @maps ip_address
     */
    public function setIpAddress(?string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Returns Terms Url.
     * Required when creating a subscription with Maxio Payments. Either terms_url or provacy_policy_url
     * required when providing agreement_acceptance params.
     */
    public function getTermsUrl(): ?string
    {
        return $this->termsUrl;
    }

    /**
     * Sets Terms Url.
     * Required when creating a subscription with Maxio Payments. Either terms_url or provacy_policy_url
     * required when providing agreement_acceptance params.
     *
     * @maps terms_url
     */
    public function setTermsUrl(?string $termsUrl): void
    {
        $this->termsUrl = $termsUrl;
    }

    /**
     * Returns Privacy Policy Url.
     */
    public function getPrivacyPolicyUrl(): ?string
    {
        return $this->privacyPolicyUrl;
    }

    /**
     * Sets Privacy Policy Url.
     *
     * @maps privacy_policy_url
     */
    public function setPrivacyPolicyUrl(?string $privacyPolicyUrl): void
    {
        $this->privacyPolicyUrl = $privacyPolicyUrl;
    }

    /**
     * Returns Return Refund Policy Url.
     */
    public function getReturnRefundPolicyUrl(): ?string
    {
        return $this->returnRefundPolicyUrl;
    }

    /**
     * Sets Return Refund Policy Url.
     *
     * @maps return_refund_policy_url
     */
    public function setReturnRefundPolicyUrl(?string $returnRefundPolicyUrl): void
    {
        $this->returnRefundPolicyUrl = $returnRefundPolicyUrl;
    }

    /**
     * Returns Delivery Policy Url.
     */
    public function getDeliveryPolicyUrl(): ?string
    {
        return $this->deliveryPolicyUrl;
    }

    /**
     * Sets Delivery Policy Url.
     *
     * @maps delivery_policy_url
     */
    public function setDeliveryPolicyUrl(?string $deliveryPolicyUrl): void
    {
        $this->deliveryPolicyUrl = $deliveryPolicyUrl;
    }

    /**
     * Returns Secure Checkout Policy Url.
     */
    public function getSecureCheckoutPolicyUrl(): ?string
    {
        return $this->secureCheckoutPolicyUrl;
    }

    /**
     * Sets Secure Checkout Policy Url.
     *
     * @maps secure_checkout_policy_url
     */
    public function setSecureCheckoutPolicyUrl(?string $secureCheckoutPolicyUrl): void
    {
        $this->secureCheckoutPolicyUrl = $secureCheckoutPolicyUrl;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->ipAddress)) {
            $json['ip_address']                 = $this->ipAddress;
        }
        if (isset($this->termsUrl)) {
            $json['terms_url']                  = $this->termsUrl;
        }
        if (isset($this->privacyPolicyUrl)) {
            $json['privacy_policy_url']         = $this->privacyPolicyUrl;
        }
        if (isset($this->returnRefundPolicyUrl)) {
            $json['return_refund_policy_url']   = $this->returnRefundPolicyUrl;
        }
        if (isset($this->deliveryPolicyUrl)) {
            $json['delivery_policy_url']        = $this->deliveryPolicyUrl;
        }
        if (isset($this->secureCheckoutPolicyUrl)) {
            $json['secure_checkout_policy_url'] = $this->secureCheckoutPolicyUrl;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
