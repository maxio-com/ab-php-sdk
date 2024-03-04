<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CancellationOptions;
use Core\Utils\CoreHelper;

/**
 * Builder for model CancellationOptions
 *
 * @see CancellationOptions
 */
class CancellationOptionsBuilder
{
    /**
     * @var CancellationOptions
     */
    private $instance;

    private function __construct(CancellationOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cancellation options Builder object.
     */
    public static function init(): self
    {
        return new self(new CancellationOptions());
    }

    /**
     * Sets cancellation message field.
     */
    public function cancellationMessage(?string $value): self
    {
        $this->instance->setCancellationMessage($value);
        return $this;
    }

    /**
     * Sets reason code field.
     */
    public function reasonCode(?string $value): self
    {
        $this->instance->setReasonCode($value);
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
     * Initializes a new cancellation options object.
     */
    public function build(): CancellationOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
