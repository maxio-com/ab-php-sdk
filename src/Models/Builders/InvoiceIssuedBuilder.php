<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceIssued;
use AdvancedBillingLib\Models\InvoiceLineItemEventData;
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
     * Initializes a new Invoice Issued Builder object.
     *
     * @param string $uid
     * @param string $number
     * @param string $role
     * @param string $issueDate
     * @param string $paidDate
     * @param string $dueAmount
     * @param string $paidAmount
     * @param string $taxAmount
     * @param string $refundAmount
     * @param string $totalAmount
     * @param string $statusAmount
     * @param string $productName
     * @param string $consolidationLevel
     * @param InvoiceLineItemEventData[] $lineItems
     */
    public static function init(
        string $uid,
        string $number,
        string $role,
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
     * Sets due date field.
     *
     * @param \DateTime|null $value
     */
    public function dueDate(?\DateTime $value): self
    {
        $this->instance->setDueDate($value);
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
     * Initializes a new Invoice Issued object.
     */
    public function build(): InvoiceIssued
    {
        return CoreHelper::clone($this->instance);
    }
}
