<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SiteStatistics;
use AdvancedBillingLib\Models\SiteSummary;
use Core\Utils\CoreHelper;

/**
 * Builder for model SiteSummary
 *
 * @see SiteSummary
 */
class SiteSummaryBuilder
{
    /**
     * @var SiteSummary
     */
    private $instance;

    private function __construct(SiteSummary $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Site Summary Builder object.
     */
    public static function init(): self
    {
        return new self(new SiteSummary());
    }

    /**
     * Sets seller name field.
     *
     * @param string|null $value
     */
    public function sellerName(?string $value): self
    {
        $this->instance->setSellerName($value);
        return $this;
    }

    /**
     * Sets site name field.
     *
     * @param string|null $value
     */
    public function siteName(?string $value): self
    {
        $this->instance->setSiteName($value);
        return $this;
    }

    /**
     * Sets site id field.
     *
     * @param int|null $value
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
    }

    /**
     * Sets site currency field.
     *
     * @param string|null $value
     */
    public function siteCurrency(?string $value): self
    {
        $this->instance->setSiteCurrency($value);
        return $this;
    }

    /**
     * Sets stats field.
     *
     * @param SiteStatistics|null $value
     */
    public function stats(?SiteStatistics $value): self
    {
        $this->instance->setStats($value);
        return $this;
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
     * Initializes a new Site Summary object.
     */
    public function build(): SiteSummary
    {
        return CoreHelper::clone($this->instance);
    }
}
