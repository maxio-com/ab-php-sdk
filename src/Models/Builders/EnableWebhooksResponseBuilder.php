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
     * Initializes a new enable webhooks response Builder object.
     */
    public static function init(): self
    {
        return new self(new EnableWebhooksResponse());
    }

    /**
     * Sets webhooks enabled field.
     */
    public function webhooksEnabled(?bool $value): self
    {
        $this->instance->setWebhooksEnabled($value);
        return $this;
    }

    /**
     * Initializes a new enable webhooks response object.
     */
    public function build(): EnableWebhooksResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
