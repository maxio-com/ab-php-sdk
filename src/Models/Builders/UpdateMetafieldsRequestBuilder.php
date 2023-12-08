<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateMetafieldsRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateMetafieldsRequest
 *
 * @see UpdateMetafieldsRequest
 */
class UpdateMetafieldsRequestBuilder
{
    /**
     * @var UpdateMetafieldsRequest
     */
    private $instance;

    private function __construct(UpdateMetafieldsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update metafields request Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateMetafieldsRequest());
    }

    /**
     * Sets metafields field.
     */
    public function metafields($value): self
    {
        $this->instance->setMetafields($value);
        return $this;
    }

    /**
     * Initializes a new update metafields request object.
     */
    public function build(): UpdateMetafieldsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
