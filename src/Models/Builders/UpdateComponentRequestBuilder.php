<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateComponent;
use AdvancedBillingLib\Models\UpdateComponentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateComponentRequest
 *
 * @see UpdateComponentRequest
 */
class UpdateComponentRequestBuilder
{
    /**
     * @var UpdateComponentRequest
     */
    private $instance;

    private function __construct(UpdateComponentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update component request Builder object.
     */
    public static function init(UpdateComponent $component): self
    {
        return new self(new UpdateComponentRequest($component));
    }

    /**
     * Initializes a new update component request object.
     */
    public function build(): UpdateComponentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
