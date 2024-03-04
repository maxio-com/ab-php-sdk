<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BatchJob;
use AdvancedBillingLib\Models\BatchJobResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model BatchJobResponse
 *
 * @see BatchJobResponse
 */
class BatchJobResponseBuilder
{
    /**
     * @var BatchJobResponse
     */
    private $instance;

    private function __construct(BatchJobResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new batch job response Builder object.
     */
    public static function init(BatchJob $batchjob): self
    {
        return new self(new BatchJobResponse($batchjob));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new batch job response object.
     */
    public function build(): BatchJobResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
