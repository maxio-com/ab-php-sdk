<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\EnableWebhooksRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model EnableWebhooksRequest
 *
 * @see EnableWebhooksRequest
 */
class EnableWebhooksRequestBuilder
{
    /**
     * @var EnableWebhooksRequest
     */
    private $instance;

    private function __construct(EnableWebhooksRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new enable webhooks request Builder object.
     */
    public static function init(bool $webhooksEnabled): self
    {
        return new self(new EnableWebhooksRequest($webhooksEnabled));
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
     * Initializes a new enable webhooks request object.
     */
    public function build(): EnableWebhooksRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
