<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListPublicKeysMeta;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListPublicKeysMeta
 *
 * @see ListPublicKeysMeta
 */
class ListPublicKeysMetaBuilder
{
    /**
     * @var ListPublicKeysMeta
     */
    private $instance;

    private function __construct(ListPublicKeysMeta $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list public keys meta Builder object.
     */
    public static function init(): self
    {
        return new self(new ListPublicKeysMeta());
    }

    /**
     * Sets total count field.
     */
    public function totalCount(?int $value): self
    {
        $this->instance->setTotalCount($value);
        return $this;
    }

    /**
     * Sets current page field.
     */
    public function currentPage(?int $value): self
    {
        $this->instance->setCurrentPage($value);
        return $this;
    }

    /**
     * Sets total pages field.
     */
    public function totalPages(?int $value): self
    {
        $this->instance->setTotalPages($value);
        return $this;
    }

    /**
     * Sets per page field.
     */
    public function perPage(?int $value): self
    {
        $this->instance->setPerPage($value);
        return $this;
    }

    /**
     * Initializes a new list public keys meta object.
     */
    public function build(): ListPublicKeysMeta
    {
        return CoreHelper::clone($this->instance);
    }
}
