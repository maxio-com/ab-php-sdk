<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChargifyEBB;
use AdvancedBillingLib\Models\EBBEvent;
use Core\Utils\CoreHelper;

/**
 * Builder for model EBBEvent
 *
 * @see EBBEvent
 */
class EBBEventBuilder
{
    /**
     * @var EBBEvent
     */
    private $instance;

    private function __construct(EBBEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new ebbevent Builder object.
     */
    public static function init(): self
    {
        return new self(new EBBEvent());
    }

    /**
     * Sets chargify field.
     */
    public function chargify(?ChargifyEBB $value): self
    {
        $this->instance->setChargify($value);
        return $this;
    }

    /**
     * Initializes a new ebbevent object.
     */
    public function build(): EBBEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
