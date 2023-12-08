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
     * Initializes a new webhook response Builder object.
     */
    public static function init(): self
    {
        return new self(new WebhookResponse());
    }

    /**
     * Sets webhook field.
     */
    public function webhook(?Webhook $value): self
    {
        $this->instance->setWebhook($value);
        return $this;
    }

    /**
     * Initializes a new webhook response object.
     */
    public function build(): WebhookResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
