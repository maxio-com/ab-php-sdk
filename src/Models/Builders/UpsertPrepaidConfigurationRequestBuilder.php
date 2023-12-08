<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpsertPrepaidConfiguration;
use AdvancedBillingLib\Models\UpsertPrepaidConfigurationRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpsertPrepaidConfigurationRequest
 *
 * @see UpsertPrepaidConfigurationRequest
 */
class UpsertPrepaidConfigurationRequestBuilder
{
    /**
     * @var UpsertPrepaidConfigurationRequest
     */
    private $instance;

    private function __construct(UpsertPrepaidConfigurationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new upsert prepaid configuration request Builder object.
     */
    public static function init(UpsertPrepaidConfiguration $prepaidConfiguration): self
    {
        return new self(new UpsertPrepaidConfigurationRequest($prepaidConfiguration));
    }

    /**
     * Initializes a new upsert prepaid configuration request object.
     */
    public function build(): UpsertPrepaidConfigurationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
