<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ProformaInvoiceDiscountBreakout implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $eligibleAmount;

    /**
     * @var string|null
     */
    private $discountAmount;

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
        if (isset($this->eligibleAmount)) {
            $json['eligible_amount'] = $this->eligibleAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount'] = $this->discountAmount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
