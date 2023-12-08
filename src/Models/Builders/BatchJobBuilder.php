<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BatchJob;
use Core\Utils\CoreHelper;

/**
 * Builder for model BatchJob
 *
 * @see BatchJob
 */
class BatchJobBuilder
{
    /**
     * @var BatchJob
     */
    private $instance;

    private function __construct(BatchJob $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new batch job Builder object.
     */
    public static function init(): self
    {
        return new self(new BatchJob());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets finished at field.
     */
    public function finishedAt(?string $value): self
    {
        $this->instance->setFinishedAt($value);
        return $this;
    }

    /**
     * Unsets finished at field.
     */
    public function unsetFinishedAt(): self
    {
        $this->instance->unsetFinishedAt();
        return $this;
    }

    /**
     * Sets row count field.
     */
    public function rowCount(?int $value): self
    {
        $this->instance->setRowCount($value);
        return $this;
    }

    /**
     * Unsets row count field.
     */
    public function unsetRowCount(): self
    {
        $this->instance->unsetRowCount();
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Unsets created at field.
     */
    public function unsetCreatedAt(): self
    {
        $this->instance->unsetCreatedAt();
        return $this;
    }

    /**
     * Sets completed field.
     */
    public function completed(?string $value): self
    {
        $this->instance->setCompleted($value);
        return $this;
    }

    /**
     * Initializes a new batch job object.
     */
    public function build(): BatchJob
    {
        return CoreHelper::clone($this->instance);
    }
}
