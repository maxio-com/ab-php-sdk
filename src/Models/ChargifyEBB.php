<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ChargifyEBB implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $timestamp;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
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
    public function getTimestamp(): ?string
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
     */
    public function setTimestamp(?string $timestamp): void
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
    public function getCreatedAt(): ?string
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
     */
    public function setCreatedAt(?string $createdAt): void
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
            $json['timestamp']              = $this->timestamp;
        }
        if (isset($this->id)) {
            $json['id']                     = $this->id;
        }
        if (isset($this->createdAt)) {
            $json['created_at']             = $this->createdAt;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
