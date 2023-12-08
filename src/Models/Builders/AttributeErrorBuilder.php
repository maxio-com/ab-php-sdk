<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AttributeError;
use Core\Utils\CoreHelper;

/**
 * Builder for model AttributeError
 *
 * @see AttributeError
 */
class AttributeErrorBuilder
{
    /**
     * @var AttributeError
     */
    private $instance;

    private function __construct(AttributeError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new attribute error Builder object.
     */
    public static function init(array $attribute): self
    {
        return new self(new AttributeError($attribute));
    }

    /**
     * Initializes a new attribute error object.
     */
    public function build(): AttributeError
    {
        return CoreHelper::clone($this->instance);
    }
}
