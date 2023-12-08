<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ErrorListResponseException;
use AdvancedBillingLib\Exceptions\NestedErrorResponseException;
use AdvancedBillingLib\Models\ConsolidatedInvoice;
use AdvancedBillingLib\Models\CreateInvoicePaymentRequest;
use AdvancedBillingLib\Models\CreateInvoiceRequest;
use AdvancedBillingLib\Models\CreateMultiInvoicePaymentRequest;
use AdvancedBillingLib\Models\CreditNote;
use AdvancedBillingLib\Models\CustomerChangesPreviewResponse;
use AdvancedBillingLib\Models\Direction;
use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\InvoiceDateField;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\InvoiceResponse;
use AdvancedBillingLib\Models\InvoiceSortField;
use AdvancedBillingLib\Models\IssueInvoiceRequest;
use AdvancedBillingLib\Models\ListCreditNotesResponse;
use AdvancedBillingLib\Models\ListInvoiceEventsResponse;
use AdvancedBillingLib\Models\ListInvoicesResponse;
use AdvancedBillingLib\Models\MultiInvoicePaymentResponse;
use AdvancedBillingLib\Models\PaymentResponse;
use AdvancedBillingLib\Models\RecordPaymentRequest;
use AdvancedBillingLib\Models\RefundInvoiceRequest;
use AdvancedBillingLib\Models\SendInvoiceRequest;
use AdvancedBillingLib\Models\Status;
use AdvancedBillingLib\Models\VoidInvoiceRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class InvoicesController extends BaseController
{
    /**
     * Refund an invoice, segment, or consolidated invoice.
     *
     * ## Partial Refund for Consolidated Invoice
     *
     * A refund less than the total of a consolidated invoice will be split across its segments.
     *
     * A $50.00 refund on a $100.00 consolidated invoice with one $60.00 and one $40.00 segment, the
     * refunded amount will be applied as 50% of each ($30.00 and $20.00 respectively).
     *
     * @param string $uid The unique identifier for the invoice, this does not refer to the public
     *        facing invoice number.
     * @param RefundInvoiceRequest|null $body
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function refundInvoice(string $uid, ?RefundInvoiceRequest $body = null): Invoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/invoices/{uid}/refunds.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('uid', $uid)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * By default, invoices returned on the index will only include totals, not detailed breakdowns for
     * `line_items`, `discounts`, `taxes`, `credits`, `payments`, `custom_fields`, or `refunds`. To include
     * breakdowns, pass the specific field as a key in the query with a value set to `true`.
     *
     * @param array $options Array with all options for search
     *
     * @return ListInvoicesResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listInvoices(array $options): ListInvoicesResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/invoices.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('start_date', $options)->commaSeparated()->extract('startDate'),
                QueryParam::init('end_date', $options)->commaSeparated()->extract('endDate'),
                QueryParam::init('status', $options)
                    ->commaSeparated()
                    ->extract('status')
                    ->serializeBy([Status::class, 'checkValue']),
                QueryParam::init('subscription_id', $options)->commaSeparated()->extract('subscriptionId'),
                QueryParam::init('subscription_group_uid', $options)
                    ->commaSeparated()
                    ->extract('subscriptionGroupUid'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction', Direction::DESC)
                    ->serializeBy([Direction::class, 'checkValue']),
                QueryParam::init('line_items', $options)->commaSeparated()->extract('lineItems', false),
                QueryParam::init('discounts', $options)->commaSeparated()->extract('discounts', false),
                QueryParam::init('taxes', $options)->commaSeparated()->extract('taxes', false),
                QueryParam::init('credits', $options)->commaSeparated()->extract('credits', false),
                QueryParam::init('payments', $options)->commaSeparated()->extract('payments', false),
                QueryParam::init('custom_fields', $options)->commaSeparated()->extract('customFields', false),
                QueryParam::init('refunds', $options)->commaSeparated()->extract('refunds', false),
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField', InvoiceDateField::DUE_DATE)
                    ->serializeBy([InvoiceDateField::class, 'checkValue']),
                QueryParam::init('start_datetime', $options)->commaSeparated()->extract('startDatetime'),
                QueryParam::init('end_datetime', $options)->commaSeparated()->extract('endDatetime'),
                QueryParam::init('customer_ids', $options)->commaSeparated()->extract('customerIds'),
                QueryParam::init('number', $options)->commaSeparated()->extract('number'),
                QueryParam::init('product_ids', $options)->commaSeparated()->extract('productIds'),
                QueryParam::init('sort', $options)
                    ->commaSeparated()
                    ->extract('sort', InvoiceSortField::NUMBER)
                    ->serializeBy([InvoiceSortField::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(ListInvoicesResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to retrieve the details for an invoice.
     *
     * @param string $uid The unique identifier for the invoice, this does not refer to the public
     *        facing invoice number.
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readInvoice(string $uid): Invoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/invoices/{uid}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('uid', $uid)->required());

        $_resHandler = $this->responseHandler()->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint returns a list of invoice events. Each event contains event "data" (such as an applied
     * payment) as well as a snapshot of the `invoice` at the time of event completion.
     *
     * Exposed event types are:
     *
     * + issue_invoice
     * + apply_credit_note
     * + apply_payment
     * + refund_invoice
     * + void_invoice
     * + void_remainder
     * + backport_invoice
     * + change_invoice_status
     * + change_invoice_collection_method
     * + remove_payment
     * + failed_payment
     * + apply_debit_note
     * + create_debit_note
     * + change_chargeback_status
     *
     * Invoice events are returned in ascending order.
     *
     * If both a `since_date` and `since_id` are provided in request parameters, the `since_date` will be
     * used.
     *
     * Note - invoice events that occurred prior to 09/05/2018 __will not__ contain an `invoice` snapshot.
     *
     * @param array $options Array with all options for search
     *
     * @return ListInvoiceEventsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listInvoiceEvents(array $options): ListInvoiceEventsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/invoices/events.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('since_date', $options)->commaSeparated()->extract('sinceDate'),
                QueryParam::init('since_id', $options)->commaSeparated()->extract('sinceId'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 100),
                QueryParam::init('invoice_uid', $options)->commaSeparated()->extract('invoiceUid'),
                QueryParam::init('with_change_invoice_status', $options)
                    ->commaSeparated()
                    ->extract('withChangeInvoiceStatus'),
                QueryParam::init('event_types', $options)
                    ->commaSeparated()
                    ->extract('eventTypes')
                    ->serializeBy([InvoiceEventType::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(ListInvoiceEventsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API call should be used when you want to record a payment of a given type against a specific
     * invoice. If you would like to apply a payment across multiple invoices, you can use the Bulk Payment
     * endpoint.
     *
     * ## Create a Payment from the existing payment profile
     *
     * In order to apply a payment to an invoice using an existing payment profile, specify `type` as
     * `payment`, the amount less than the invoice total, and the customer's `payment_profile_id`. The ID
     * of a payment profile might be retrieved via the Payment Profiles API endpoint.
     *
     * ```
     * {
     * "type": "payment",
     * "payment": {
     * "amount": 10.00,
     * "payment_profile_id": 123
     * }
     * }
     * ```
     *
     * ## Create a Payment from the Subscription's Prepayment Account
     *
     * In order apply a prepayment to an invoice, specify the `type` as `prepayment`, and also the `amount`.
     *
     * ```
     * {
     * "type": "prepayment",
     * "payment": {
     * "amount": 10.00
     * }
     * }
     * ```
     *
     * Note that the `amount` must be less than or equal to the Subscription's Prepayment account balance.
     *
     * ## Create a Payment from the Subscription's Service Credit Account
     *
     * In order to apply a service credit to an invoice, specify the `type` as `service_credit`, and also
     * the `amount`:
     *
     *
     * ```
     * {
     * "type": "service_credit",
     * "payment": {
     * "amount": 10.00
     * }
     * }
     * ```
     *
     * Note that Chargify will attempt to fully pay the invoice's `due_amount` from the Subscription's
     * Service Credit account. At this time, partial payments from a Service Credit Account are only
     * allowed for consolidated invoices (subscription groups). Therefore, for normal invoices the Service
     * Credit account balance must be greater than or equal to the invoice's `due_amount`.
     *
     * @param string $uid The unique identifier for the invoice, this does not refer to the public
     *        facing invoice number.
     * @param CreateInvoicePaymentRequest|null $body
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function recordPaymentForInvoice(string $uid, ?CreateInvoicePaymentRequest $body = null): Invoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/invoices/{uid}/payments.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('uid', $uid)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API call should be used when you want to record an external payment against multiple invoices.
     *
     * In order apply a payment to multiple invoices, at minimum, specify the `amount` and `applications`
     * (i.e., `invoice_uid` and `amount`) details.
     *
     * ```
     * {
     * "payment": {
     * "memo": "to pay the bills",
     * "details": "check number 8675309",
     * "method": "check",
     * "amount": "250.00",
     * "applications": [
     * {
     * "invoice_uid": "inv_8gk5bwkct3gqt",
     * "amount": "100.00"
     * },
     * {
     * "invoice_uid": "inv_7bc6bwkct3lyt",
     * "amount": "150.00"
     * }
     * ]
     * }
     * }
     * ```
     *
     * Note that the invoice payment amounts must be greater than 0. Total amount must be greater or equal
     * to invoices payment amount sum.
     *
     * @param CreateMultiInvoicePaymentRequest|null $body
     *
     * @return MultiInvoicePaymentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function recordExternalPaymentForInvoices(
        ?CreateMultiInvoicePaymentRequest $body = null
    ): MultiInvoicePaymentResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/invoices/payments.json')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('422', ErrorType::init('Unprocessable Entity', ErrorListResponseException::class))
            ->type(MultiInvoicePaymentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Credit Notes are like inverse invoices. They reduce the amount a customer owes.
     *
     * By default, the credit notes returned by this endpoint will exclude the arrays of `line_items`,
     * `discounts`, `taxes`, `applications`, or `refunds`. To include these arrays, pass the specific field
     * as a key in the query with a value set to `true`.
     *
     * @param array $options Array with all options for search
     *
     * @return ListCreditNotesResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCreditNotes(array $options): ListCreditNotesResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/credit_notes.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('subscription_id', $options)->commaSeparated()->extract('subscriptionId'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('line_items', $options)->commaSeparated()->extract('lineItems', false),
                QueryParam::init('discounts', $options)->commaSeparated()->extract('discounts', false),
                QueryParam::init('taxes', $options)->commaSeparated()->extract('taxes', false),
                QueryParam::init('refunds', $options)->commaSeparated()->extract('refunds', false),
                QueryParam::init('applications', $options)->commaSeparated()->extract('applications', false)
            );

        $_resHandler = $this->responseHandler()->type(ListCreditNotesResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to retrieve the details for a credit note.
     *
     * @param string $uid The unique identifier of the credit note
     *
     * @return CreditNote Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readCreditNote(string $uid): CreditNote
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/credit_notes/{uid}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('uid', $uid)->required());

        $_resHandler = $this->responseHandler()->type(CreditNote::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Record an external payment made against a subscription that will pay partially or in full one or
     * more invoices.
     *
     * Payment will be applied starting with the oldest open invoice and then next oldest, and so on until
     * the amount of the payment is fully consumed.
     *
     * Excess payment will result in the creation of a prepayment on the Invoice Account.
     *
     * Only ungrouped or primary subscriptions may be paid using the "bulk" payment request.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param RecordPaymentRequest|null $body
     *
     * @return PaymentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function recordPaymentForSubscription(
        int $subscriptionId,
        ?RecordPaymentRequest $body = null
    ): PaymentResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/{subscription_id}/payments.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(PaymentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to reopen any invoice with the "canceled" status. Invoices enter "canceled"
     * status if they were open at the time the subscription was canceled (whether through dunning or an
     * intentional cancellation).
     *
     * Invoices with "canceled" status are no longer considered to be due. Once reopened, they are
     * considered due for payment. Payment may then be captured in one of the following ways:
     *
     * - Reactivating the subscription, which will capture all open invoices (See note below about
     * automatic reopening of invoices.)
     * - Recording a payment directly against the invoice
     *
     * A note about reactivations: any canceled invoices from the most recent active period are
     * automatically opened as a part of the reactivation process. Reactivating via this endpoint prior to
     * reactivation is only necessary when you wish to capture older invoices from previous periods during
     * the reactivation.
     *
     * ### Reopening Consolidated Invoices
     *
     * When reopening a consolidated invoice, all of its canceled segments will also be reopened.
     *
     * @param string $uid The unique identifier for the invoice, this does not refer to the public
     *        facing invoice number.
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function reopenInvoice(string $uid): Invoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/invoices/{uid}/reopen.json')
            ->auth('global')
            ->parameters(TemplateParam::init('uid', $uid)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to void any invoice with the "open" or "canceled" status.  It will also
     * allow voiding of an invoice with the "pending" status if it is not a consolidated invoice.
     *
     * @param string $uid The unique identifier for the invoice, this does not refer to the public
     *        facing invoice number.
     * @param VoidInvoiceRequest|null $body
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function voidInvoice(string $uid, ?VoidInvoiceRequest $body = null): Invoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/invoices/{uid}/void.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('uid', $uid)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Invoice segments returned on the index will only include totals, not detailed breakdowns for
     * `line_items`, `discounts`, `taxes`, `credits`, `payments`, or `custom_fields`.
     *
     * @param array $options Array with all options for search
     *
     * @return ConsolidatedInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listInvoiceSegments(array $options): ConsolidatedInvoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/invoices/{invoice_uid}/segments.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('invoice_uid', $options)->extract('invoiceUid')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction', Direction::ASC)
                    ->serializeBy([Direction::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(ConsolidatedInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint will allow you to create an ad hoc invoice.
     *
     * ### Basic Behavior
     *
     * You can create a basic invoice by sending an array of line items to this endpoint. Each line item,
     * at a minimum, must include a title, a quantity and a unit price. Example:
     *
     * ```json
     * {
     * "invoice": {
     * "line_items": [
     * {
     * "title": "A Product",
     * "quantity": 12,
     * "unit_price": "150.00"
     * }
     * ]
     * }
     * }
     * ```
     *
     * ### Catalog items
     * Instead of creating custom products like in above example, You can pass existing items like products,
     * components.
     *
     * ```json
     * {
     * "invoice": {
     * "line_items": [
     * {
     * "product_id": "handle:gold-product",
     * "quantity": 2,
     * }
     * ]
     * }
     * }
     * ```
     *
     *
     * The price for each line item will be calculated as well as a total due amount for the invoice.
     * Multiple line items can be sent.
     *
     * ### Line items types
     * When defining line item, You can choose one of 3 types for one line item:
     * #### Custom item
     * Like in basic behavior example above, You can pass `title` and `unit_price` for custom item.
     * #### Product id
     * Product handle (with handle: prefix) or id from the scope of current subscription's site can be
     * provided with `product_id`. By default `unit_price` is taken from product's default price point, but
     * can be overwritten by passing `unit_price` or `product_price_point_id`. If `product_id` is used,
     * following fields cannot be used: `title`, `component_id`.
     * #### Component id
     * Component handle (with handle: prefix) or id from the scope of current subscription's site can be
     * provided with `component_id`. If `component_id` is used, following fields cannot be used: `title`,
     * `product_id`. By default `unit_price` is taken from product's default price point, but can be
     * overwritten by passing `unit_price` or `price_point_id`. At this moment price points are supportted
     * only for quantity based, on/off and metered components. For prepaid and event based billing
     * components `unit_price` is required.
     *
     * ### Coupons
     * When creating ad hoc invoice, new discounts can be applied in following way:
     *
     * ```json
     * {
     * "invoice": {
     * "line_items": [
     * {
     * "product_id": "handle:gold-product",
     * "quantity": 1
     * }
     * ],
     * "coupons": [
     * {
     * "code": "COUPONCODE",
     * "percentage": 50.0
     * }
     * ]
     * }
     * }
     * ```
     * If You want to use existing coupon for discount creation, only `code` and optional
     * `product_family_id` is needed
     *
     * ```json
     * ...
     * "coupons": [
     * {
     * "code": "FREESETUP",
     * "product_family_id": 1
     * }
     * ]
     * ...
     * ```
     *
     * ### Coupon options
     * #### Code
     * Coupon `code` will be displayed on invoice discount section.
     * Coupon code can only contain uppercase letters, numbers, and allowed special characters.
     * Lowercase letters will be converted to uppercase. It can be used to select an existing coupon from
     * the catalog, or as an ad hoc coupon when passed with `percentage` or `amount`.
     * #### Percentage
     * Coupon `percentage` can take values from 0 to 100 and up to 4 decimal places. It cannot be used with
     * `amount`. Only for ad hoc coupons, will be ignored if `code` is used to select an existing coupon
     * from the catalog.
     * #### Amount
     * Coupon `amount` takes number value. It cannot be used with `percentage`. Used only when not matching
     * existing coupon by `code`.
     * #### Description
     * Optional `description` will be displayed with coupon `code`. Used only when not matching existing
     * coupon by `code`.
     * #### Product Family id
     * Optional `product_family_id` handle (with handle: prefix) or id is used to match existing coupon
     * within site, when codes are not unique.
     * #### Compounding Strategy
     * Optional `compounding_strategy` for percentage coupons, can take values `compound` or `full-price`.
     *
     * For amount coupons, discounts will be always calculated against the original item price, before
     * other discounts are applied.
     *
     * `compound` strategy:
     * Percentage-based discounts will be calculated against the remaining price, after prior discounts
     * have been calculated. It is set by default.
     *
     * `full-price` strategy:
     * Percentage-based discounts will always be calculated against the original item price, before other
     * discounts are applied.
     *
     * ### Line Item Options
     *
     * #### Period Date Range
     *
     * A custom period date range can be defined for each line item with the `period_range_start` and
     * `period_range_end` parameters. Dates must be sent in the `YYYY-MM-DD` format.
     * `period_range_end` must be greater or equal `period_range_start`.
     *
     * #### Taxes
     *
     * The `taxable` parameter can be sent as `true` if taxes should be calculated for a specific line item.
     * For this to work, the site should be configured to use and calculate taxes. Further, if the site
     * uses Avalara for tax calculations, a `tax_code` parameter should also be sent. For existing catalog
     * items: products/components taxes cannot be overwritten.
     *
     * #### Price Point
     * Price point handle (with handle: prefix) or id from the scope of current subscription's site can be
     * provided with `price_point_id` for components with `component_id` or `product_price_point_id` for
     * products with `product_id` parameter. If price point is passed `unit_price` cannot be used. It can
     * be used only with catalog items products and components.
     *
     * #### Description
     * Optional `description` parameter, it will overwrite default generated description for line item.
     *
     * ### Invoice Options
     *
     * #### Issue Date
     *
     * By default, invoices will be created with a issue date set to today. `issue_date` parameter can be
     * send to alter that. Only dates in the past can be send. `issue_date` should be send in `YYYY-MM-DD`
     * format.
     *
     * #### Net Terms
     *
     * By default, invoices will be created with a due date matching the date of invoice creation. If a
     * different due date is desired, the `net_terms` parameter can be sent indicating the number of days
     * in advance the due date should be.
     *
     * #### Addresses
     *
     * The seller, shipping and billing addresses can be sent to override the site's defaults. Each address
     * requires to send a `first_name` at a minimum in order to work. Please see below for the details on
     * which parameters can be sent for each address object.
     *
     * #### Memo and Payment Instructions
     *
     * A custom memo can be sent with the `memo` parameter to override the site's default. Likewise, custom
     * payment instructions can be sent with the `payment_instrucions` parameter.
     *
     * #### Status
     *
     * By default, invoices will be created with open status. Possible alternative is `draft`.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param CreateInvoiceRequest|null $body
     *
     * @return InvoiceResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createInvoice(int $subscriptionId, ?CreateInvoiceRequest $body = null): InvoiceResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/{subscription_id}/invoices.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized'))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', NestedErrorResponseException::class)
            )
            ->type(InvoiceResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows for invoices to be programmatically delivered via email. This endpoint supports
     * the delivery of both ad-hoc and automatically generated invoices. Additionally, this endpoint
     * supports email delivery to direct recipients, carbon-copy (cc) recipients, and blind carbon-copy
     * (bcc) recipients.
     *
     * Please note that if no recipient email addresses are specified in the request, then the
     * subscription's default email configuration will be used. For example, if `recipient_emails` is left
     * blank, then the invoice will be delivered to the subscription's customer email address.
     *
     * On success, a 204 no-content response will be returned. Please note that this does not indicate that
     * email(s) have been delivered, but instead indicates that emails have been successfully queued for
     * delivery. If _any_ invalid or malformed email address is found in the request body, the entire
     * request will be rejected and a 422 response will be returned.
     *
     * @param string $uid The unique identifier for the invoice, this does not refer to the public
     *        facing invoice number.
     * @param SendInvoiceRequest|null $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendInvoice(string $uid, ?SendInvoiceRequest $body = null): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/invoices/{uid}/deliveries.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('uid', $uid)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            );

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Customer information may change after an invoice is issued which may lead to a mismatch between
     * customer information that are present on an open invoice and actual customer information. This
     * endpoint allows to preview these differences, if any.
     *
     * The endpoint doesn't accept a request body. Customer information differences are calculated on the
     * application side.
     *
     * @param string $uid The unique identifier for the invoice, this does not refer to the public
     *        facing invoice number.
     *
     * @return CustomerChangesPreviewResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function previewCustomerInformationChanges(string $uid): CustomerChangesPreviewResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/invoices/{uid}/customer_information/preview.json'
        )->auth('global')->parameters(TemplateParam::init('uid', $uid)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found', ErrorListResponseException::class))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(CustomerChangesPreviewResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint updates customer information on an open invoice and returns the updated invoice. If
     * you would like to preview changes that will be applied, use the
     * `/invoices/{uid}/customer_information/preview.json` endpoint before.
     *
     * The endpoint doesn't accept a request body. Customer information differences are calculated on the
     * application side.
     *
     * @param string $uid The unique identifier for the invoice, this does not refer to the public
     *        facing invoice number.
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCustomerInformation(string $uid): Invoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/invoices/{uid}/customer_information.json')
            ->auth('global')
            ->parameters(TemplateParam::init('uid', $uid)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found', ErrorListResponseException::class))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to issue an invoice that is in "pending" status. For example, you can issue
     * an invoice that was created when allocating new quantity on a component and using "accrue charges"
     * option.
     *
     * You cannot issue a pending child invoice that was created for a member subscription in a group.
     *
     * For Remittance subscriptions, the invoice will go into "open" status and payment won't be attempted.
     * The value for `on_failed_payment` would be rejected if sent. Any prepayments or service credits that
     * exist on subscription will be automatically applied. Additionally, if setting is on, an email will
     * be sent for issued invoice.
     *
     * For Automatic subscriptions, prepayments and service credits will apply to the invoice and before
     * payment is attempted. On successful payment, the invoice will go into "paid" status and email will
     * be sent to the customer (if setting applies). When payment fails, the next event depends on the
     * `on_failed_payment` value:
     * - `leave_open_invoice` - prepayments and credits applied to invoice; invoice status set to "open";
     * email sent to the customer for the issued invoice (if setting applies); payment failure recorded in
     * the invoice history. This is the default option.
     * - `rollback_to_pending` - prepayments and credits not applied; invoice remains in "pending" status;
     * no email sent to the customer; payment failure recorded in the invoice history.
     * - `initiate_dunning` - prepayments and credits applied to the invoice; invoice status set to "open";
     * email sent to the customer for the issued invoice (if setting applies); payment failure recorded in
     * the invoice history; subscription will  most likely go into "past_due" or "canceled" state
     * (depending upon net terms and dunning settings).
     *
     * @param string $uid The unique identifier for the invoice, this does not refer to the public
     *        facing invoice number.
     * @param IssueInvoiceRequest|null $body
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function issueInvoice(string $uid, ?IssueInvoiceRequest $body = null): Invoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/invoices/{uid}/issue.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('uid', $uid)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized'))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
