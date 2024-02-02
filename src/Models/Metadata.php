<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Metadata implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $value = [];

    /**
     * @var array
     */
    private $resourceId = [];

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $deletedAt = [];

    /**
     * @var array
     */
    private $metafieldId = [];

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Value.
     */
    public function getValue(): ?string
    {
        if (count($this->value) == 0) {
            return null;
        }
        return $this->value['value'];
    }

    /**
     * Sets Value.
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value['value'] = $value;
    }

    /**
     * Unsets Value.
     */
    public function unsetValue(): void
    {
        $this->value = [];
    }

    /**
     * Returns Resource Id.
     */
    public function getResourceId(): ?int
    {
        if (count($this->resourceId) == 0) {
            return null;
        }
        return $this->resourceId['value'];
    }

    /**
     * Sets Resource Id.
     *
     * @maps resource_id
     */
    public function setResourceId(?int $resourceId): void
    {
        $this->resourceId['value'] = $resourceId;
    }

    /**
     * Unsets Resource Id.
     */
    public function unsetResourceId(): void
    {
        $this->resourceId = [];
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
     * Returns Deleted At.
     */
    public function getDeletedAt(): ?string
    {
        if (count($this->deletedAt) == 0) {
            return null;
        }
        return $this->deletedAt['value'];
    }

    /**
     * Sets Deleted At.
     *
     * @maps deleted_at
     */
    public function setDeletedAt(?string $deletedAt): void
    {
        $this->deletedAt['value'] = $deletedAt;
    }

    /**
     * Unsets Deleted At.
     */
    public function unsetDeletedAt(): void
    {
        $this->deletedAt = [];
    }

    /**
     * Returns Metafield Id.
     */
    public function getMetafieldId(): ?int
    {
        if (count($this->metafieldId) == 0) {
            return null;
        }
        return $this->metafieldId['value'];
    }

    /**
     * Sets Metafield Id.
     *
     * @maps metafield_id
     */
    public function setMetafieldId(?int $metafieldId): void
    {
        $this->metafieldId['value'] = $metafieldId;
    }

    /**
     * Unsets Metafield Id.
     */
    public function unsetMetafieldId(): void
    {
        $this->metafieldId = [];
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
        if (!empty($this->id)) {
            $json['id']           = $this->id['value'];
        }
        if (!empty($this->value)) {
            $json['value']        = $this->value['value'];
        }
        if (!empty($this->resourceId)) {
            $json['resource_id']  = $this->resourceId['value'];
        }
        if (isset($this->name)) {
            $json['name']         = $this->name;
        }
        if (!empty($this->deletedAt)) {
            $json['deleted_at']   = $this->deletedAt['value'];
        }
        if (!empty($this->metafieldId)) {
            $json['metafield_id'] = $this->metafieldId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
