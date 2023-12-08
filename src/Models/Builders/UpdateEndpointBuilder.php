<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateEndpoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateEndpoint
 *
 * @see UpdateEndpoint
 */
class UpdateEndpointBuilder
{
    /**
     * @var UpdateEndpoint
     */
    private $instance;

    private function __construct(UpdateEndpoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update endpoint Builder object.
     */
    public static function init(string $url, array $webhookSubscriptions): self
    {
        return new self(new UpdateEndpoint($url, $webhookSubscriptions));
    }

    /**
     * Initializes a new update endpoint object.
     */
    public function build(): UpdateEndpoint
    {
        return CoreHelper::clone($this->instance);
    }
}
