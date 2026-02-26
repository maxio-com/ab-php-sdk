<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AvailableActions;
use AdvancedBillingLib\Models\SendEmail;
use Core\Utils\CoreHelper;

/**
 * Builder for model AvailableActions
 *
 * @see AvailableActions
 */
class AvailableActionsBuilder
{
    /**
     * @var AvailableActions
     */
    private $instance;

    private function __construct(AvailableActions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Available Actions Builder object.
     */
    public static function init(): self
    {
        return new self(new AvailableActions());
    }

    /**
     * Sets send email field.
     *
     * @param SendEmail|null $value
     */
    public function sendEmail(?SendEmail $value): self
    {
        $this->instance->setSendEmail($value);
        return $this;
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
     * Initializes a new Available Actions object.
     */
    public function build(): AvailableActions
    {
        return CoreHelper::clone($this->instance);
    }
}
