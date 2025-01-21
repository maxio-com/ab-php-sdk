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

class CouponRestriction implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $itemType;

    /**
     * @var int|null
     */
    private $itemId;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $handle = [];

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
     * Returns Item Type.
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }

    /**
     * Sets Item Type.
     *
     * @maps item_type
     * @factory \AdvancedBillingLib\Models\RestrictionType::checkValue
     */
    public function setItemType(?string $itemType): void
    {
        $this->itemType = $itemType;
    }

    /**
     * Returns Item Id.
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * Sets Item Id.
     *
     * @maps item_id
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
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
     * Returns Handle.
     */
    public function getHandle(): ?string
    {
        if (count($this->handle) == 0) {
            return null;
        }
        return $this->handle['value'];
    }

    /**
     * Sets Handle.
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle['value'] = $handle;
    }

    /**
     * Unsets Handle.
     */
    public function unsetHandle(): void
    {
        $this->handle = [];
    }

    /**
     * Converts the CouponRestriction object to a human-readable string representation.
     *
     * @return string The string representation of the CouponRestriction object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CouponRestriction',
            [
                'id' => $this->id,
                'itemType' => $this->itemType,
                'itemId' => $this->itemId,
                'name' => $this->name,
                'handle' => $this->getHandle(),
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
        if (isset($this->id)) {
            $json['id']        = $this->id;
        }
        if (isset($this->itemType)) {
            $json['item_type'] = RestrictionType::checkValue($this->itemType);
        }
        if (isset($this->itemId)) {
            $json['item_id']   = $this->itemId;
        }
        if (isset($this->name)) {
            $json['name']      = $this->name;
        }
        if (!empty($this->handle)) {
            $json['handle']    = $this->handle['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
