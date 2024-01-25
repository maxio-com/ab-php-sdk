<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChangeInvoiceCollectionMethodEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChangeInvoiceCollectionMethodEventData
 *
 * @see ChangeInvoiceCollectionMethodEventData
 */
class ChangeInvoiceCollectionMethodEventDataBuilder
{
    /**
     * @var ChangeInvoiceCollectionMethodEventData
     */
    private $instance;

    private function __construct(ChangeInvoiceCollectionMethodEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change invoice collection method event data Builder object.
     */
    public static function init(string $fromCollectionMethod, string $toCollectionMethod): self
    {
        return new self(new ChangeInvoiceCollectionMethodEventData($fromCollectionMethod, $toCollectionMethod));
    }

    /**
     * Initializes a new change invoice collection method event data object.
     */
    public function build(): ChangeInvoiceCollectionMethodEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
