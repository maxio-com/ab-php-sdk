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
     * @var int|null
     */
    private $ownerId;

    /**
     * @var string|null
     */
    private $ownerType;

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
    private $metadatumId;

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
     * @factory \AdvancedBillingLib\Models\CustomFieldOwner::checkValue
     */
    public function setOwnerType(?string $ownerType): void
    {
        $this->ownerType = $ownerType;
    }

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
     * Returns Metadatum Id.
     */
    public function getMetadatumId(): ?int
    {
        return $this->metadatumId;
    }

    /**
     * Sets Metadatum Id.
     *
     * @maps metadatum_id
     */
    public function setMetadatumId(?int $metadatumId): void
    {
        $this->metadatumId = $metadatumId;
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
        if (isset($this->ownerId)) {
            $json['owner_id']     = $this->ownerId;
        }
        if (isset($this->ownerType)) {
            $json['owner_type']   = CustomFieldOwner::checkValue($this->ownerType);
        }
        if (isset($this->name)) {
            $json['name']         = $this->name;
        }
        if (isset($this->value)) {
            $json['value']        = $this->value;
        }
        if (isset($this->metadatumId)) {
            $json['metadatum_id'] = $this->metadatumId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
