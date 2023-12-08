<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkComponentSPricePointAssignment;
use Core\Utils\CoreHelper;

/**
 * Builder for model BulkComponentSPricePointAssignment
 *
 * @see BulkComponentSPricePointAssignment
 */
class BulkComponentSPricePointAssignmentBuilder
{
    /**
     * @var BulkComponentSPricePointAssignment
     */
    private $instance;

    private function __construct(BulkComponentSPricePointAssignment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bulk component sprice point assignment Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkComponentSPricePointAssignment());
    }

    /**
     * Sets components field.
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
        return $this;
    }

    /**
     * Initializes a new bulk component sprice point assignment object.
     */
    public function build(): BulkComponentSPricePointAssignment
    {
        return CoreHelper::clone($this->instance);
    }
}
