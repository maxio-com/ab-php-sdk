<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RenewalPreviewComponent;
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
     * Initializes a new Renewal Preview Request Builder object.
     */
    public static function init(): self
    {
        return new self(new RenewalPreviewRequest());
    }

    /**
     * Sets components field.
     *
     * @param RenewalPreviewComponent[]|null $value
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
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
     * Initializes a new Renewal Preview Request object.
     */
    public function build(): RenewalPreviewRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
