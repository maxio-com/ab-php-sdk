<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListSubcriptionGroupPrepaymentItem implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $subscriptionGroupUid;

    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var int|null
     */
    private $remainingAmountInCents;

    /**
     * @var string|null
     */
    private $details;

    /**
     * @var bool|null
     */
    private $external;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * @var string|null
     */
    private $createdAt;

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
     * Returns Subscription Group Uid.
     */
    public function getSubscriptionGroupUid(): ?string
    {
        return $this->subscriptionGroupUid;
    }

    /**
     * Sets Subscription Group Uid.
     *
     * @maps subscription_group_uid
     */
    public function setSubscriptionGroupUid(?string $subscriptionGroupUid): void
    {
        $this->subscriptionGroupUid = $subscriptionGroupUid;
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
     * Returns Remaining Amount in Cents.
     */
    public function getRemainingAmountInCents(): ?int
    {
        return $this->remainingAmountInCents;
    }

    /**
     * Sets Remaining Amount in Cents.
     *
     * @maps remaining_amount_in_cents
     */
    public function setRemainingAmountInCents(?int $remainingAmountInCents): void
    {
        $this->remainingAmountInCents = $remainingAmountInCents;
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
    public function getExternal(): ?bool
    {
        return $this->external;
    }

    /**
     * Sets External.
     *
     * @maps external
     */
    public function setExternal(?bool $external): void
    {
        $this->external = $external;
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
     * Returns Payment Type.
     * :- When the `method` specified is `"credit_card_on_file"`, the prepayment amount will be collected
     * using the default credit card payment profile and applied to the prepayment account balance. This is
     * especially useful for manual replenishment of prepaid subscriptions.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * :- When the `method` specified is `"credit_card_on_file"`, the prepayment amount will be collected
     * using the default credit card payment profile and applied to the prepayment account balance. This is
     * especially useful for manual replenishment of prepaid subscriptions.
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
        if (isset($this->subscriptionGroupUid)) {
            $json['subscription_group_uid']    = $this->subscriptionGroupUid;
        }
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']           = $this->amountInCents;
        }
        if (isset($this->remainingAmountInCents)) {
            $json['remaining_amount_in_cents'] = $this->remainingAmountInCents;
        }
        if (isset($this->details)) {
            $json['details']                   = $this->details;
        }
        if (isset($this->external)) {
            $json['external']                  = $this->external;
        }
        if (isset($this->memo)) {
            $json['memo']                      = $this->memo;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']              = PrepaymentMethod::checkValue($this->paymentType);
        }
        if (isset($this->createdAt)) {
            $json['created_at']                = $this->createdAt;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
