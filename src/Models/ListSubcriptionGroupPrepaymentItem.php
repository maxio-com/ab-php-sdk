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
     * @var \DateTime|null
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
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
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
            $json['created_at']                = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
