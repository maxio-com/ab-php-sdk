<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ProformaInvoiceTax implements \JsonSerializable
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
    private $sourceType;

    /**
     * @var string|null
     */
    private $percentage;

    /**
     * @var string|null
     */
    private $taxableAmount;

    /**
     * @var string|null
     */
    private $taxAmount;

    /**
     * @var InvoiceTaxBreakout[]|null
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
     * @factory \AdvancedBillingLib\Models\ProformaInvoiceTaxSourceType::checkValue
     */
    public function setSourceType(?string $sourceType): void
    {
        $this->sourceType = $sourceType;
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
     * Returns Taxable Amount.
     */
    public function getTaxableAmount(): ?string
    {
        return $this->taxableAmount;
    }

    /**
     * Sets Taxable Amount.
     *
     * @maps taxable_amount
     */
    public function setTaxableAmount(?string $taxableAmount): void
    {
        $this->taxableAmount = $taxableAmount;
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
     * Returns Line Item Breakouts.
     *
     * @return InvoiceTaxBreakout[]|null
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
     * @param InvoiceTaxBreakout[]|null $lineItemBreakouts
     */
    public function setLineItemBreakouts(?array $lineItemBreakouts): void
    {
        $this->lineItemBreakouts = $lineItemBreakouts;
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
            $json['uid']                 = $this->uid;
        }
        if (isset($this->title)) {
            $json['title']               = $this->title;
        }
        if (isset($this->sourceType)) {
            $json['source_type']         = ProformaInvoiceTaxSourceType::checkValue($this->sourceType);
        }
        if (isset($this->percentage)) {
            $json['percentage']          = $this->percentage;
        }
        if (isset($this->taxableAmount)) {
            $json['taxable_amount']      = $this->taxableAmount;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']          = $this->taxAmount;
        }
        if (isset($this->lineItemBreakouts)) {
            $json['line_item_breakouts'] = $this->lineItemBreakouts;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
