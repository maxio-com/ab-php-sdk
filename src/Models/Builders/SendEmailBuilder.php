<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SendEmail;
use Core\Utils\CoreHelper;

/**
 * Builder for model SendEmail
 *
 * @see SendEmail
 */
class SendEmailBuilder
{
    /**
     * @var SendEmail
     */
    private $instance;

    private function __construct(SendEmail $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Send Email Builder object.
     *
     * @param bool $canExecute
     * @param string $url
     */
    public static function init(bool $canExecute, string $url): self
    {
        return new self(new SendEmail($canExecute, $url));
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
     * Initializes a new Send Email object.
     */
    public function build(): SendEmail
    {
        return CoreHelper::clone($this->instance);
    }
}
