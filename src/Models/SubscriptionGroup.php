<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class SubscriptionGroup implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var SubscriptionGroupPaymentProfile|null
     */
    private $paymentProfile;

    /**
     * @var string|null
     */
    private $paymentCollectionMethod;

    /**
     * @var int[]|null
     */
    private $subscriptionIds;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Payment Profile.
     */
    public function getPaymentProfile(): ?SubscriptionGroupPaymentProfile
    {
        return $this->paymentProfile;
    }

    /**
     * Sets Payment Profile.
     *
     * @maps payment_profile
     */
    public function setPaymentProfile(?SubscriptionGroupPaymentProfile $paymentProfile): void
    {
        $this->paymentProfile = $paymentProfile;
    }

    /**
     * Returns Payment Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     */
    public function getPaymentCollectionMethod(): ?string
    {
        return $this->paymentCollectionMethod;
    }

    /**
     * Sets Payment Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     *
     * @maps payment_collection_method
     * @factory \AdvancedBillingLib\Models\CollectionMethod::checkValue
     */
    public function setPaymentCollectionMethod(?string $paymentCollectionMethod): void
    {
        $this->paymentCollectionMethod = $paymentCollectionMethod;
    }

    /**
     * Returns Subscription Ids.
     *
     * @return int[]|null
     */
    public function getSubscriptionIds(): ?array
    {
        return $this->subscriptionIds;
    }

    /**
     * Sets Subscription Ids.
     *
     * @maps subscription_ids
     *
     * @param int[]|null $subscriptionIds
     */
    public function setSubscriptionIds(?array $subscriptionIds): void
    {
        $this->subscriptionIds = $subscriptionIds;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Converts the SubscriptionGroup object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionGroup object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionGroup',
            [
                'customerId' => $this->customerId,
                'paymentProfile' => $this->paymentProfile,
                'paymentCollectionMethod' => $this->paymentCollectionMethod,
                'subscriptionIds' => $this->subscriptionIds,
                'createdAt' => $this->createdAt,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
        if (isset($this->customerId)) {
            $json['customer_id']               = $this->customerId;
        }
        if (isset($this->paymentProfile)) {
            $json['payment_profile']           = $this->paymentProfile;
        }
        if (isset($this->paymentCollectionMethod)) {
            $json['payment_collection_method'] = CollectionMethod::checkValue($this->paymentCollectionMethod);
        }
        if (isset($this->subscriptionIds)) {
            $json['subscription_ids']          = $this->subscriptionIds;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
