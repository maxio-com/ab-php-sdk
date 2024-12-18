<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupSignupError implements \JsonSerializable
{
    /**
     * @var array<string,SubscriptionGroupSubscriptionError>|null
     */
    private $subscriptions;

    /**
     * @var string|null
     */
    private $payerReference;

    /**
     * @var PayerError|null
     */
    private $payer;

    /**
     * @var string[]|null
     */
    private $subscriptionGroup;

    /**
     * @var string|null
     */
    private $paymentProfileId;

    /**
     * @var string|null
     */
    private $payerId;

    /**
     * Returns Subscriptions.
     * Object that as key have subscription position in request subscriptions array and as value
     * subscription errors object.
     *
     * @return array<string,SubscriptionGroupSubscriptionError>|null
     */
    public function getSubscriptions(): ?array
    {
        return $this->subscriptions;
    }

    /**
     * Sets Subscriptions.
     * Object that as key have subscription position in request subscriptions array and as value
     * subscription errors object.
     *
     * @maps subscriptions
     *
     * @param array<string,SubscriptionGroupSubscriptionError>|null $subscriptions
     */
    public function setSubscriptions(?array $subscriptions): void
    {
        $this->subscriptions = $subscriptions;
    }

    /**
     * Returns Payer Reference.
     */
    public function getPayerReference(): ?string
    {
        return $this->payerReference;
    }

    /**
     * Sets Payer Reference.
     *
     * @maps payer_reference
     */
    public function setPayerReference(?string $payerReference): void
    {
        $this->payerReference = $payerReference;
    }

    /**
     * Returns Payer.
     */
    public function getPayer(): ?PayerError
    {
        return $this->payer;
    }

    /**
     * Sets Payer.
     *
     * @maps payer
     */
    public function setPayer(?PayerError $payer): void
    {
        $this->payer = $payer;
    }

    /**
     * Returns Subscription Group.
     *
     * @return string[]|null
     */
    public function getSubscriptionGroup(): ?array
    {
        return $this->subscriptionGroup;
    }

    /**
     * Sets Subscription Group.
     *
     * @maps subscription_group
     *
     * @param string[]|null $subscriptionGroup
     */
    public function setSubscriptionGroup(?array $subscriptionGroup): void
    {
        $this->subscriptionGroup = $subscriptionGroup;
    }

    /**
     * Returns Payment Profile Id.
     */
    public function getPaymentProfileId(): ?string
    {
        return $this->paymentProfileId;
    }

    /**
     * Sets Payment Profile Id.
     *
     * @maps payment_profile_id
     */
    public function setPaymentProfileId(?string $paymentProfileId): void
    {
        $this->paymentProfileId = $paymentProfileId;
    }

    /**
     * Returns Payer Id.
     */
    public function getPayerId(): ?string
    {
        return $this->payerId;
    }

    /**
     * Sets Payer Id.
     *
     * @maps payer_id
     */
    public function setPayerId(?string $payerId): void
    {
        $this->payerId = $payerId;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        if (isset($this->subscriptions)) {
            $json['subscriptions']      = $this->subscriptions;
        }
        if (isset($this->payerReference)) {
            $json['payer_reference']    = $this->payerReference;
        }
        if (isset($this->payer)) {
            $json['payer']              = $this->payer;
        }
        if (isset($this->subscriptionGroup)) {
            $json['subscription_group'] = $this->subscriptionGroup;
        }
        if (isset($this->paymentProfileId)) {
            $json['payment_profile_id'] = $this->paymentProfileId;
        }
        if (isset($this->payerId)) {
            $json['payer_id']           = $this->payerId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
