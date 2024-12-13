<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceLineItemEventData implements \JsonSerializable
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
     * @var int|null
     */
    private $quantity;

    /**
     * @var array
     */
    private $quantityDelta = [];

    /**
     * @var string|null
     */
    private $unitPrice;

    /**
     * @var string|null
     */
    private $periodRangeStart;

    /**
     * @var string|null
     */
    private $periodRangeEnd;

    /**
     * @var string|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $lineReferences;

    /**
     * @var array
     */
    private $pricingDetailsIndex = [];

    /**
     * @var InvoiceLineItemPricingDetail[]|null
     */
    private $pricingDetails;

    /**
     * @var array
     */
    private $taxCode = [];

    /**
     * @var string|null
     */
    private $taxAmount;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var array
     */
    private $productPricePointId = [];

    /**
     * @var array
     */
    private $pricePointId = [];

    /**
     * @var array
     */
    private $componentId = [];

    /**
     * @var array
     */
    private $billingScheduleItemId = [];

    /**
     * @var array
     */
    private $customItem = [];

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
     * Returns Quantity.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Quantity Delta.
     */
    public function getQuantityDelta(): ?int
    {
        if (count($this->quantityDelta) == 0) {
            return null;
        }
        return $this->quantityDelta['value'];
    }

    /**
     * Sets Quantity Delta.
     *
     * @maps quantity_delta
     */
    public function setQuantityDelta(?int $quantityDelta): void
    {
        $this->quantityDelta['value'] = $quantityDelta;
    }

    /**
     * Unsets Quantity Delta.
     */
    public function unsetQuantityDelta(): void
    {
        $this->quantityDelta = [];
    }

    /**
     * Returns Unit Price.
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     *
     * @maps unit_price
     */
    public function setUnitPrice(?string $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Period Range Start.
     */
    public function getPeriodRangeStart(): ?string
    {
        return $this->periodRangeStart;
    }

    /**
     * Sets Period Range Start.
     *
     * @maps period_range_start
     */
    public function setPeriodRangeStart(?string $periodRangeStart): void
    {
        $this->periodRangeStart = $periodRangeStart;
    }

    /**
     * Returns Period Range End.
     */
    public function getPeriodRangeEnd(): ?string
    {
        return $this->periodRangeEnd;
    }

    /**
     * Sets Period Range End.
     *
     * @maps period_range_end
     */
    public function setPeriodRangeEnd(?string $periodRangeEnd): void
    {
        $this->periodRangeEnd = $periodRangeEnd;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Line References.
     */
    public function getLineReferences(): ?string
    {
        return $this->lineReferences;
    }

    /**
     * Sets Line References.
     *
     * @maps line_references
     */
    public function setLineReferences(?string $lineReferences): void
    {
        $this->lineReferences = $lineReferences;
    }

    /**
     * Returns Pricing Details Index.
     */
    public function getPricingDetailsIndex(): ?int
    {
        if (count($this->pricingDetailsIndex) == 0) {
            return null;
        }
        return $this->pricingDetailsIndex['value'];
    }

    /**
     * Sets Pricing Details Index.
     *
     * @maps pricing_details_index
     */
    public function setPricingDetailsIndex(?int $pricingDetailsIndex): void
    {
        $this->pricingDetailsIndex['value'] = $pricingDetailsIndex;
    }

    /**
     * Unsets Pricing Details Index.
     */
    public function unsetPricingDetailsIndex(): void
    {
        $this->pricingDetailsIndex = [];
    }

    /**
     * Returns Pricing Details.
     *
     * @return InvoiceLineItemPricingDetail[]|null
     */
    public function getPricingDetails(): ?array
    {
        return $this->pricingDetails;
    }

    /**
     * Sets Pricing Details.
     *
     * @maps pricing_details
     *
     * @param InvoiceLineItemPricingDetail[]|null $pricingDetails
     */
    public function setPricingDetails(?array $pricingDetails): void
    {
        $this->pricingDetails = $pricingDetails;
    }

    /**
     * Returns Tax Code.
     */
    public function getTaxCode(): ?string
    {
        if (count($this->taxCode) == 0) {
            return null;
        }
        return $this->taxCode['value'];
    }

    /**
     * Sets Tax Code.
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode['value'] = $taxCode;
    }

    /**
     * Unsets Tax Code.
     */
    public function unsetTaxCode(): void
    {
        $this->taxCode = [];
    }

    /**
     * Returns Tax Amount.
     */
    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    /**
     * Sets Tax Amount.
     *
     * @maps tax_amount
     */
    public function setTaxAmount(?string $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Product Price Point Id.
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
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId['value'] = $productPricePointId;
    }

    /**
     * Unsets Product Price Point Id.
     */
    public function unsetProductPricePointId(): void
    {
        $this->productPricePointId = [];
    }

    /**
     * Returns Price Point Id.
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
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId['value'] = $pricePointId;
    }

    /**
     * Unsets Price Point Id.
     */
    public function unsetPricePointId(): void
    {
        $this->pricePointId = [];
    }

    /**
     * Returns Component Id.
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
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId['value'] = $componentId;
    }

    /**
     * Unsets Component Id.
     */
    public function unsetComponentId(): void
    {
        $this->componentId = [];
    }

    /**
     * Returns Billing Schedule Item Id.
     */
    public function getBillingScheduleItemId(): ?int
    {
        if (count($this->billingScheduleItemId) == 0) {
            return null;
        }
        return $this->billingScheduleItemId['value'];
    }

    /**
     * Sets Billing Schedule Item Id.
     *
     * @maps billing_schedule_item_id
     */
    public function setBillingScheduleItemId(?int $billingScheduleItemId): void
    {
        $this->billingScheduleItemId['value'] = $billingScheduleItemId;
    }

    /**
     * Unsets Billing Schedule Item Id.
     */
    public function unsetBillingScheduleItemId(): void
    {
        $this->billingScheduleItemId = [];
    }

    /**
     * Returns Custom Item.
     */
    public function getCustomItem(): ?bool
    {
        if (count($this->customItem) == 0) {
            return null;
        }
        return $this->customItem['value'];
    }

    /**
     * Sets Custom Item.
     *
     * @maps custom_item
     */
    public function setCustomItem(?bool $customItem): void
    {
        $this->customItem['value'] = $customItem;
    }

    /**
     * Unsets Custom Item.
     */
    public function unsetCustomItem(): void
    {
        $this->customItem = [];
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
        if (isset($this->uid)) {
            $json['uid']                      = $this->uid;
        }
        if (isset($this->title)) {
            $json['title']                    = $this->title;
        }
        if (isset($this->description)) {
            $json['description']              = $this->description;
        }
        if (isset($this->quantity)) {
            $json['quantity']                 = $this->quantity;
        }
        if (!empty($this->quantityDelta)) {
            $json['quantity_delta']           = $this->quantityDelta['value'];
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']               = $this->unitPrice;
        }
        if (isset($this->periodRangeStart)) {
            $json['period_range_start']       = $this->periodRangeStart;
        }
        if (isset($this->periodRangeEnd)) {
            $json['period_range_end']         = $this->periodRangeEnd;
        }
        if (isset($this->amount)) {
            $json['amount']                   = $this->amount;
        }
        if (isset($this->lineReferences)) {
            $json['line_references']          = $this->lineReferences;
        }
        if (!empty($this->pricingDetailsIndex)) {
            $json['pricing_details_index']    = $this->pricingDetailsIndex['value'];
        }
        if (isset($this->pricingDetails)) {
            $json['pricing_details']          = $this->pricingDetails;
        }
        if (!empty($this->taxCode)) {
            $json['tax_code']                 = $this->taxCode['value'];
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']               = $this->taxAmount;
        }
        if (isset($this->productId)) {
            $json['product_id']               = $this->productId;
        }
        if (!empty($this->productPricePointId)) {
            $json['product_price_point_id']   = $this->productPricePointId['value'];
        }
        if (!empty($this->pricePointId)) {
            $json['price_point_id']           = $this->pricePointId['value'];
        }
        if (!empty($this->componentId)) {
            $json['component_id']             = $this->componentId['value'];
        }
        if (!empty($this->billingScheduleItemId)) {
            $json['billing_schedule_item_id'] = $this->billingScheduleItemId['value'];
        }
        if (!empty($this->customItem)) {
            $json['custom_item']              = $this->customItem['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
