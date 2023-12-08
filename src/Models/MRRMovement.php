<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class MRRMovement implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $category;

    /**
     * @var int|null
     */
    private $subscriberDelta;

    /**
     * @var int|null
     */
    private $leadDelta;

    /**
     * Returns Amount.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
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
     * Returns Subscriber Delta.
     */
    public function getSubscriberDelta(): ?int
    {
        return $this->subscriberDelta;
    }

    /**
     * Sets Subscriber Delta.
     *
     * @maps subscriber_delta
     */
    public function setSubscriberDelta(?int $subscriberDelta): void
    {
        $this->subscriberDelta = $subscriberDelta;
    }

    /**
     * Returns Lead Delta.
     */
    public function getLeadDelta(): ?int
    {
        return $this->leadDelta;
    }

    /**
     * Sets Lead Delta.
     *
     * @maps lead_delta
     */
    public function setLeadDelta(?int $leadDelta): void
    {
        $this->leadDelta = $leadDelta;
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
        if (isset($this->amount)) {
            $json['amount']           = $this->amount;
        }
        if (isset($this->category)) {
            $json['category']         = $this->category;
        }
        if (isset($this->subscriberDelta)) {
            $json['subscriber_delta'] = $this->subscriberDelta;
        }
        if (isset($this->leadDelta)) {
            $json['lead_delta']       = $this->leadDelta;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
