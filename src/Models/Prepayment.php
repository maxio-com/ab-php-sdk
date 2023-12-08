<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Prepayment implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $subscriptionId;

    /**
     * @var int
     */
    private $amountInCents;

    /**
     * @var int
     */
    private $remainingAmountInCents;

    /**
     * @var int|null
     */
    private $refundedAmountInCents;

    /**
     * @var string|null
     */
    private $details;

    /**
     * @var bool
     */
    private $external;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @param int $id
     * @param int $subscriptionId
     * @param int $amountInCents
     * @param int $remainingAmountInCents
     * @param bool $external
     * @param string $memo
     * @param string $createdAt
     */
    public function __construct(
        int $id,
        int $subscriptionId,
        int $amountInCents,
        int $remainingAmountInCents,
        bool $external,
        string $memo,
        string $createdAt
    ) {
        $this->id = $id;
        $this->subscriptionId = $subscriptionId;
        $this->amountInCents = $amountInCents;
        $this->remainingAmountInCents = $remainingAmountInCents;
        $this->external = $external;
        $this->memo = $memo;
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @required
     * @maps subscription_id
     */
    public function setSubscriptionId(int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Amount in Cents.
     */
    public function getAmountInCents(): int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     *
     * @required
     * @maps amount_in_cents
     */
    public function setAmountInCents(int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Remaining Amount in Cents.
     */
    public function getRemainingAmountInCents(): int
    {
        return $this->remainingAmountInCents;
    }

    /**
     * Sets Remaining Amount in Cents.
     *
     * @required
     * @maps remaining_amount_in_cents
     */
    public function setRemainingAmountInCents(int $remainingAmountInCents): void
    {
        $this->remainingAmountInCents = $remainingAmountInCents;
    }

    /**
     * Returns Refunded Amount in Cents.
     */
    public function getRefundedAmountInCents(): ?int
    {
        return $this->refundedAmountInCents;
    }

    /**
     * Sets Refunded Amount in Cents.
     *
     * @maps refunded_amount_in_cents
     */
    public function setRefundedAmountInCents(?int $refundedAmountInCents): void
    {
        $this->refundedAmountInCents = $refundedAmountInCents;
    }

    /**
     * Returns Details.
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * Sets Details.
     *
     * @maps details
     */
    public function setDetails(?string $details): void
    {
        $this->details = $details;
    }

    /**
     * Returns External.
     */
    public function getExternal(): bool
    {
        return $this->external;
    }

    /**
     * Sets External.
     *
     * @required
     * @maps external
     */
    public function setExternal(bool $external): void
    {
        $this->external = $external;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @required
     * @maps memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Payment Type.
     * The payment type of the prepayment.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * The payment type of the prepayment.
     *
     * @maps payment_type
     * @factory \AdvancedBillingLib\Models\PrepaymentMethod::checkValue
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
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
        $json['id']                           = $this->id;
        $json['subscription_id']              = $this->subscriptionId;
        $json['amount_in_cents']              = $this->amountInCents;
        $json['remaining_amount_in_cents']    = $this->remainingAmountInCents;
        if (isset($this->refundedAmountInCents)) {
            $json['refunded_amount_in_cents'] = $this->refundedAmountInCents;
        }
        if (isset($this->details)) {
            $json['details']                  = $this->details;
        }
        $json['external']                     = $this->external;
        $json['memo']                         = $this->memo;
        if (isset($this->paymentType)) {
            $json['payment_type']             = PrepaymentMethod::checkValue($this->paymentType);
        }
        $json['created_at']                   = $this->createdAt;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
