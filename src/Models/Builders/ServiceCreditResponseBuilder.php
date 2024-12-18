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
     * Initializes a new Service Credit Response Builder object.
     *
     * @param ServiceCredit $serviceCredit
     */
    public static function init(ServiceCredit $serviceCredit): self
    {
        return new self(new ServiceCreditResponse($serviceCredit));
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
     * Initializes a new Service Credit Response object.
     */
    public function build(): ServiceCreditResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
