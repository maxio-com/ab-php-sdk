<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\EnableWebhooksResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model EnableWebhooksResponse
 *
 * @see EnableWebhooksResponse
 */
class EnableWebhooksResponseBuilder
{
    /**
     * @var EnableWebhooksResponse
     */
    private $instance;

    private function __construct(EnableWebhooksResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Enable Webhooks Response Builder object.
     */
    public static function init(): self
    {
        return new self(new EnableWebhooksResponse());
    }

    /**
     * Sets webhooks enabled field.
     *
     * @param bool|null $value
     */
    public function webhooksEnabled(?bool $value): self
    {
        $this->instance->setWebhooksEnabled($value);
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
     * Initializes a new Enable Webhooks Response object.
     */
    public function build(): EnableWebhooksResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
