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
     * Initializes a new Endpoint Builder object.
     */
    public static function init(): self
    {
        return new self(new Endpoint());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets site id field.
     *
     * @param int|null $value
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
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
     * Sets webhook subscriptions field.
     *
     * @param string[]|null $value
     */
    public function webhookSubscriptions(?array $value): self
    {
        $this->instance->setWebhookSubscriptions($value);
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
     * Initializes a new Endpoint object.
     */
    public function build(): Endpoint
    {
        return CoreHelper::clone($this->instance);
    }
}
