<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CouponSubcodesResponse implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $createdCodes;

    /**
     * @var string[]|null
     */
    private $duplicateCodes;

    /**
     * @var string[]|null
     */
    private $invalidCodes;

    /**
     * Returns Created Codes.
     *
     * @return string[]|null
     */
    public function getCreatedCodes(): ?array
    {
        return $this->createdCodes;
    }

    /**
     * Sets Created Codes.
     *
     * @maps created_codes
     *
     * @param string[]|null $createdCodes
     */
    public function setCreatedCodes(?array $createdCodes): void
    {
        $this->createdCodes = $createdCodes;
    }

    /**
     * Returns Duplicate Codes.
     *
     * @return string[]|null
     */
    public function getDuplicateCodes(): ?array
    {
        return $this->duplicateCodes;
    }

    /**
     * Sets Duplicate Codes.
     *
     * @maps duplicate_codes
     *
     * @param string[]|null $duplicateCodes
     */
    public function setDuplicateCodes(?array $duplicateCodes): void
    {
        $this->duplicateCodes = $duplicateCodes;
    }

    /**
     * Returns Invalid Codes.
     *
     * @return string[]|null
     */
    public function getInvalidCodes(): ?array
    {
        return $this->invalidCodes;
    }

    /**
     * Sets Invalid Codes.
     *
     * @maps invalid_codes
     *
     * @param string[]|null $invalidCodes
     */
    public function setInvalidCodes(?array $invalidCodes): void
    {
        $this->invalidCodes = $invalidCodes;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->createdCodes)) {
            $json['created_codes']   = $this->createdCodes;
        }
        if (isset($this->duplicateCodes)) {
            $json['duplicate_codes'] = $this->duplicateCodes;
        }
        if (isset($this->invalidCodes)) {
            $json['invalid_codes']   = $this->invalidCodes;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
