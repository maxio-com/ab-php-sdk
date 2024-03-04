<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateEndpoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOrUpdateEndpoint
 *
 * @see CreateOrUpdateEndpoint
 */
class CreateOrUpdateEndpointBuilder
{
    /**
     * @var CreateOrUpdateEndpoint
     */
    private $instance;

    private function __construct(CreateOrUpdateEndpoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create or update endpoint Builder object.
     */
    public static function init(string $url, array $webhookSubscriptions): self
    {
        return new self(new CreateOrUpdateEndpoint($url, $webhookSubscriptions));
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
     * Initializes a new create or update endpoint object.
     */
    public function build(): CreateOrUpdateEndpoint
    {
        return CoreHelper::clone($this->instance);
    }
}
