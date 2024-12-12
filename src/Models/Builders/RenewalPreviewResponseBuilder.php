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
     * Initializes a new Renewal Preview Response Builder object.
     *
     * @param RenewalPreview $renewalPreview
     */
    public static function init(RenewalPreview $renewalPreview): self
    {
        return new self(new RenewalPreviewResponse($renewalPreview));
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
     * Initializes a new Renewal Preview Response object.
     */
    public function build(): RenewalPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
