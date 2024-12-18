<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Webhook;
use AdvancedBillingLib\Models\WebhookResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model WebhookResponse
 *
 * @see WebhookResponse
 */
class WebhookResponseBuilder
{
    /**
     * @var WebhookResponse
     */
    private $instance;

    private function __construct(WebhookResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Webhook Response Builder object.
     */
    public static function init(): self
    {
        return new self(new WebhookResponse());
    }

    /**
     * Sets webhook field.
     *
     * @param Webhook|null $value
     */
    public function webhook(?Webhook $value): self
    {
        $this->instance->setWebhook($value);
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
     * Initializes a new Webhook Response object.
     */
    public function build(): WebhookResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
