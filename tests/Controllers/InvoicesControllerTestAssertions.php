<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\TestData\InvoiceTestData;

final class InvoicesControllerTestAssertions
{
    public function __construct(private InvoicesControllerTest $testCase)
    {
    }

    public function assertInvoiceCreated(Invoice $invoice, Subscription $invoicedSubscription): void
    {
        $invoicedCustomer = $invoicedSubscription->getCustomer();

        $this->testCase::assertEquals($invoicedCustomer->getId(), $invoice->getCustomerId());
        $this->testCase::assertEquals($invoicedSubscription->getId(), $invoice->getSubscriptionId());

        $this->testCase::assertCount(1, $invoice->getLineItems());
        $lineItem = $invoice->getLineItems()[0];
        $this->testCase::assertEquals(InvoiceTestData::LINE_ITEM_TITLE, $lineItem->getTitle());
        $this->testCase::assertEquals(InvoiceTestData::LINE_ITEM_QUANTITY, $lineItem->getQuantity());
        $this->testCase::assertEquals(InvoiceTestData::LINE_ITEM_UNIT_PRICE, $lineItem->getUnitPrice());

        $this->testCase::assertEquals(InvoiceTestData::PAYMENT_INSTRUCTIONS, $invoice->getPaymentInstructions());

        $seller = $invoice->getSeller();
        $this->testCase::assertEquals(
            sprintf('%s %s', InvoiceTestData::INVOICE_ADDRESS_FIRST_NAME, InvoiceTestData::INVOICE_ADDRESS_LAST_NAME),
            $seller->getName()
        );
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_PHONE, $seller->getPhone());
        $sellerAddress = $seller->getAddress();
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_STATE, $sellerAddress->getState());
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_CITY, $sellerAddress->getCity());
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_COUNTRY, $sellerAddress->getCountry());
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_ZIP, $sellerAddress->getZip());

        $shippingAddress = $invoice->getShippingAddress();
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_STATE, $shippingAddress->getState());
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_CITY, $shippingAddress->getCity());
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_COUNTRY, $shippingAddress->getCountry());
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_ZIP, $shippingAddress->getZip());

        $billingAddress = $invoice->getBillingAddress();
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_STATE, $billingAddress->getState());
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_CITY, $billingAddress->getCity());
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_COUNTRY, $billingAddress->getCountry());
        $this->testCase::assertEquals(InvoiceTestData::INVOICE_ADDRESS_ZIP, $billingAddress->getZip());
    }

    public function assertInvoiceWithCouponCreated(Invoice $invoice, Coupon $coupon): void
    {
        $this->testCase::assertCount(1, $invoice->getDiscounts());

        $discount = $invoice->getDiscounts()[0];
        $this->testCase::assertEquals($coupon->getCode(), $discount->getCode());
        $this->testCase::assertEquals($coupon->getName(), $discount->getTitle());
        $this->testCase::assertEquals($coupon->getPercentage(), $discount->getPercentage());
    }
}
