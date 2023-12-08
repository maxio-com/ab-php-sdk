<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreatedPrepayment implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var int|null
     */
    private $startingBalanceInCents;

    /**
     * @var int|null
     */
    private $endingBalanceInCents;

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
     * Returns Memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Starting Balance in Cents.
     */
    public function getStartingBalanceInCents(): ?int
    {
        return $this->startingBalanceInCents;
    }

    /**
     * Sets Starting Balance in Cents.
     *
     * @maps starting_balance_in_cents
     */
    public function setStartingBalanceInCents(?int $startingBalanceInCents): void
    {
        $this->startingBalanceInCents = $startingBalanceInCents;
    }

    /**
     * Returns Ending Balance in Cents.
     */
    public function getEndingBalanceInCents(): ?int
    {
        return $this->endingBalanceInCents;
    }

    /**
     * Sets Ending Balance in Cents.
     *
     * @maps ending_balance_in_cents
     */
    public function setEndingBalanceInCents(?int $endingBalanceInCents): void
    {
        $this->endingBalanceInCents = $endingBalanceInCents;
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
            $json['id']                        = $this->id;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']           = $this->subscriptionId;
        }
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']           = $this->amountInCents;
        }
        if (isset($this->memo)) {
            $json['memo']                      = $this->memo;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                = $this->createdAt;
        }
        if (isset($this->startingBalanceInCents)) {
            $json['starting_balance_in_cents'] = $this->startingBalanceInCents;
        }
        if (isset($this->endingBalanceInCents)) {
            $json['ending_balance_in_cents']   = $this->endingBalanceInCents;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
