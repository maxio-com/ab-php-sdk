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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
