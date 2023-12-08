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
     * Initializes a new list mrrresponse Builder object.
     */
    public static function init(ListMRRResponseResult $mrr): self
    {
        return new self(new ListMRRResponse($mrr));
    }

    /**
     * Initializes a new list mrrresponse object.
     */
    public function build(): ListMRRResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
