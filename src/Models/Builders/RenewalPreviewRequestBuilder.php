<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RenewalPreviewRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model RenewalPreviewRequest
 *
 * @see RenewalPreviewRequest
 */
class RenewalPreviewRequestBuilder
{
    /**
     * @var RenewalPreviewRequest
     */
    private $instance;

    private function __construct(RenewalPreviewRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new renewal preview request Builder object.
     */
    public static function init(): self
    {
        return new self(new RenewalPreviewRequest());
    }

    /**
     * Sets components field.
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
        return $this;
    }

    /**
     * Initializes a new renewal preview request object.
     */
    public function build(): RenewalPreviewRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
