<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceIssued;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceIssued
 *
 * @see InvoiceIssued
 */
class InvoiceIssuedBuilder
{
    /**
     * @var InvoiceIssued
     */
    private $instance;

    private function __construct(InvoiceIssued $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice issued Builder object.
     */
    public static function init(
        string $uid,
        string $number,
        string $role,
        string $dueDate,
        string $issueDate,
        string $paidDate,
        string $dueAmount,
        string $paidAmount,
        string $taxAmount,
        string $refundAmount,
        string $totalAmount,
        string $statusAmount,
        string $productName,
        string $consolidationLevel,
        array $lineItems
    ): self {
        return new self(new InvoiceIssued(
            $uid,
            $number,
            $role,
            $dueDate,
            $issueDate,
            $paidDate,
            $dueAmount,
            $paidAmount,
            $taxAmount,
            $refundAmount,
            $totalAmount,
            $statusAmount,
            $productName,
            $consolidationLevel,
            $lineItems
        ));
    }

    /**
     * Initializes a new invoice issued object.
     */
    public function build(): InvoiceIssued
    {
        return CoreHelper::clone($this->instance);
    }
}
