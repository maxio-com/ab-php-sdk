<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class InvoiceLineItem implements \JsonSerializable
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
    private $transactionId;

    /**
     * @var array
     */
    private $productId = [];

    /**
     * @var array
     */
    private $productVersion = [];

    /**
     * @var array
     */
    private $componentId = [];

    /**
     * @var array
     */
    private $pricePointId = [];

    /**
     * @var bool|null
     */
    private $hide;

    /**
     * @var array
     */
    private $componentCostData = [];

    /**
     * @var array
     */
    private $productPricePointId = [];

    /**
     * @var bool|null
     */
    private $customItem;

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
     * A short descriptor for the charge or item represented by this line.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * A short descriptor for the charge or item represented by this line.
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Description.
     * Detailed description for the charge or item represented by this line.  May include proration details
     * in plain text.
     *
     * Note: this string may contain line breaks that are hints for the best display format on the invoice.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Detailed description for the charge or item represented by this line.  May include proration details
     * in plain text.
     *
     * Note: this string may contain line breaks that are hints for the best display format on the invoice.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Quantity.
     * The quantity or count of units billed by the line item.
     *
     * This is a decimal number represented as a string. (See "About Decimal Numbers".)
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The quantity or count of units billed by the line item.
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
     * The approximate discount applied to just this line.
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
     * The approximate discount applied to just this line.
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
     * The approximate tax applied to just this line.
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
     * The approximate tax applied to just this line.
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
     * Start date for the period covered by this line. The format is `"YYYY-MM-DD"`.
     *
     * * For periodic charges paid in advance, this date will match the billing date, and the end date will
     * be in the future.
     * * For periodic charges paid in arrears (e.g. metered charges), this date will be the date of the
     * previous billing, and the end date will be the current billing date.
     * * For non-periodic charges, this date and the end date will match.
     */
    public function getPeriodRangeStart(): ?string
    {
        return $this->periodRangeStart;
    }

    /**
     * Sets Period Range Start.
     * Start date for the period covered by this line. The format is `"YYYY-MM-DD"`.
     *
     * * For periodic charges paid in advance, this date will match the billing date, and the end date will
     * be in the future.
     * * For periodic charges paid in arrears (e.g. metered charges), this date will be the date of the
     * previous billing, and the end date will be the current billing date.
     * * For non-periodic charges, this date and the end date will match.
     *
     * @maps period_range_start
     */
    public function setPeriodRangeStart(?string $periodRangeStart): void
    {
        $this->periodRangeStart = $periodRangeStart;
    }

    /**
     * Returns Period Range End.
     * End date for the period covered by this line. The format is `"YYYY-MM-DD"`.
     *
     * * For periodic charges paid in advance, this date will match the next (future) billing date.
     * * For periodic charges paid in arrears (e.g. metered charges), this date will be the date of the
     * current billing date.
     * * For non-periodic charges, this date and the start date will match.
     */
    public function getPeriodRangeEnd(): ?string
    {
        return $this->periodRangeEnd;
    }

    /**
     * Sets Period Range End.
     * End date for the period covered by this line. The format is `"YYYY-MM-DD"`.
     *
     * * For periodic charges paid in advance, this date will match the next (future) billing date.
     * * For periodic charges paid in arrears (e.g. metered charges), this date will be the date of the
     * current billing date.
     * * For non-periodic charges, this date and the start date will match.
     *
     * @maps period_range_end
     */
    public function setPeriodRangeEnd(?string $periodRangeEnd): void
    {
        $this->periodRangeEnd = $periodRangeEnd;
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
     * Returns Product Id.
     * The ID of the product subscribed when the charge was made.
     *
     * This may be set even for component charges, so true product-only (non-component) charges will also
     * have a nil `component_id`.
     */
    public function getProductId(): ?int
    {
        if (count($this->productId) == 0) {
            return null;
        }
        return $this->productId['value'];
    }

    /**
     * Sets Product Id.
     * The ID of the product subscribed when the charge was made.
     *
     * This may be set even for component charges, so true product-only (non-component) charges will also
     * have a nil `component_id`.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId['value'] = $productId;
    }

    /**
     * Unsets Product Id.
     * The ID of the product subscribed when the charge was made.
     *
     * This may be set even for component charges, so true product-only (non-component) charges will also
     * have a nil `component_id`.
     */
    public function unsetProductId(): void
    {
        $this->productId = [];
    }

    /**
     * Returns Product Version.
     * The version of the product subscribed when the charge was made.
     */
    public function getProductVersion(): ?int
    {
        if (count($this->productVersion) == 0) {
            return null;
        }
        return $this->productVersion['value'];
    }

    /**
     * Sets Product Version.
     * The version of the product subscribed when the charge was made.
     *
     * @maps product_version
     */
    public function setProductVersion(?int $productVersion): void
    {
        $this->productVersion['value'] = $productVersion;
    }

    /**
     * Unsets Product Version.
     * The version of the product subscribed when the charge was made.
     */
    public function unsetProductVersion(): void
    {
        $this->productVersion = [];
    }

    /**
     * Returns Component Id.
     * The ID of the component being billed. Will be `nil` for non-component charges.
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
     * The ID of the component being billed. Will be `nil` for non-component charges.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId['value'] = $componentId;
    }

    /**
     * Unsets Component Id.
     * The ID of the component being billed. Will be `nil` for non-component charges.
     */
    public function unsetComponentId(): void
    {
        $this->componentId = [];
    }

    /**
     * Returns Price Point Id.
     * The price point ID of the component being billed. Will be `nil` for non-component charges.
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
     * The price point ID of the component being billed. Will be `nil` for non-component charges.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId['value'] = $pricePointId;
    }

    /**
     * Unsets Price Point Id.
     * The price point ID of the component being billed. Will be `nil` for non-component charges.
     */
    public function unsetPricePointId(): void
    {
        $this->pricePointId = [];
    }

    /**
     * Returns Hide.
     */
    public function getHide(): ?bool
    {
        return $this->hide;
    }

    /**
     * Sets Hide.
     *
     * @maps hide
     */
    public function setHide(?bool $hide): void
    {
        $this->hide = $hide;
    }

    /**
     * Returns Component Cost Data.
     */
    public function getComponentCostData(): ?InvoiceLineItemComponentCostData
    {
        if (count($this->componentCostData) == 0) {
            return null;
        }
        return $this->componentCostData['value'];
    }

    /**
     * Sets Component Cost Data.
     *
     * @maps component_cost_data
     * @mapsBy anyOf(oneOf(InvoiceLineItemComponentCostData),null)
     */
    public function setComponentCostData(?InvoiceLineItemComponentCostData $componentCostData): void
    {
        $this->componentCostData['value'] = $componentCostData;
    }

    /**
     * Unsets Component Cost Data.
     */
    public function unsetComponentCostData(): void
    {
        $this->componentCostData = [];
    }

    /**
     * Returns Product Price Point Id.
     * The price point ID of the line item's product
     */
    public function getProductPricePointId(): ?int
    {
        if (count($this->productPricePointId) == 0) {
            return null;
        }
        return $this->productPricePointId['value'];
    }

    /**
     * Sets Product Price Point Id.
     * The price point ID of the line item's product
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId['value'] = $productPricePointId;
    }

    /**
     * Unsets Product Price Point Id.
     * The price point ID of the line item's product
     */
    public function unsetProductPricePointId(): void
    {
        $this->productPricePointId = [];
    }

    /**
     * Returns Custom Item.
     */
    public function getCustomItem(): ?bool
    {
        return $this->customItem;
    }

    /**
     * Sets Custom Item.
     *
     * @maps custom_item
     */
    public function setCustomItem(?bool $customItem): void
    {
        $this->customItem = $customItem;
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
            $json['uid']                    = $this->uid;
        }
        if (isset($this->title)) {
            $json['title']                  = $this->title;
        }
        if (isset($this->description)) {
            $json['description']            = $this->description;
        }
        if (isset($this->quantity)) {
            $json['quantity']               = $this->quantity;
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']             = $this->unitPrice;
        }
        if (isset($this->subtotalAmount)) {
            $json['subtotal_amount']        = $this->subtotalAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount']        = $this->discountAmount;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']             = $this->taxAmount;
        }
        if (isset($this->totalAmount)) {
            $json['total_amount']           = $this->totalAmount;
        }
        if (isset($this->tieredUnitPrice)) {
            $json['tiered_unit_price']      = $this->tieredUnitPrice;
        }
        if (isset($this->periodRangeStart)) {
            $json['period_range_start']     = $this->periodRangeStart;
        }
        if (isset($this->periodRangeEnd)) {
            $json['period_range_end']       = $this->periodRangeEnd;
        }
        if (isset($this->transactionId)) {
            $json['transaction_id']         = $this->transactionId;
        }
        if (!empty($this->productId)) {
            $json['product_id']             = $this->productId['value'];
        }
        if (!empty($this->productVersion)) {
            $json['product_version']        = $this->productVersion['value'];
        }
        if (!empty($this->componentId)) {
            $json['component_id']           = $this->componentId['value'];
        }
        if (!empty($this->pricePointId)) {
            $json['price_point_id']         = $this->pricePointId['value'];
        }
        if (isset($this->hide)) {
            $json['hide']                   = $this->hide;
        }
        if (!empty($this->componentCostData)) {
            $json['component_cost_data']    =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->componentCostData['value'],
                    'anyOf(oneOf(InvoiceLineItemComponentCostData),null)'
                );
        }
        if (!empty($this->productPricePointId)) {
            $json['product_price_point_id'] = $this->productPricePointId['value'];
        }
        if (isset($this->customItem)) {
            $json['custom_item']            = $this->customItem;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
