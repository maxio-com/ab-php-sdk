<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AutoResume;
use AdvancedBillingLib\Models\PauseRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model PauseRequest
 *
 * @see PauseRequest
 */
class PauseRequestBuilder
{
    /**
     * @var PauseRequest
     */
    private $instance;

    private function __construct(PauseRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pause request Builder object.
     */
    public static function init(): self
    {
        return new self(new PauseRequest());
    }

    /**
     * Sets hold field.
     */
    public function hold(?AutoResume $value): self
    {
        $this->instance->setHold($value);
        return $this;
    }

    /**
     * Initializes a new pause request object.
     */
    public function build(): PauseRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
