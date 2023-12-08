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

class CreateInvoiceCoupon implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|float|null
     */
    private $percentage;

    /**
     * @var string|float|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|int|null
     */
    private $productFamilyId;

    /**
     * @var string|null
     */
    private $compoundingStrategy;

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
     * Returns Percentage.
     *
     * @return string|float|null
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets Percentage.
     *
     * @maps percentage
     * @mapsBy anyOf(oneOf(string,float),null)
     *
     * @param string|float|null $percentage
     */
    public function setPercentage($percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * Returns Amount.
     *
     * @return string|float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     * @mapsBy anyOf(oneOf(string,float),null)
     *
     * @param string|float|null $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
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
     * Returns Product Family Id.
     *
     * @return string|int|null
     */
    public function getProductFamilyId()
    {
        return $this->productFamilyId;
    }

    /**
     * Sets Product Family Id.
     *
     * @maps product_family_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $productFamilyId
     */
    public function setProductFamilyId($productFamilyId): void
    {
        $this->productFamilyId = $productFamilyId;
    }

    /**
     * Returns Compounding Strategy.
     */
    public function getCompoundingStrategy(): ?string
    {
        return $this->compoundingStrategy;
    }

    /**
     * Sets Compounding Strategy.
     *
     * @maps compounding_strategy
     * @factory \AdvancedBillingLib\Models\CompoundingStrategy::checkValue
     */
    public function setCompoundingStrategy(?string $compoundingStrategy): void
    {
        $this->compoundingStrategy = $compoundingStrategy;
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
        if (isset($this->code)) {
            $json['code']                 = $this->code;
        }
        if (isset($this->percentage)) {
            $json['percentage']           =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->percentage,
                    'anyOf(oneOf(string,float),null)'
                );
        }
        if (isset($this->amount)) {
            $json['amount']               =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->amount,
                    'anyOf(oneOf(string,float),null)'
                );
        }
        if (isset($this->description)) {
            $json['description']          = $this->description;
        }
        if (isset($this->productFamilyId)) {
            $json['product_family_id']    =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->productFamilyId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->compoundingStrategy)) {
            $json['compounding_strategy'] = CompoundingStrategy::checkValue($this->compoundingStrategy);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
