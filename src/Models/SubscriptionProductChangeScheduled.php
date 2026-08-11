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

class SubscriptionProductChangeScheduled implements \JsonSerializable
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
     * @var array
     */
    private $previousProductPricePointId = [];

    /**
     * @var array
     */
    private $newProductPricePointId = [];

    /**
     * @var array
     */
    private $effectiveAt = [];

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

    /**
     * Returns Previous Product Price Point Id.
     */
    public function getPreviousProductPricePointId(): ?int
    {
        if (count($this->previousProductPricePointId) == 0) {
            return null;
        }
        return $this->previousProductPricePointId['value'];
    }

    /**
     * Sets Previous Product Price Point Id.
     *
     * @maps previous_product_price_point_id
     */
    public function setPreviousProductPricePointId(?int $previousProductPricePointId): void
    {
        $this->previousProductPricePointId['value'] = $previousProductPricePointId;
    }

    /**
     * Unsets Previous Product Price Point Id.
     */
    public function unsetPreviousProductPricePointId(): void
    {
        $this->previousProductPricePointId = [];
    }

    /**
     * Returns New Product Price Point Id.
     */
    public function getNewProductPricePointId(): ?int
    {
        if (count($this->newProductPricePointId) == 0) {
            return null;
        }
        return $this->newProductPricePointId['value'];
    }

    /**
     * Sets New Product Price Point Id.
     *
     * @maps new_product_price_point_id
     */
    public function setNewProductPricePointId(?int $newProductPricePointId): void
    {
        $this->newProductPricePointId['value'] = $newProductPricePointId;
    }

    /**
     * Unsets New Product Price Point Id.
     */
    public function unsetNewProductPricePointId(): void
    {
        $this->newProductPricePointId = [];
    }

    /**
     * Returns Effective At.
     * When the scheduled product change takes effect (the subscription's next renewal).
     */
    public function getEffectiveAt(): ?\DateTime
    {
        if (count($this->effectiveAt) == 0) {
            return null;
        }
        return $this->effectiveAt['value'];
    }

    /**
     * Sets Effective At.
     * When the scheduled product change takes effect (the subscription's next renewal).
     *
     * @maps effective_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEffectiveAt(?\DateTime $effectiveAt): void
    {
        $this->effectiveAt['value'] = $effectiveAt;
    }

    /**
     * Unsets Effective At.
     * When the scheduled product change takes effect (the subscription's next renewal).
     */
    public function unsetEffectiveAt(): void
    {
        $this->effectiveAt = [];
    }

    /**
     * Converts the SubscriptionProductChangeScheduled object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionProductChangeScheduled object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionProductChangeScheduled',
            [
                'previousProductId' => $this->previousProductId,
                'newProductId' => $this->newProductId,
                'previousProductPricePointId' => $this->getPreviousProductPricePointId(),
                'newProductPricePointId' => $this->getNewProductPricePointId(),
                'effectiveAt' => $this->getEffectiveAt(),
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
        $json['previous_product_id']                 = $this->previousProductId;
        $json['new_product_id']                      = $this->newProductId;
        if (!empty($this->previousProductPricePointId)) {
            $json['previous_product_price_point_id'] = $this->previousProductPricePointId['value'];
        }
        if (!empty($this->newProductPricePointId)) {
            $json['new_product_price_point_id']      = $this->newProductPricePointId['value'];
        }
        if (!empty($this->effectiveAt)) {
            $json['effective_at']                    = DateTimeHelper::toRfc3339DateTime($this->effectiveAt['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
