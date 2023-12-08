<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateReasonCode implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var int|null
     */
    private $position;

    /**
     * Returns Code.
     * The unique identifier for the ReasonCode
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * The unique identifier for the ReasonCode
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Description.
     * The friendly summary of what the code signifies
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The friendly summary of what the code signifies
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Position.
     * The order that code appears in lists
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * Sets Position.
     * The order that code appears in lists
     *
     * @maps position
     */
    public function setPosition(?int $position): void
    {
        $this->position = $position;
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
            $json['code']        = $this->code;
        }
        if (isset($this->description)) {
            $json['description'] = $this->description;
        }
        if (isset($this->position)) {
            $json['position']    = $this->position;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
