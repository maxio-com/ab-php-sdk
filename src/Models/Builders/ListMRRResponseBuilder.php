<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListMRRResponse;
use AdvancedBillingLib\Models\ListMRRResponseResult;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListMRRResponse
 *
 * @see ListMRRResponse
 */
class ListMRRResponseBuilder
{
    /**
     * @var ListMRRResponse
     */
    private $instance;

    private function __construct(ListMRRResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List MRR Response Builder object.
     *
     * @param ListMRRResponseResult $mrr
     */
    public static function init(ListMRRResponseResult $mrr): self
    {
        return new self(new ListMRRResponse($mrr));
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
     * Initializes a new List MRR Response object.
     */
    public function build(): ListMRRResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
