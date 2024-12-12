<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class ChargifyEBB implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $timestamp;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $uniquenessToken;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var string|null
     */
    private $subscriptionReference;

    /**
     * Returns Timestamp.
     * This timestamp determines what billing period the event will be billed in. If your request payload
     * does not include it, Chargify will add `chargify.timestamp` to the event payload and set the value
     * to `now`.
     */
    public function getTimestamp(): ?\DateTime
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     * This timestamp determines what billing period the event will be billed in. If your request payload
     * does not include it, Chargify will add `chargify.timestamp` to the event payload and set the value
     * to `now`.
     *
     * @maps timestamp
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTimestamp(?\DateTime $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Id.
     * A unique ID set by Chargify. Please note that this field is reserved. If `chargify.id` is present in
     * the request payload, it will be overwritten.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * A unique ID set by Chargify. Please note that this field is reserved. If `chargify.id` is present in
     * the request payload, it will be overwritten.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created At.
     * An ISO-8601 timestamp, set by Chargify at the time each event is recorded. Please note that this
     * field is reserved. If `chargify.created_at` is present in the request payload, it will be
     * overwritten.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * An ISO-8601 timestamp, set by Chargify at the time each event is recorded. Please note that this
     * field is reserved. If `chargify.created_at` is present in the request payload, it will be
     * overwritten.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Uniqueness Token.
     * User-defined string scoped per-stream. Duplicate events within a stream will be silently ignored.
     * Tokens expire after 31 days.
     */
    public function getUniquenessToken(): ?string
    {
        return $this->uniquenessToken;
    }

    /**
     * Sets Uniqueness Token.
     * User-defined string scoped per-stream. Duplicate events within a stream will be silently ignored.
     * Tokens expire after 31 days.
     *
     * @maps uniqueness_token
     */
    public function setUniquenessToken(?string $uniquenessToken): void
    {
        $this->uniquenessToken = $uniquenessToken;
    }

    /**
     * Returns Subscription Id.
     * Id of Maxio Advanced Billing Subscription which is connected to this event.
     * Provide `subscription_id` if you configured `chargify.subscription_id` as Subscription Identifier in
     * your Event Stream.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * Id of Maxio Advanced Billing Subscription which is connected to this event.
     * Provide `subscription_id` if you configured `chargify.subscription_id` as Subscription Identifier in
     * your Event Stream.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Subscription Reference.
     * Reference of Maxio Advanced Billing Subscription which is connected to this event.
     * Provide `subscription_reference` if you configured `chargify.subscription_reference` as Subscription
     * Identifier in your Event Stream.
     */
    public function getSubscriptionReference(): ?string
    {
        return $this->subscriptionReference;
    }

    /**
     * Sets Subscription Reference.
     * Reference of Maxio Advanced Billing Subscription which is connected to this event.
     * Provide `subscription_reference` if you configured `chargify.subscription_reference` as Subscription
     * Identifier in your Event Stream.
     *
     * @maps subscription_reference
     */
    public function setSubscriptionReference(?string $subscriptionReference): void
    {
        $this->subscriptionReference = $subscriptionReference;
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
        if (isset($this->timestamp)) {
            $json['timestamp']              = DateTimeHelper::toRfc3339DateTime($this->timestamp);
        }
        if (isset($this->id)) {
            $json['id']                     = $this->id;
        }
        if (isset($this->createdAt)) {
            $json['created_at']             = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->uniquenessToken)) {
            $json['uniqueness_token']       = $this->uniquenessToken;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']        = $this->subscriptionId;
        }
        if (isset($this->subscriptionReference)) {
            $json['subscription_reference'] = $this->subscriptionReference;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
