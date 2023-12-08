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
     * Initializes a new mrrresponse Builder object.
     */
    public static function init(MRR $mrr): self
    {
        return new self(new MRRResponse($mrr));
    }

    /**
     * Initializes a new mrrresponse object.
     */
    public function build(): MRRResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
