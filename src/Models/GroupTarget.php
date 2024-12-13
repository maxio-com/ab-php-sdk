<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Attributes of the target customer who will be the responsible payer of the created subscription.
 * Required.
 */
class GroupTarget implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Returns Type.
     * The type of object indicated by the id attribute.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The type of object indicated by the id attribute.
     *
     * @required
     * @maps type
     * @factory \AdvancedBillingLib\Models\GroupTargetType::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Id.
     * The id of the target customer or subscription to group the existing subscription with. Ignored and
     * should not be included if type is "self" , "parent", or "eldest"
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The id of the target customer or subscription to group the existing subscription with. Ignored and
     * should not be included if type is "self" , "parent", or "eldest"
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
        $json['type']   = GroupTargetType::checkValue($this->type);
        if (isset($this->id)) {
            $json['id'] = $this->id;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
