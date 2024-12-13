<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ItemPricePointChanged;
use AdvancedBillingLib\Models\ItemPricePointData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ItemPricePointChanged
 *
 * @see ItemPricePointChanged
 */
class ItemPricePointChangedBuilder
{
    /**
     * @var ItemPricePointChanged
     */
    private $instance;

    private function __construct(ItemPricePointChanged $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Item Price Point Changed Builder object.
     *
     * @param int $itemId
     * @param string $itemType
     * @param string $itemHandle
     * @param string $itemName
     * @param ItemPricePointData $previousPricePoint
     * @param ItemPricePointData $currentPricePoint
     */
    public static function init(
        int $itemId,
        string $itemType,
        string $itemHandle,
        string $itemName,
        ItemPricePointData $previousPricePoint,
        ItemPricePointData $currentPricePoint
    ): self {
        return new self(new ItemPricePointChanged(
            $itemId,
            $itemType,
            $itemHandle,
            $itemName,
            $previousPricePoint,
            $currentPricePoint
        ));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Item Price Point Changed object.
     */
    public function build(): ItemPricePointChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
