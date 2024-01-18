<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ErrorArrayMapResponseException;
use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\InvoiceEvent;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\TestData\InvoiceTestData;
use AdvancedBillingLib\Tests\TestStatusCode;
use Exception;

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

    public function assertInvoiceVoided(Invoice $voidedInvoice): void
    {
        $this->testCase::assertEquals(InvoiceTestData::VOIDED_STATUS, $voidedInvoice->getStatus());
    }

    /**
     * @param array<int, InvoiceEvent> $events
     */
    public function assertResponseReturnedEvents(array $events, int $paginationLimit): void
    {
        $this->testCase::assertGreaterThan(0, count($events));
        $this->testCase::assertLessThanOrEqual($paginationLimit, count($events));
    }

    /**
     * @param array<int, InvoiceEvent> $events
     */
    public function assertReturnedOnlyIssueInvoiceEvents(array $events): void
    {
        foreach ($events as $event) {
            $this->testCase::assertEquals(InvoiceEventType::ISSUE_INVOICE, $event->getEventType());
        }
    }

    /**
     * @param array<int, InvoiceEvent> $events
     */
    public function assertReturnedOnlyVoidInvoiceEvents(array $events): void
    {
        foreach ($events as $event) {
            $this->testCase::assertEquals(InvoiceEventType::VOID_INVOICE, $event->getEventType());
        }
    }

    public function assertCannotCreateInvoiceBecauseOfInvalidPeriodRangeEndValue(ApiException|Exception $e): void
    {
        $this->testCase::assertInstanceOf(ErrorArrayMapResponseException::class, $e);
        $this->testCase::assertEquals(TestStatusCode::UNPROCESSABLE_CONTENT, $e->getCode());
        $this->testCase::assertEquals(
            [
                'line_items[0].period_range_end' => [
                    'Must be greater or equal to period_range_start.'
                ]
            ],
            $e->getErrors()
        );
    }
}
