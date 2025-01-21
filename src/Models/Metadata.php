<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
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
    public function getDeletedAt(): ?\DateTime
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
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDeletedAt(?\DateTime $deletedAt): void
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
     * Converts the Metadata object to a human-readable string representation.
     *
     * @return string The string representation of the Metadata object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Metadata',
            [
                'id' => $this->getId(),
                'value' => $this->getValue(),
                'resourceId' => $this->getResourceId(),
                'name' => $this->name,
                'deletedAt' => $this->getDeletedAt(),
                'metafieldId' => $this->getMetafieldId(),
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
            $json['deleted_at']   = DateTimeHelper::toRfc3339DateTime($this->deletedAt['value']);
        }
        if (!empty($this->metafieldId)) {
            $json['metafield_id'] = $this->metafieldId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
