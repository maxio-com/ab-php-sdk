<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListInvoicesResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListInvoicesResponse
 *
 * @see ListInvoicesResponse
 */
class ListInvoicesResponseBuilder
{
    /**
     * @var ListInvoicesResponse
     */
    private $instance;

    private function __construct(ListInvoicesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list invoices response Builder object.
     */
    public static function init(array $invoices): self
    {
        return new self(new ListInvoicesResponse($invoices));
    }

    /**
     * Initializes a new list invoices response object.
     */
    public function build(): ListInvoicesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
