<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceTax implements \JsonSerializable
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
    private $sourceType;

    /**
     * @var int|null
     */
    private $sourceId;

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
     * @var int|null
     */
    private $transactionId;

    /**
     * @var InvoiceTaxBreakout[]|null
     */
    private $lineItemBreakouts;

    /**
     * @var InvoiceTaxComponentBreakout[]|null
     */
    private $taxComponentBreakouts;

    /**
     * @var bool|null
     */
    private $euVat;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $taxExemptAmount;

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

    /**
     * Returns Tax Component Breakouts.
     *
     * @return InvoiceTaxComponentBreakout[]|null
     */
    public function getTaxComponentBreakouts(): ?array
    {
        return $this->taxComponentBreakouts;
    }

    /**
     * Sets Tax Component Breakouts.
     *
     * @maps tax_component_breakouts
     *
     * @param InvoiceTaxComponentBreakout[]|null $taxComponentBreakouts
     */
    public function setTaxComponentBreakouts(?array $taxComponentBreakouts): void
    {
        $this->taxComponentBreakouts = $taxComponentBreakouts;
    }

    /**
     * Returns Eu Vat.
     */
    public function getEuVat(): ?bool
    {
        return $this->euVat;
    }

    /**
     * Sets Eu Vat.
     *
     * @maps eu_vat
     */
    public function setEuVat(?bool $euVat): void
    {
        $this->euVat = $euVat;
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Tax Exempt Amount.
     */
    public function getTaxExemptAmount(): ?string
    {
        return $this->taxExemptAmount;
    }

    /**
     * Sets Tax Exempt Amount.
     *
     * @maps tax_exempt_amount
     */
    public function setTaxExemptAmount(?string $taxExemptAmount): void
    {
        $this->taxExemptAmount = $taxExemptAmount;
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
            $json['uid']                     = $this->uid;
        }
        if (isset($this->title)) {
            $json['title']                   = $this->title;
        }
        if (!empty($this->description)) {
            $json['description']             = $this->description['value'];
        }
        if (isset($this->sourceType)) {
            $json['source_type']             = ProformaInvoiceTaxSourceType::checkValue($this->sourceType);
        }
        if (isset($this->sourceId)) {
            $json['source_id']               = $this->sourceId;
        }
        if (isset($this->percentage)) {
            $json['percentage']              = $this->percentage;
        }
        if (isset($this->taxableAmount)) {
            $json['taxable_amount']          = $this->taxableAmount;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']              = $this->taxAmount;
        }
        if (isset($this->transactionId)) {
            $json['transaction_id']          = $this->transactionId;
        }
        if (isset($this->lineItemBreakouts)) {
            $json['line_item_breakouts']     = $this->lineItemBreakouts;
        }
        if (isset($this->taxComponentBreakouts)) {
            $json['tax_component_breakouts'] = $this->taxComponentBreakouts;
        }
        if (isset($this->euVat)) {
            $json['eu_vat']                  = $this->euVat;
        }
        if (isset($this->type)) {
            $json['type']                    = $this->type;
        }
        if (isset($this->taxExemptAmount)) {
            $json['tax_exempt_amount']       = $this->taxExemptAmount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
