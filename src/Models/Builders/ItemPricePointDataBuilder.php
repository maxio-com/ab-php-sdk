<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ItemPricePointData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ItemPricePointData
 *
 * @see ItemPricePointData
 */
class ItemPricePointDataBuilder
{
    /**
     * @var ItemPricePointData
     */
    private $instance;

    private function __construct(ItemPricePointData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new item price point data Builder object.
     */
    public static function init(): self
    {
        return new self(new ItemPricePointData());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets handle field.
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Initializes a new item price point data object.
     */
    public function build(): ItemPricePointData
    {
        return CoreHelper::clone($this->instance);
    }
}
