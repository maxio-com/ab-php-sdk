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

class ProformaInvoiceDiscount implements \JsonSerializable
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
    private $code;

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
     * @factory \AdvancedBillingLib\Models\ProformaInvoiceDiscountSourceType::checkValue
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
     * @factory \AdvancedBillingLib\Models\InvoiceDiscountType::checkValue
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
     * Converts the ProformaInvoiceDiscount object to a human-readable string representation.
     *
     * @return string The string representation of the ProformaInvoiceDiscount object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ProformaInvoiceDiscount',
            [
                'uid' => $this->uid,
                'title' => $this->title,
                'code' => $this->code,
                'sourceType' => $this->sourceType,
                'discountType' => $this->discountType,
                'eligibleAmount' => $this->eligibleAmount,
                'discountAmount' => $this->discountAmount,
                'lineItemBreakouts' => $this->lineItemBreakouts,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
        if (isset($this->code)) {
            $json['code']                = $this->code;
        }
        if (isset($this->sourceType)) {
            $json['source_type']         = ProformaInvoiceDiscountSourceType::checkValue($this->sourceType);
        }
        if (isset($this->discountType)) {
            $json['discount_type']       = InvoiceDiscountType::checkValue($this->discountType);
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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
