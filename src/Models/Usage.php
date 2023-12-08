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

class Usage implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var int|string|null
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $overageQuantity;

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var string|null
     */
    private $componentHandle;

    /**
     * @var int|null
     */
    private $subscriptionId;

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
     * Returns Memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Quantity.
     *
     * @return int|string|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @maps quantity
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Overage Quantity.
     */
    public function getOverageQuantity(): ?int
    {
        return $this->overageQuantity;
    }

    /**
     * Sets Overage Quantity.
     *
     * @maps overage_quantity
     */
    public function setOverageQuantity(?int $overageQuantity): void
    {
        $this->overageQuantity = $overageQuantity;
    }

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
     * Returns Component Handle.
     */
    public function getComponentHandle(): ?string
    {
        return $this->componentHandle;
    }

    /**
     * Sets Component Handle.
     *
     * @maps component_handle
     */
    public function setComponentHandle(?string $componentHandle): void
    {
        $this->componentHandle = $componentHandle;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
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
            $json['id']               = $this->id;
        }
        if (isset($this->memo)) {
            $json['memo']             = $this->memo;
        }
        if (isset($this->createdAt)) {
            $json['created_at']       = $this->createdAt;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']   = $this->pricePointId;
        }
        if (isset($this->quantity)) {
            $json['quantity']         =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->quantity,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (isset($this->overageQuantity)) {
            $json['overage_quantity'] = $this->overageQuantity;
        }
        if (isset($this->componentId)) {
            $json['component_id']     = $this->componentId;
        }
        if (isset($this->componentHandle)) {
            $json['component_handle'] = $this->componentHandle;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']  = $this->subscriptionId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
