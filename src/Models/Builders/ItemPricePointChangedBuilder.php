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
     * Initializes a new item price point changed Builder object.
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
     * Initializes a new item price point changed object.
     */
    public function build(): ItemPricePointChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
