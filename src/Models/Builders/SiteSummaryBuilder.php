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
     * Initializes a new site summary Builder object.
     */
    public static function init(): self
    {
        return new self(new SiteSummary());
    }

    /**
     * Sets seller name field.
     */
    public function sellerName(?string $value): self
    {
        $this->instance->setSellerName($value);
        return $this;
    }

    /**
     * Sets site name field.
     */
    public function siteName(?string $value): self
    {
        $this->instance->setSiteName($value);
        return $this;
    }

    /**
     * Sets site id field.
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
    }

    /**
     * Sets site currency field.
     */
    public function siteCurrency(?string $value): self
    {
        $this->instance->setSiteCurrency($value);
        return $this;
    }

    /**
     * Sets stats field.
     */
    public function stats(?SiteStatistics $value): self
    {
        $this->instance->setStats($value);
        return $this;
    }

    /**
     * Initializes a new site summary object.
     */
    public function build(): SiteSummary
    {
        return CoreHelper::clone($this->instance);
    }
}
