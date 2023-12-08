<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RenewalPreview;
use AdvancedBillingLib\Models\RenewalPreviewResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model RenewalPreviewResponse
 *
 * @see RenewalPreviewResponse
 */
class RenewalPreviewResponseBuilder
{
    /**
     * @var RenewalPreviewResponse
     */
    private $instance;

    private function __construct(RenewalPreviewResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new renewal preview response Builder object.
     */
    public static function init(RenewalPreview $renewalPreview): self
    {
        return new self(new RenewalPreviewResponse($renewalPreview));
    }

    /**
     * Initializes a new renewal preview response object.
     */
    public function build(): RenewalPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
