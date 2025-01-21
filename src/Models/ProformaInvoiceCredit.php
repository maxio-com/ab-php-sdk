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

class ProformaInvoiceCredit implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $originalAmount;

    /**
     * @var string|null
     */
    private $appliedAmount;

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
     * Returns Original Amount.
     */
    public function getOriginalAmount(): ?string
    {
        return $this->originalAmount;
    }

    /**
     * Sets Original Amount.
     *
     * @maps original_amount
     */
    public function setOriginalAmount(?string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * Returns Applied Amount.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Converts the ProformaInvoiceCredit object to a human-readable string representation.
     *
     * @return string The string representation of the ProformaInvoiceCredit object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ProformaInvoiceCredit',
            [
                'uid' => $this->uid,
                'memo' => $this->memo,
                'originalAmount' => $this->originalAmount,
                'appliedAmount' => $this->appliedAmount,
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
            $json['uid']             = $this->uid;
        }
        if (isset($this->memo)) {
            $json['memo']            = $this->memo;
        }
        if (isset($this->originalAmount)) {
            $json['original_amount'] = $this->originalAmount;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']  = $this->appliedAmount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
