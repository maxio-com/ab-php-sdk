<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceLineItemEventData;
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
     * Initializes a new Proforma Invoice Issued Builder object.
     *
     * @param string $uid
     * @param string $number
     * @param string $role
     * @param \DateTime $deliveryDate
     * @param \DateTime $createdAt
     * @param string $dueAmount
     * @param string $paidAmount
     * @param string $taxAmount
     * @param string $totalAmount
     * @param string $productName
     * @param InvoiceLineItemEventData[] $lineItems
     */
    public static function init(
        string $uid,
        string $number,
        string $role,
        \DateTime $deliveryDate,
        \DateTime $createdAt,
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
     * Initializes a new Proforma Invoice Issued object.
     */
    public function build(): ProformaInvoiceIssued
    {
        return CoreHelper::clone($this->instance);
    }
}
