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
     * Initializes a new site response Builder object.
     */
    public static function init(Site $site): self
    {
        return new self(new SiteResponse($site));
    }

    /**
     * Initializes a new site response object.
     */
    public function build(): SiteResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
