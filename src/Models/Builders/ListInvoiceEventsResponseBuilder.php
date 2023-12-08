<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListInvoiceEventsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListInvoiceEventsResponse
 *
 * @see ListInvoiceEventsResponse
 */
class ListInvoiceEventsResponseBuilder
{
    /**
     * @var ListInvoiceEventsResponse
     */
    private $instance;

    private function __construct(ListInvoiceEventsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list invoice events response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListInvoiceEventsResponse());
    }

    /**
     * Sets events field.
     */
    public function events(?array $value): self
    {
        $this->instance->setEvents($value);
        return $this;
    }

    /**
     * Sets page field.
     */
    public function page(?int $value): self
    {
        $this->instance->setPage($value);
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
     * Sets total pages field.
     */
    public function totalPages(?int $value): self
    {
        $this->instance->setTotalPages($value);
        return $this;
    }

    /**
     * Initializes a new list invoice events response object.
     */
    public function build(): ListInvoiceEventsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
