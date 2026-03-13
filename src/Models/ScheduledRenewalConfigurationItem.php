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

class ScheduledRenewalConfigurationItem implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var int|null
     */
    private $subscriptionRenewalConfigurationId;

    /**
     * @var int|null
     */
    private $itemId;

    /**
     * @var string|null
     */
    private $itemType;

    /**
     * @var string|null
     */
    private $itemSubclass;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var string|null
     */
    private $pricePointType;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var string|null
     */
    private $decimalQuantity;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

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
     * Returns Subscription Renewal Configuration Id.
     */
    public function getSubscriptionRenewalConfigurationId(): ?int
    {
        return $this->subscriptionRenewalConfigurationId;
    }

    /**
     * Sets Subscription Renewal Configuration Id.
     *
     * @maps subscription_renewal_configuration_id
     */
    public function setSubscriptionRenewalConfigurationId(?int $subscriptionRenewalConfigurationId): void
    {
        $this->subscriptionRenewalConfigurationId = $subscriptionRenewalConfigurationId;
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
     */
    public function setItemType(?string $itemType): void
    {
        $this->itemType = $itemType;
    }

    /**
     * Returns Item Subclass.
     */
    public function getItemSubclass(): ?string
    {
        return $this->itemSubclass;
    }

    /**
     * Sets Item Subclass.
     *
     * @maps item_subclass
     */
    public function setItemSubclass(?string $itemSubclass): void
    {
        $this->itemSubclass = $itemSubclass;
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
     * Returns Price Point Type.
     */
    public function getPricePointType(): ?string
    {
        return $this->pricePointType;
    }

    /**
     * Sets Price Point Type.
     *
     * @maps price_point_type
     */
    public function setPricePointType(?string $pricePointType): void
    {
        $this->pricePointType = $pricePointType;
    }

    /**
     * Returns Quantity.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Decimal Quantity.
     */
    public function getDecimalQuantity(): ?string
    {
        return $this->decimalQuantity;
    }

    /**
     * Sets Decimal Quantity.
     *
     * @maps decimal_quantity
     */
    public function setDecimalQuantity(?string $decimalQuantity): void
    {
        $this->decimalQuantity = $decimalQuantity;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Converts the ScheduledRenewalConfigurationItem object to a human-readable string representation.
     *
     * @return string The string representation of the ScheduledRenewalConfigurationItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ScheduledRenewalConfigurationItem',
            [
                'id' => $this->id,
                'subscriptionId' => $this->subscriptionId,
                'subscriptionRenewalConfigurationId' => $this->subscriptionRenewalConfigurationId,
                'itemId' => $this->itemId,
                'itemType' => $this->itemType,
                'itemSubclass' => $this->itemSubclass,
                'pricePointId' => $this->pricePointId,
                'pricePointType' => $this->pricePointType,
                'quantity' => $this->quantity,
                'decimalQuantity' => $this->decimalQuantity,
                'createdAt' => $this->createdAt,
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
            $json['id']                                    = $this->id;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']                       = $this->subscriptionId;
        }
        if (isset($this->subscriptionRenewalConfigurationId)) {
            $json['subscription_renewal_configuration_id'] = $this->subscriptionRenewalConfigurationId;
        }
        if (isset($this->itemId)) {
            $json['item_id']                               = $this->itemId;
        }
        if (isset($this->itemType)) {
            $json['item_type']                             = $this->itemType;
        }
        if (isset($this->itemSubclass)) {
            $json['item_subclass']                         = $this->itemSubclass;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']                        = $this->pricePointId;
        }
        if (isset($this->pricePointType)) {
            $json['price_point_type']                      = $this->pricePointType;
        }
        if (isset($this->quantity)) {
            $json['quantity']                              = $this->quantity;
        }
        if (isset($this->decimalQuantity)) {
            $json['decimal_quantity']                      = $this->decimalQuantity;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                            = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
