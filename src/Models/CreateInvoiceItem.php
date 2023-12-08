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

class CreateInvoiceItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $title;

    /**
     * @var float|string|null
     */
    private $quantity;

    /**
     * @var float|string|null
     */
    private $unitPrice;

    /**
     * @var bool|null
     */
    private $taxable;

    /**
     * @var string|null
     */
    private $taxCode;

    /**
     * @var string|null
     */
    private $periodRangeStart;

    /**
     * @var string|null
     */
    private $periodRangeEnd;

    /**
     * @var string|int|null
     */
    private $productId;

    /**
     * @var string|int|null
     */
    private $componentId;

    /**
     * @var string|int|null
     */
    private $pricePointId;

    /**
     * @var string|int|null
     */
    private $productPricePointId;

    /**
     * @var string|null
     */
    private $description;

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
     * Returns Quantity.
     * The quantity can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065. If you submit a
     * value with more than 8 decimal places, we will round it down to the 8th decimal place.
     *
     * @return float|string|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The quantity can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065. If you submit a
     * value with more than 8 decimal places, we will round it down to the 8th decimal place.
     *
     * @maps quantity
     * @mapsBy anyOf(oneOf(float,string),null)
     *
     * @param float|string|null $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Unit Price.
     * The unit_price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065. If you submit
     * a value with more than 8 decimal places, we will round it down to the 8th decimal place.
     *
     * @return float|string|null
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets Unit Price.
     * The unit_price can contain up to 8 decimal places. i.e. 1.00 or 0.0012 or 0.00000065. If you submit
     * a value with more than 8 decimal places, we will round it down to the 8th decimal place.
     *
     * @maps unit_price
     * @mapsBy anyOf(oneOf(float,string),null)
     *
     * @param float|string|null $unitPrice
     */
    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Returns Taxable.
     * Set to true to automatically calculate taxes. Site must be configured to use and calculate taxes.
     *
     * If using Avalara, a tax_code parameter must also be sent.
     */
    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    /**
     * Sets Taxable.
     * Set to true to automatically calculate taxes. Site must be configured to use and calculate taxes.
     *
     * If using Avalara, a tax_code parameter must also be sent.
     *
     * @maps taxable
     */
    public function setTaxable(?bool $taxable): void
    {
        $this->taxable = $taxable;
    }

    /**
     * Returns Tax Code.
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * Sets Tax Code.
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode = $taxCode;
    }

    /**
     * Returns Period Range Start.
     * YYYY-MM-DD
     */
    public function getPeriodRangeStart(): ?string
    {
        return $this->periodRangeStart;
    }

    /**
     * Sets Period Range Start.
     * YYYY-MM-DD
     *
     * @maps period_range_start
     */
    public function setPeriodRangeStart(?string $periodRangeStart): void
    {
        $this->periodRangeStart = $periodRangeStart;
    }

    /**
     * Returns Period Range End.
     * YYYY-MM-DD
     */
    public function getPeriodRangeEnd(): ?string
    {
        return $this->periodRangeEnd;
    }

    /**
     * Sets Period Range End.
     * YYYY-MM-DD
     *
     * @maps period_range_end
     */
    public function setPeriodRangeEnd(?string $periodRangeEnd): void
    {
        $this->periodRangeEnd = $periodRangeEnd;
    }

    /**
     * Returns Product Id.
     * Product handle or product id.
     *
     * @return string|int|null
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * Product handle or product id.
     *
     * @maps product_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $productId
     */
    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Component Id.
     * Component handle or component id.
     *
     * @return string|int|null
     */
    public function getComponentId()
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     * Component handle or component id.
     *
     * @maps component_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $componentId
     */
    public function setComponentId($componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Price Point Id.
     * Price point handle or id. For component.
     *
     * @return string|int|null
     */
    public function getPricePointId()
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     * Price point handle or id. For component.
     *
     * @maps price_point_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $pricePointId
     */
    public function setPricePointId($pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Product Price Point Id.
     *
     * @return string|int|null
     */
    public function getProductPricePointId()
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     *
     * @maps product_price_point_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $productPricePointId
     */
    public function setProductPricePointId($productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
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
            $json['title']                  = $this->title;
        }
        if (isset($this->quantity)) {
            $json['quantity']               =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->quantity,
                    'anyOf(oneOf(float,string),null)'
                );
        }
        if (isset($this->unitPrice)) {
            $json['unit_price']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->unitPrice,
                    'anyOf(oneOf(float,string),null)'
                );
        }
        if (isset($this->taxable)) {
            $json['taxable']                = $this->taxable;
        }
        if (isset($this->taxCode)) {
            $json['tax_code']               = $this->taxCode;
        }
        if (isset($this->periodRangeStart)) {
            $json['period_range_start']     = $this->periodRangeStart;
        }
        if (isset($this->periodRangeEnd)) {
            $json['period_range_end']       = $this->periodRangeEnd;
        }
        if (isset($this->productId)) {
            $json['product_id']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->productId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->componentId)) {
            $json['component_id']           =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->componentId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']         =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricePointId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->productPricePointId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->description)) {
            $json['description']            = $this->description;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
