<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceDiscount implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $sourceType;

    /**
     * @var int|null
     */
    private $sourceId;

    /**
     * @var string|null
     */
    private $discountType;

    /**
     * @var string|null
     */
    private $percentage;

    /**
     * @var string|null
     */
    private $eligibleAmount;

    /**
     * @var string|null
     */
    private $discountAmount;

    /**
     * @var int|null
     */
    private $transactionId;

    /**
     * @var InvoiceDiscountBreakout[]|null
     */
    private $lineItemBreakouts;

    /**
     * Returns Uid.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Title.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Source Type.
     */
    public function getSourceType(): ?string
    {
        return $this->sourceType;
    }

    /**
     * Sets Source Type.
     *
     * @maps source_type
     */
    public function setSourceType(?string $sourceType): void
    {
        $this->sourceType = $sourceType;
    }

    /**
     * Returns Source Id.
     */
    public function getSourceId(): ?int
    {
        return $this->sourceId;
    }

    /**
     * Sets Source Id.
     *
     * @maps source_id
     */
    public function setSourceId(?int $sourceId): void
    {
        $this->sourceId = $sourceId;
    }

    /**
     * Returns Discount Type.
     */
    public function getDiscountType(): ?string
    {
        return $this->discountType;
    }

    /**
     * Sets Discount Type.
     *
     * @maps discount_type
     */
    public function setDiscountType(?string $discountType): void
    {
        $this->discountType = $discountType;
    }

    /**
     * Returns Percentage.
     */
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    /**
     * Sets Percentage.
     *
     * @maps percentage
     */
    public function setPercentage(?string $percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * Returns Eligible Amount.
     */
    public function getEligibleAmount(): ?string
    {
        return $this->eligibleAmount;
    }

    /**
     * Sets Eligible Amount.
     *
     * @maps eligible_amount
     */
    public function setEligibleAmount(?string $eligibleAmount): void
    {
        $this->eligibleAmount = $eligibleAmount;
    }

    /**
     * Returns Discount Amount.
     */
    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }

    /**
     * Sets Discount Amount.
     *
     * @maps discount_amount
     */
    public function setDiscountAmount(?string $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * Returns Transaction Id.
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     *
     * @maps transaction_id
     */
    public function setTransactionId(?int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Line Item Breakouts.
     *
     * @return InvoiceDiscountBreakout[]|null
     */
    public function getLineItemBreakouts(): ?array
    {
        return $this->lineItemBreakouts;
    }

    /**
     * Sets Line Item Breakouts.
     *
     * @maps line_item_breakouts
     *
     * @param InvoiceDiscountBreakout[]|null $lineItemBreakouts
     */
    public function setLineItemBreakouts(?array $lineItemBreakouts): void
    {
        $this->lineItemBreakouts = $lineItemBreakouts;
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
        if (isset($this->uid)) {
            $json['uid']                 = $this->uid;
        }
        if (isset($this->title)) {
            $json['title']               = $this->title;
        }
        if (!empty($this->description)) {
            $json['description']         = $this->description['value'];
        }
        if (isset($this->code)) {
            $json['code']                = $this->code;
        }
        if (isset($this->sourceType)) {
            $json['source_type']         = $this->sourceType;
        }
        if (isset($this->sourceId)) {
            $json['source_id']           = $this->sourceId;
        }
        if (isset($this->discountType)) {
            $json['discount_type']       = $this->discountType;
        }
        if (isset($this->percentage)) {
            $json['percentage']          = $this->percentage;
        }
        if (isset($this->eligibleAmount)) {
            $json['eligible_amount']     = $this->eligibleAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount']     = $this->discountAmount;
        }
        if (isset($this->transactionId)) {
            $json['transaction_id']      = $this->transactionId;
        }
        if (isset($this->lineItemBreakouts)) {
            $json['line_item_breakouts'] = $this->lineItemBreakouts;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
