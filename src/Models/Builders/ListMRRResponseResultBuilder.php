<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListMRRResponseResult;
use AdvancedBillingLib\Models\Movement;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListMRRResponseResult
 *
 * @see ListMRRResponseResult
 */
class ListMRRResponseResultBuilder
{
    /**
     * @var ListMRRResponseResult
     */
    private $instance;

    private function __construct(ListMRRResponseResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List MRR Response Result Builder object.
     */
    public static function init(): self
    {
        return new self(new ListMRRResponseResult());
    }

    /**
     * Sets page field.
     *
     * @param int|null $value
     */
    public function page(?int $value): self
    {
        $this->instance->setPage($value);
        return $this;
    }

    /**
     * Sets per page field.
     *
     * @param int|null $value
     */
    public function perPage(?int $value): self
    {
        $this->instance->setPerPage($value);
        return $this;
    }

    /**
     * Sets total pages field.
     *
     * @param int|null $value
     */
    public function totalPages(?int $value): self
    {
        $this->instance->setTotalPages($value);
        return $this;
    }

    /**
     * Sets total entries field.
     *
     * @param int|null $value
     */
    public function totalEntries(?int $value): self
    {
        $this->instance->setTotalEntries($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets currency symbol field.
     *
     * @param string|null $value
     */
    public function currencySymbol(?string $value): self
    {
        $this->instance->setCurrencySymbol($value);
        return $this;
    }

    /**
     * Sets movements field.
     *
     * @param Movement[]|null $value
     */
    public function movements(?array $value): self
    {
        $this->instance->setMovements($value);
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
     * Initializes a new List MRR Response Result object.
     */
    public function build(): ListMRRResponseResult
    {
        return CoreHelper::clone($this->instance);
    }
}
