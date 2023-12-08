<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReplayWebhooksRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReplayWebhooksRequest
 *
 * @see ReplayWebhooksRequest
 */
class ReplayWebhooksRequestBuilder
{
    /**
     * @var ReplayWebhooksRequest
     */
    private $instance;

    private function __construct(ReplayWebhooksRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new replay webhooks request Builder object.
     */
    public static function init(array $ids): self
    {
        return new self(new ReplayWebhooksRequest($ids));
    }

    /**
     * Initializes a new replay webhooks request object.
     */
    public function build(): ReplayWebhooksRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
