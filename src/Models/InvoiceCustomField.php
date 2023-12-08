<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceCustomField implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var int|null
     */
    private $ownerId;

    /**
     * @var string|null
     */
    private $ownerType;

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Owner Id.
     */
    public function getOwnerId(): ?int
    {
        return $this->ownerId;
    }

    /**
     * Sets Owner Id.
     *
     * @maps owner_id
     */
    public function setOwnerId(?int $ownerId): void
    {
        $this->ownerId = $ownerId;
    }

    /**
     * Returns Owner Type.
     */
    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }

    /**
     * Sets Owner Type.
     *
     * @maps owner_type
     */
    public function setOwnerType(?string $ownerType): void
    {
        $this->ownerType = $ownerType;
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
        if (isset($this->name)) {
            $json['name']       = $this->name;
        }
        if (isset($this->value)) {
            $json['value']      = $this->value;
        }
        if (isset($this->ownerId)) {
            $json['owner_id']   = $this->ownerId;
        }
        if (isset($this->ownerType)) {
            $json['owner_type'] = $this->ownerType;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
