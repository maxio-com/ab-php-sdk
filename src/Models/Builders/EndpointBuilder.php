<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Endpoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model Endpoint
 *
 * @see Endpoint
 */
class EndpointBuilder
{
    /**
     * @var Endpoint
     */
    private $instance;

    private function __construct(Endpoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new endpoint Builder object.
     */
    public static function init(): self
    {
        return new self(new Endpoint());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets url field.
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets site id field.
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets webhook subscriptions field.
     */
    public function webhookSubscriptions(?array $value): self
    {
        $this->instance->setWebhookSubscriptions($value);
        return $this;
    }

    /**
     * Initializes a new endpoint object.
     */
    public function build(): Endpoint
    {
        return CoreHelper::clone($this->instance);
    }
}
