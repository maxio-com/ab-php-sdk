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

class ComponentPricePointErrorItem implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var int|null
     */
    private $pricePoint;

    /**
     * Returns Component Id.
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Price Point.
     */
    public function getPricePoint(): ?int
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     *
     * @maps price_point
     */
    public function setPricePoint(?int $pricePoint): void
    {
        $this->pricePoint = $pricePoint;
    }

    /**
     * Converts the ComponentPricePointErrorItem object to a human-readable string representation.
     *
     * @return string The string representation of the ComponentPricePointErrorItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ComponentPricePointErrorItem',
            [
                'componentId' => $this->componentId,
                'message' => $this->message,
                'pricePoint' => $this->pricePoint,
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
        if (isset($this->componentId)) {
            $json['component_id'] = $this->componentId;
        }
        if (isset($this->message)) {
            $json['message']      = $this->message;
        }
        if (isset($this->pricePoint)) {
            $json['price_point']  = $this->pricePoint;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
