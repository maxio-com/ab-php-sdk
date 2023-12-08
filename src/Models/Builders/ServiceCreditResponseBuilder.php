<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ServiceCredit;
use AdvancedBillingLib\Models\ServiceCreditResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ServiceCreditResponse
 *
 * @see ServiceCreditResponse
 */
class ServiceCreditResponseBuilder
{
    /**
     * @var ServiceCreditResponse
     */
    private $instance;

    private function __construct(ServiceCreditResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service credit response Builder object.
     */
    public static function init(ServiceCredit $serviceCredit): self
    {
        return new self(new ServiceCreditResponse($serviceCredit));
    }

    /**
     * Initializes a new service credit response object.
     */
    public function build(): ServiceCreditResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
