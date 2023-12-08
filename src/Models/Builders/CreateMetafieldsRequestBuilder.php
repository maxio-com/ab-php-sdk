<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateMetafieldsRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateMetafieldsRequest
 *
 * @see CreateMetafieldsRequest
 */
class CreateMetafieldsRequestBuilder
{
    /**
     * @var CreateMetafieldsRequest
     */
    private $instance;

    private function __construct(CreateMetafieldsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create metafields request Builder object.
     */
    public static function init($metafields): self
    {
        return new self(new CreateMetafieldsRequest($metafields));
    }

    /**
     * Initializes a new create metafields request object.
     */
    public function build(): CreateMetafieldsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
