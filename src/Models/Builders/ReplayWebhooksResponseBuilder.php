<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReplayWebhooksResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReplayWebhooksResponse
 *
 * @see ReplayWebhooksResponse
 */
class ReplayWebhooksResponseBuilder
{
    /**
     * @var ReplayWebhooksResponse
     */
    private $instance;

    private function __construct(ReplayWebhooksResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Replay Webhooks Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReplayWebhooksResponse());
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
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
     * Initializes a new Replay Webhooks Response object.
     */
    public function build(): ReplayWebhooksResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
