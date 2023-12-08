<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class RenewalPreviewLineItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $transactionType;

    /**
     * @var string|null
     */
    private $kind;

    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var int|null
     */
    private $discountAmountInCents;

    /**
     * @var int|null
     */
    private $taxableAmountInCents;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var string|null
     */
    private $productName;

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var string|null
     */
    private $componentHandle;

    /**
     * @var string|null
     */
    private $componentName;

    /**
     * @var string|null
     */
    private $productHandle;

    /**
     * Returns Transaction Type.
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }

    /**
     * Sets Transaction Type.
     *
     * @maps transaction_type
     */
    public function setTransactionType(?string $transactionType): void
    {
        $this->transactionType = $transactionType;
    }

    /**
     * Returns Kind.
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     *
     * @maps kind
     */
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
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
     * Returns Discount Amount in Cents.
     */
    public function getDiscountAmountInCents(): ?int
    {
        return $this->discountAmountInCents;
    }

    /**
     * Sets Discount Amount in Cents.
     *
     * @maps discount_amount_in_cents
     */
    public function setDiscountAmountInCents(?int $discountAmountInCents): void
    {
        $this->discountAmountInCents = $discountAmountInCents;
    }

    /**
     * Returns Taxable Amount in Cents.
     */
    public function getTaxableAmountInCents(): ?int
    {
        return $this->taxableAmountInCents;
    }

    /**
     * Sets Taxable Amount in Cents.
     *
     * @maps taxable_amount_in_cents
     */
    public function setTaxableAmountInCents(?int $taxableAmountInCents): void
    {
        $this->taxableAmountInCents = $taxableAmountInCents;
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
     * Returns Product Name.
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * Sets Product Name.
     *
     * @maps product_name
     */
    public function setProductName(?string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * Returns Component Id.
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Component Handle.
     */
    public function getComponentHandle(): ?string
    {
        return $this->componentHandle;
    }

    /**
     * Sets Component Handle.
     *
     * @maps component_handle
     */
    public function setComponentHandle(?string $componentHandle): void
    {
        $this->componentHandle = $componentHandle;
    }

    /**
     * Returns Component Name.
     */
    public function getComponentName(): ?string
    {
        return $this->componentName;
    }

    /**
     * Sets Component Name.
     *
     * @maps component_name
     */
    public function setComponentName(?string $componentName): void
    {
        $this->componentName = $componentName;
    }

    /**
     * Returns Product Handle.
     */
    public function getProductHandle(): ?string
    {
        return $this->productHandle;
    }

    /**
     * Sets Product Handle.
     *
     * @maps product_handle
     */
    public function setProductHandle(?string $productHandle): void
    {
        $this->productHandle = $productHandle;
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
        if (isset($this->transactionType)) {
            $json['transaction_type']         = $this->transactionType;
        }
        if (isset($this->kind)) {
            $json['kind']                     = $this->kind;
        }
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']          = $this->amountInCents;
        }
        if (isset($this->memo)) {
            $json['memo']                     = $this->memo;
        }
        if (isset($this->discountAmountInCents)) {
            $json['discount_amount_in_cents'] = $this->discountAmountInCents;
        }
        if (isset($this->taxableAmountInCents)) {
            $json['taxable_amount_in_cents']  = $this->taxableAmountInCents;
        }
        if (isset($this->productId)) {
            $json['product_id']               = $this->productId;
        }
        if (isset($this->productName)) {
            $json['product_name']             = $this->productName;
        }
        if (isset($this->componentId)) {
            $json['component_id']             = $this->componentId;
        }
        if (isset($this->componentHandle)) {
            $json['component_handle']         = $this->componentHandle;
        }
        if (isset($this->componentName)) {
            $json['component_name']           = $this->componentName;
        }
        if (isset($this->productHandle)) {
            $json['product_handle']           = $this->productHandle;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
