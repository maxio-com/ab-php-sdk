<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CustomFieldValueChange implements \JsonSerializable
{
    /**
     * @var string
     */
    private $eventType;

    /**
     * @var string
     */
    private $metafieldName;

    /**
     * @var int
     */
    private $metafieldId;

    /**
     * @var string|null
     */
    private $oldValue;

    /**
     * @var string|null
     */
    private $newValue;

    /**
     * @var string
     */
    private $resourceType;

    /**
     * @var int
     */
    private $resourceId;

    /**
     * @param string $eventType
     * @param string $metafieldName
     * @param int $metafieldId
     * @param string $resourceType
     * @param int $resourceId
     */
    public function __construct(
        string $eventType,
        string $metafieldName,
        int $metafieldId,
        string $resourceType,
        int $resourceId
    ) {
        $this->eventType = $eventType;
        $this->metafieldName = $metafieldName;
        $this->metafieldId = $metafieldId;
        $this->resourceType = $resourceType;
        $this->resourceId = $resourceId;
    }

    /**
     * Returns Event Type.
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * Sets Event Type.
     *
     * @required
     * @maps event_type
     */
    public function setEventType(string $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * Returns Metafield Name.
     */
    public function getMetafieldName(): string
    {
        return $this->metafieldName;
    }

    /**
     * Sets Metafield Name.
     *
     * @required
     * @maps metafield_name
     */
    public function setMetafieldName(string $metafieldName): void
    {
        $this->metafieldName = $metafieldName;
    }

    /**
     * Returns Metafield Id.
     */
    public function getMetafieldId(): int
    {
        return $this->metafieldId;
    }

    /**
     * Sets Metafield Id.
     *
     * @required
     * @maps metafield_id
     */
    public function setMetafieldId(int $metafieldId): void
    {
        $this->metafieldId = $metafieldId;
    }

    /**
     * Returns Old Value.
     */
    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }

    /**
     * Sets Old Value.
     *
     * @maps old_value
     */
    public function setOldValue(?string $oldValue): void
    {
        $this->oldValue = $oldValue;
    }

    /**
     * Returns New Value.
     */
    public function getNewValue(): ?string
    {
        return $this->newValue;
    }

    /**
     * Sets New Value.
     *
     * @maps new_value
     */
    public function setNewValue(?string $newValue): void
    {
        $this->newValue = $newValue;
    }

    /**
     * Returns Resource Type.
     */
    public function getResourceType(): string
    {
        return $this->resourceType;
    }

    /**
     * Sets Resource Type.
     *
     * @required
     * @maps resource_type
     */
    public function setResourceType(string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }

    /**
     * Returns Resource Id.
     */
    public function getResourceId(): int
    {
        return $this->resourceId;
    }

    /**
     * Sets Resource Id.
     *
     * @required
     * @maps resource_id
     */
    public function setResourceId(int $resourceId): void
    {
        $this->resourceId = $resourceId;
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
        $json['event_type']     = $this->eventType;
        $json['metafield_name'] = $this->metafieldName;
        $json['metafield_id']   = $this->metafieldId;
        $json['old_value']      = $this->oldValue;
        $json['new_value']      = $this->newValue;
        $json['resource_type']  = $this->resourceType;
        $json['resource_id']    = $this->resourceId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
