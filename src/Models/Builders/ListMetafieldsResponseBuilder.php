<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListMetafieldsResponse;
use AdvancedBillingLib\Models\Metafield;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListMetafieldsResponse
 *
 * @see ListMetafieldsResponse
 */
class ListMetafieldsResponseBuilder
{
    /**
     * @var ListMetafieldsResponse
     */
    private $instance;

    private function __construct(ListMetafieldsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Metafields Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListMetafieldsResponse());
    }

    /**
     * Sets total count field.
     *
     * @param int|null $value
     */
    public function totalCount(?int $value): self
    {
        $this->instance->setTotalCount($value);
        return $this;
    }

    /**
     * Sets current page field.
     *
     * @param int|null $value
     */
    public function currentPage(?int $value): self
    {
        $this->instance->setCurrentPage($value);
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
     * Sets metafields field.
     *
     * @param Metafield[]|null $value
     */
    public function metafields(?array $value): self
    {
        $this->instance->setMetafields($value);
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
     * Initializes a new List Metafields Response object.
     */
    public function build(): ListMetafieldsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
