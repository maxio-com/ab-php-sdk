<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkUpdateSegmentsItem;
use AdvancedBillingLib\Models\CreateOrUpdateSegmentPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model BulkUpdateSegmentsItem
 *
 * @see BulkUpdateSegmentsItem
 */
class BulkUpdateSegmentsItemBuilder
{
    /**
     * @var BulkUpdateSegmentsItem
     */
    private $instance;

    private function __construct(BulkUpdateSegmentsItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bulk Update Segments Item Builder object.
     *
     * @param int $id
     * @param string $pricingScheme
     * @param CreateOrUpdateSegmentPrice[] $prices
     */
    public static function init(int $id, string $pricingScheme, array $prices): self
    {
        return new self(new BulkUpdateSegmentsItem($id, $pricingScheme, $prices));
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
     * Initializes a new Bulk Update Segments Item object.
     */
    public function build(): BulkUpdateSegmentsItem
    {
        return CoreHelper::clone($this->instance);
    }
}
