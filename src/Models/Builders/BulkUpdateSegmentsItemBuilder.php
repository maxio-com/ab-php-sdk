<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkUpdateSegmentsItem;
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
     * Initializes a new bulk update segments item Builder object.
     */
    public static function init(int $id, string $pricingScheme, array $prices): self
    {
        return new self(new BulkUpdateSegmentsItem($id, $pricingScheme, $prices));
    }

    /**
     * Initializes a new bulk update segments item object.
     */
    public function build(): BulkUpdateSegmentsItem
    {
        return CoreHelper::clone($this->instance);
    }
}
