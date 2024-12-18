<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Site;
use AdvancedBillingLib\Models\SiteResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SiteResponse
 *
 * @see SiteResponse
 */
class SiteResponseBuilder
{
    /**
     * @var SiteResponse
     */
    private $instance;

    private function __construct(SiteResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Site Response Builder object.
     *
     * @param Site $site
     */
    public static function init(Site $site): self
    {
        return new self(new SiteResponse($site));
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
     * Initializes a new Site Response object.
     */
    public function build(): SiteResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
