<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ProformaInvoiceDiscount implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $sourceType;

    /**
     * @var string|null
     */
    private $discountType;

    /**
     * @var string|null
     */
    private $eligibleAmount;

    /**
     * @var string|null
     */
    private $discountAmount;

    /**
     * @var ProformaInvoiceDiscountBreakout[]|null
     */
    private $lineItemBreakouts;

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
     * Returns Line Item Breakouts.
     *
     * @return ProformaInvoiceDiscountBreakout[]|null
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
     * @param ProformaInvoiceDiscountBreakout[]|null $lineItemBreakouts
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
        if (isset($this->title)) {
            $json['title']               = $this->title;
        }
        if (isset($this->sourceType)) {
            $json['source_type']         = $this->sourceType;
        }
        if (isset($this->discountType)) {
            $json['discount_type']       = $this->discountType;
        }
        if (isset($this->eligibleAmount)) {
            $json['eligible_amount']     = $this->eligibleAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount']     = $this->discountAmount;
        }
        if (isset($this->lineItemBreakouts)) {
            $json['line_item_breakouts'] = $this->lineItemBreakouts;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
