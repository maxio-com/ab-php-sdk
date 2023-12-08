<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProformaInvoiceIssued;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaInvoiceIssued
 *
 * @see ProformaInvoiceIssued
 */
class ProformaInvoiceIssuedBuilder
{
    /**
     * @var ProformaInvoiceIssued
     */
    private $instance;

    private function __construct(ProformaInvoiceIssued $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new proforma invoice issued Builder object.
     */
    public static function init(
        string $uid,
        string $number,
        string $role,
        string $deliveryDate,
        string $createdAt,
        string $dueAmount,
        string $paidAmount,
        string $taxAmount,
        string $totalAmount,
        string $productName,
        array $lineItems
    ): self {
        return new self(new ProformaInvoiceIssued(
            $uid,
            $number,
            $role,
            $deliveryDate,
            $createdAt,
            $dueAmount,
            $paidAmount,
            $taxAmount,
            $totalAmount,
            $productName,
            $lineItems
        ));
    }

    /**
     * Initializes a new proforma invoice issued object.
     */
    public function build(): ProformaInvoiceIssued
    {
        return CoreHelper::clone($this->instance);
    }
}
