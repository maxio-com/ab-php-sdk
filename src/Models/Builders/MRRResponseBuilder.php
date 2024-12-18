<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MRR;
use AdvancedBillingLib\Models\MRRResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model MRRResponse
 *
 * @see MRRResponse
 */
class MRRResponseBuilder
{
    /**
     * @var MRRResponse
     */
    private $instance;

    private function __construct(MRRResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new MRR Response Builder object.
     *
     * @param MRR $mrr
     */
    public static function init(MRR $mrr): self
    {
        return new self(new MRRResponse($mrr));
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
     * Initializes a new MRR Response object.
     */
    public function build(): MRRResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
