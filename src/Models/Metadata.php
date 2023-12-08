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
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var int|null
     */
    private $resourceId;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $deletedAt = [];

    /**
     * @var int|null
     */
    private $metafieldId;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
     * Returns Resource Id.
     */
    public function getResourceId(): ?int
    {
        return $this->resourceId;
    }

    /**
     * Sets Resource Id.
     *
     * @maps resource_id
     */
    public function setResourceId(?int $resourceId): void
    {
        $this->resourceId = $resourceId;
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
        return $this->metafieldId;
    }

    /**
     * Sets Metafield Id.
     *
     * @maps metafield_id
     */
    public function setMetafieldId(?int $metafieldId): void
    {
        $this->metafieldId = $metafieldId;
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
        if (isset($this->id)) {
            $json['id']           = $this->id;
        }
        if (isset($this->value)) {
            $json['value']        = $this->value;
        }
        if (isset($this->resourceId)) {
            $json['resource_id']  = $this->resourceId;
        }
        if (isset($this->name)) {
            $json['name']         = $this->name;
        }
        if (!empty($this->deletedAt)) {
            $json['deleted_at']   = $this->deletedAt['value'];
        }
        if (isset($this->metafieldId)) {
            $json['metafield_id'] = $this->metafieldId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
