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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
