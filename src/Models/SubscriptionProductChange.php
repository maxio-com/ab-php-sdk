<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionProductChange implements \JsonSerializable
{
    /**
     * @var int
     */
    private $previousProductId;

    /**
     * @var int
     */
    private $newProductId;

    /**
     * @param int $previousProductId
     * @param int $newProductId
     */
    public function __construct(int $previousProductId, int $newProductId)
    {
        $this->previousProductId = $previousProductId;
        $this->newProductId = $newProductId;
    }

    /**
     * Returns Previous Product Id.
     */
    public function getPreviousProductId(): int
    {
        return $this->previousProductId;
    }

    /**
     * Sets Previous Product Id.
     *
     * @required
     * @maps previous_product_id
     */
    public function setPreviousProductId(int $previousProductId): void
    {
        $this->previousProductId = $previousProductId;
    }

    /**
     * Returns New Product Id.
     */
    public function getNewProductId(): int
    {
        return $this->newProductId;
    }

    /**
     * Sets New Product Id.
     *
     * @required
     * @maps new_product_id
     */
    public function setNewProductId(int $newProductId): void
    {
        $this->newProductId = $newProductId;
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
        $json['previous_product_id'] = $this->previousProductId;
        $json['new_product_id']      = $this->newProductId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
