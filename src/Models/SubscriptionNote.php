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

class SubscriptionNote implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $body;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var bool|null
     */
    private $sticky;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Body.
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * Sets Body.
     *
     * @maps body
     */
    public function setBody(?string $body): void
    {
        $this->body = $body;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
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
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Sticky.
     */
    public function getSticky(): ?bool
    {
        return $this->sticky;
    }

    /**
     * Sets Sticky.
     *
     * @maps sticky
     */
    public function setSticky(?bool $sticky): void
    {
        $this->sticky = $sticky;
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
        if (isset($this->id)) {
            $json['id']              = $this->id;
        }
        if (isset($this->body)) {
            $json['body']            = $this->body;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id'] = $this->subscriptionId;
        }
        if (isset($this->createdAt)) {
            $json['created_at']      = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']      = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (isset($this->sticky)) {
            $json['sticky']          = $this->sticky;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
