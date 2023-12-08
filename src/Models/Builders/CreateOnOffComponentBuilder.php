<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOnOffComponent;
use AdvancedBillingLib\Models\OnOffComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOnOffComponent
 *
 * @see CreateOnOffComponent
 */
class CreateOnOffComponentBuilder
{
    /**
     * @var CreateOnOffComponent
     */
    private $instance;

    private function __construct(CreateOnOffComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create on off component Builder object.
     */
    public static function init(OnOffComponent $onOffComponent): self
    {
        return new self(new CreateOnOffComponent($onOffComponent));
    }

    /**
     * Initializes a new create on off component object.
     */
    public function build(): CreateOnOffComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
