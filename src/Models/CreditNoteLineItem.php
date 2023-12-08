<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreditNoteLineItem implements \JsonSerializable
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
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $quantity;

    /**
     * @var string|null
     */
    private $unitPrice;

    /**
     * @var string|null
     */
    private $subtotalAmount;

    /**
     * @var string|null
     */
    private $discountAmount;

    /**
     * @var string|null
     */
    private $taxAmount;

    /**
     * @var string|null
     */
    private $totalAmount;

    /**
     * @var bool|null
     */
    private $tieredUnitPrice;

    /**
     * @var string|null
     */
    private $periodRangeStart;

    /**
     * @var string|null
     */
    private $periodRangeEnd;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var int|null
     */
    private $productVersion;

    /**
     * @var array
     */
    private $componentId = [];

    /**
     * @var array
     */
    private $pricePointId = [];

    /**
     * Returns Uid.
     * Unique identifier for the line item.  Useful when cross-referencing the line against individual
     * discounts in the `discounts` or `taxes` lists.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * Unique identifier for the line item.  Useful when cross-referencing the line against individual
     * discounts in the `discounts` or `taxes` lists.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Title.
     * A short descriptor for the credit given by this line.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * A short descriptor for the credit given by this line.
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Description.
     * Detailed description for the credit given by this line.  May include proration details in plain text.
     *
     * Note: this string may contain line breaks that are hints for the best display format on the credit
     * note.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Detailed description for the credit given by this line.  May include proration details in plain text.
     *
     * Note: this string may contain line breaks that are hints for the best display format on the credit
     * note.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Quantity.
     * The quantity or count of units credited by the line item.
     *
     * This is a decimal number represented as a string. (See "About Decimal Numbers".)
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The quantity or count of units credited by the line item.
     *
     * This is a decimal number represented as a string. (See "About Decimal Numbers".)
     *
     * @maps quantity
     */
    public function setQuantity(?string $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Unit Price.
     * The price per unit for the line item.
     *
     * When tiered pricing was used (i.e. not every unit was actually priced at the same price) this will
     * be the blended average cost per unit and the `tiered_unit_price` field will be set to `true`.
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     * The price per unit for the line item.
     *
     * When tiered pricing was used (i.e. not every unit was actually priced at the same price) this will
     * be the blended average cost per unit and the `tiered_unit_price` field will be set to `true`.
     *
     * @maps unit_price
     */
    public function setUnitPrice(?string $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Subtotal Amount.
     * The line subtotal, generally calculated as `quantity * unit_price`. This is the canonical amount of
     * record for the line - when rounding differences are in play, `subtotal_amount` takes precedence over
     * the value derived from `quantity * unit_price` (which may not have the proper precision to exactly
     * equal this amount).
     */
    public function getSubtotalAmount(): ?string
    {
        return $this->subtotalAmount;
    }

    /**
     * Sets Subtotal Amount.
     * The line subtotal, generally calculated as `quantity * unit_price`. This is the canonical amount of
     * record for the line - when rounding differences are in play, `subtotal_amount` takes precedence over
     * the value derived from `quantity * unit_price` (which may not have the proper precision to exactly
     * equal this amount).
     *
     * @maps subtotal_amount
     */
    public function setSubtotalAmount(?string $subtotalAmount): void
    {
        $this->subtotalAmount = $subtotalAmount;
    }

    /**
     * Returns Discount Amount.
     * The approximate discount of just this line.
     *
     * The value is approximated in cases where rounding errors make it difficult to apportion exactly a
     * total discount among many lines. Several lines may have been summed prior to applying the discount
     * to arrive at `discount_amount` for the invoice - backing that out to the discount on a single line
     * may introduce rounding or precision errors.
     */
    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }

    /**
     * Sets Discount Amount.
     * The approximate discount of just this line.
     *
     * The value is approximated in cases where rounding errors make it difficult to apportion exactly a
     * total discount among many lines. Several lines may have been summed prior to applying the discount
     * to arrive at `discount_amount` for the invoice - backing that out to the discount on a single line
     * may introduce rounding or precision errors.
     *
     * @maps discount_amount
     */
    public function setDiscountAmount(?string $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * Returns Tax Amount.
     * The approximate tax of just this line.
     *
     * The value is approximated in cases where rounding errors make it difficult to apportion exactly a
     * total tax among many lines. Several lines may have been summed prior to applying the tax rate to
     * arrive at `tax_amount` for the invoice - backing that out to the tax on a single line may introduce
     * rounding or precision errors.
     */
    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    /**
     * Sets Tax Amount.
     * The approximate tax of just this line.
     *
     * The value is approximated in cases where rounding errors make it difficult to apportion exactly a
     * total tax among many lines. Several lines may have been summed prior to applying the tax rate to
     * arrive at `tax_amount` for the invoice - backing that out to the tax on a single line may introduce
     * rounding or precision errors.
     *
     * @maps tax_amount
     */
    public function setTaxAmount(?string $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Returns Total Amount.
     * The non-canonical total amount for the line.
     *
     * `subtotal_amount` is the canonical amount for a line. The invoice `total_amount` is derived from the
     * sum of the line `subtotal_amount`s and discounts or taxes applied thereafter.  Therefore, due to
     * rounding or precision errors, the sum of line `total_amount`s may not equal the invoice
     * `total_amount`.
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     * The non-canonical total amount for the line.
     *
     * `subtotal_amount` is the canonical amount for a line. The invoice `total_amount` is derived from the
     * sum of the line `subtotal_amount`s and discounts or taxes applied thereafter.  Therefore, due to
     * rounding or precision errors, the sum of line `total_amount`s may not equal the invoice
     * `total_amount`.
     *
     * @maps total_amount
     */
    public function setTotalAmount(?string $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Tiered Unit Price.
     * When `true`, indicates that the actual pricing scheme for the line was tiered, so the `unit_price`
     * shown is the blended average for all units.
     */
    public function getTieredUnitPrice(): ?bool
    {
        return $this->tieredUnitPrice;
    }

    /**
     * Sets Tiered Unit Price.
     * When `true`, indicates that the actual pricing scheme for the line was tiered, so the `unit_price`
     * shown is the blended average for all units.
     *
     * @maps tiered_unit_price
     */
    public function setTieredUnitPrice(?bool $tieredUnitPrice): void
    {
        $this->tieredUnitPrice = $tieredUnitPrice;
    }

    /**
     * Returns Period Range Start.
     * Start date for the period credited by this line. The format is `"YYYY-MM-DD"`.
     */
    public function getPeriodRangeStart(): ?string
    {
        return $this->periodRangeStart;
    }

    /**
     * Sets Period Range Start.
     * Start date for the period credited by this line. The format is `"YYYY-MM-DD"`.
     *
     * @maps period_range_start
     */
    public function setPeriodRangeStart(?string $periodRangeStart): void
    {
        $this->periodRangeStart = $periodRangeStart;
    }

    /**
     * Returns Period Range End.
     * End date for the period credited by this line. The format is `"YYYY-MM-DD"`.
     */
    public function getPeriodRangeEnd(): ?string
    {
        return $this->periodRangeEnd;
    }

    /**
     * Sets Period Range End.
     * End date for the period credited by this line. The format is `"YYYY-MM-DD"`.
     *
     * @maps period_range_end
     */
    public function setPeriodRangeEnd(?string $periodRangeEnd): void
    {
        $this->periodRangeEnd = $periodRangeEnd;
    }

    /**
     * Returns Product Id.
     * The ID of the product being credited.
     *
     * This may be set even for component credits, so true product-only (non-component) credits will also
     * have a nil `component_id`.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * The ID of the product being credited.
     *
     * This may be set even for component credits, so true product-only (non-component) credits will also
     * have a nil `component_id`.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Product Version.
     * The version of the product being credited.
     */
    public function getProductVersion(): ?int
    {
        return $this->productVersion;
    }

    /**
     * Sets Product Version.
     * The version of the product being credited.
     *
     * @maps product_version
     */
    public function setProductVersion(?int $productVersion): void
    {
        $this->productVersion = $productVersion;
    }

    /**
     * Returns Component Id.
     * The ID of the component being credited. Will be `nil` for non-component credits.
     */
    public function getComponentId(): ?int
    {
        if (count($this->componentId) == 0) {
            return null;
        }
        return $this->componentId['value'];
    }

    /**
     * Sets Component Id.
     * The ID of the component being credited. Will be `nil` for non-component credits.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId['value'] = $componentId;
    }

    /**
     * Unsets Component Id.
     * The ID of the component being credited. Will be `nil` for non-component credits.
     */
    public function unsetComponentId(): void
    {
        $this->componentId = [];
    }

    /**
     * Returns Price Point Id.
     * The price point ID of the component being credited. Will be `nil` for non-component credits.
     */
    public function getPricePointId(): ?int
    {
        if (count($this->pricePointId) == 0) {
            return null;
        }
        return $this->pricePointId['value'];
    }

    /**
     * Sets Price Point Id.
     * The price point ID of the component being credited. Will be `nil` for non-component credits.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId['value'] = $pricePointId;
    }

    /**
     * Unsets Price Point Id.
     * The price point ID of the component being credited. Will be `nil` for non-component credits.
     */
    public function unsetPricePointId(): void
    {
        $this->pricePointId = [];
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
            $json['uid']                = $this->uid;
        }
        if (isset($this->title)) {
            $json['title']              = $this->title;
        }
        if (isset($this->description)) {
            $json['description']        = $this->description;
        }
        if (isset($this->quantity)) {
            $json['quantity']           = $this->quantity;
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']         = $this->unitPrice;
        }
        if (isset($this->subtotalAmount)) {
            $json['subtotal_amount']    = $this->subtotalAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount']    = $this->discountAmount;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']         = $this->taxAmount;
        }
        if (isset($this->totalAmount)) {
            $json['total_amount']       = $this->totalAmount;
        }
        if (isset($this->tieredUnitPrice)) {
            $json['tiered_unit_price']  = $this->tieredUnitPrice;
        }
        if (isset($this->periodRangeStart)) {
            $json['period_range_start'] = $this->periodRangeStart;
        }
        if (isset($this->periodRangeEnd)) {
            $json['period_range_end']   = $this->periodRangeEnd;
        }
        if (isset($this->productId)) {
            $json['product_id']         = $this->productId;
        }
        if (isset($this->productVersion)) {
            $json['product_version']    = $this->productVersion;
        }
        if (!empty($this->componentId)) {
            $json['component_id']       = $this->componentId['value'];
        }
        if (!empty($this->pricePointId)) {
            $json['price_point_id']     = $this->pricePointId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
