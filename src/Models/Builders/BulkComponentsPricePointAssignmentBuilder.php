<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkComponentsPricePointAssignment;
use Core\Utils\CoreHelper;

/**
 * Builder for model BulkComponentsPricePointAssignment
 *
 * @see BulkComponentsPricePointAssignment
 */
class BulkComponentsPricePointAssignmentBuilder
{
    /**
     * @var BulkComponentsPricePointAssignment
     */
    private $instance;

    private function __construct(BulkComponentsPricePointAssignment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bulk components price point assignment Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkComponentsPricePointAssignment());
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
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new bulk components price point assignment object.
     */
    public function build(): BulkComponentsPricePointAssignment
    {
        return CoreHelper::clone($this->instance);
    }
}
