<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\ComponentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentResponse
 *
 * @see ComponentResponse
 */
class ComponentResponseBuilder
{
    /**
     * @var ComponentResponse
     */
    private $instance;

    private function __construct(ComponentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component response Builder object.
     */
    public static function init(Component $component): self
    {
        return new self(new ComponentResponse($component));
    }

    /**
     * Initializes a new component response object.
     */
    public function build(): ComponentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
