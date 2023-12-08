<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Movement implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $timestamp;

    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var string|null
     */
    private $amountFormatted;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $category;

    /**
     * @var Breakouts|null
     */
    private $breakouts;

    /**
     * @var MovementLineItem[]|null
     */
    private $lineItems;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var string|null
     */
    private $subscriberName;

    /**
     * Returns Timestamp.
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @maps timestamp
     */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Amount in Cents.
     */
    public function getAmountInCents(): ?int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Amount Formatted.
     */
    public function getAmountFormatted(): ?string
    {
        return $this->amountFormatted;
    }

    /**
     * Sets Amount Formatted.
     *
     * @maps amount_formatted
     */
    public function setAmountFormatted(?string $amountFormatted): void
    {
        $this->amountFormatted = $amountFormatted;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Category.
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Sets Category.
     *
     * @maps category
     */
    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    /**
     * Returns Breakouts.
     */
    public function getBreakouts(): ?Breakouts
    {
        return $this->breakouts;
    }

    /**
     * Sets Breakouts.
     *
     * @maps breakouts
     */
    public function setBreakouts(?Breakouts $breakouts): void
    {
        $this->breakouts = $breakouts;
    }

    /**
     * Returns Line Items.
     *
     * @return MovementLineItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Sets Line Items.
     *
     * @maps line_items
     *
     * @param MovementLineItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
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
     * Returns Subscriber Name.
     */
    public function getSubscriberName(): ?string
    {
        return $this->subscriberName;
    }

    /**
     * Sets Subscriber Name.
     *
     * @maps subscriber_name
     */
    public function setSubscriberName(?string $subscriberName): void
    {
        $this->subscriberName = $subscriberName;
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
            $json['timestamp']        = $this->timestamp;
        }
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']  = $this->amountInCents;
        }
        if (isset($this->amountFormatted)) {
            $json['amount_formatted'] = $this->amountFormatted;
        }
        if (isset($this->description)) {
            $json['description']      = $this->description;
        }
        if (isset($this->category)) {
            $json['category']         = $this->category;
        }
        if (isset($this->breakouts)) {
            $json['breakouts']        = $this->breakouts;
        }
        if (isset($this->lineItems)) {
            $json['line_items']       = $this->lineItems;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']  = $this->subscriptionId;
        }
        if (isset($this->subscriberName)) {
            $json['subscriber_name']  = $this->subscriberName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
