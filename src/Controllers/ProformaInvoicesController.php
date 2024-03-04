<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ErrorArrayMapResponseException;
use AdvancedBillingLib\Exceptions\ErrorListResponseException;
use AdvancedBillingLib\Exceptions\ProformaBadRequestErrorResponseException;
use AdvancedBillingLib\Models\CreateSignupProformaPreviewInclude;
use AdvancedBillingLib\Models\CreateSubscriptionRequest;
use AdvancedBillingLib\Models\Direction;
use AdvancedBillingLib\Models\ListProformaInvoicesResponse;
use AdvancedBillingLib\Models\ProformaInvoice;
use AdvancedBillingLib\Models\ProformaInvoiceStatus;
use AdvancedBillingLib\Models\SignupProformaPreviewResponse;
use AdvancedBillingLib\Models\VoidInvoiceRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class ProformaInvoicesController extends BaseController
{
    /**
     * This endpoint will trigger the creation of a consolidated proforma invoice asynchronously. It will
     * return a 201 with no message, or a 422 with any errors. To find and view the new consolidated
     * proforma invoice, you may poll the subscription group listing for proforma invoices; only one
     * consolidated proforma invoice may be created per group at a time.
     *
     * If the information becomes outdated, simply void the old consolidated proforma invoice and generate
     * a new one.
     *
     * ## Restrictions
     *
     * Proforma invoices are only available on Relationship Invoicing sites. To create a proforma invoice,
     * the subscription must not be prepaid, and must be in a live state.
     *
     * @param string $uid The uid of the subscription group
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createConsolidatedProformaInvoice(string $uid): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscription_groups/{uid}/proforma_invoices.json'
        )->auth('BasicAuth')->parameters(TemplateParam::init('uid', $uid)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            );

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Only proforma invoices with a `consolidation_level` of parent are returned.
     *
     * By default, proforma invoices returned on the index will only include totals, not detailed
     * breakdowns for `line_items`, `discounts`, `taxes`, `credits`, `payments`, `custom_fields`. To
     * include breakdowns, pass the specific field as a key in the query with a value set to true.
     *
     *
     * @param array $options Array with all options for search
     *
     * @return ListProformaInvoicesResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSubscriptionGroupProformaInvoices(array $options): ListProformaInvoicesResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscription_groups/{uid}/proforma_invoices.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('uid', $options)->extract('uid')->required(),
                QueryParam::init('line_items', $options)->commaSeparated()->extract('lineItems', false),
                QueryParam::init('discounts', $options)->commaSeparated()->extract('discounts', false),
                QueryParam::init('taxes', $options)->commaSeparated()->extract('taxes', false),
                QueryParam::init('credits', $options)->commaSeparated()->extract('credits', false),
                QueryParam::init('payments', $options)->commaSeparated()->extract('payments', false),
                QueryParam::init('custom_fields', $options)->commaSeparated()->extract('customFields', false)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(ListProformaInvoicesResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to read the details of an existing proforma invoice.
     *
     * ## Restrictions
     *
     * Proforma invoices are only available on Relationship Invoicing sites.
     *
     * @param string $proformaInvoiceUid The uid of the proforma invoice
     *
     * @return ProformaInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readProformaInvoice(string $proformaInvoiceUid): ProformaInvoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/proforma_invoices/{proforma_invoice_uid}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('proforma_invoice_uid', $proformaInvoiceUid)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(ProformaInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint will create a proforma invoice and return it as a response. If the information becomes
     * outdated, simply void the old proforma invoice and generate a new one.
     *
     * If you would like to preview the next billing amounts without generating a full proforma invoice,
     * please use the renewal preview endpoint.
     *
     * ## Restrictions
     *
     * Proforma invoices are only available on Relationship Invoicing sites. To create a proforma invoice,
     * the subscription must not be in a group, must not be prepaid, and must be in a live state.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     *
     * @return ProformaInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createProformaInvoice(int $subscriptionId): ProformaInvoice
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/proforma_invoices.json'
        )->auth('BasicAuth')->parameters(TemplateParam::init('subscription_id', $subscriptionId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ProformaInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * By default, proforma invoices returned on the index will only include totals, not detailed
     * breakdowns for `line_items`, `discounts`, `taxes`, `credits`, `payments`, or `custom_fields`. To
     * include breakdowns, pass the specific field as a key in the query with a value set to `true`.
     *
     * @param array $options Array with all options for search
     *
     * @return ListProformaInvoicesResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listProformaInvoices(array $options): ListProformaInvoicesResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/proforma_invoices.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $options)->extract('subscriptionId')->required(),
                QueryParam::init('start_date', $options)->commaSeparated()->extract('startDate'),
                QueryParam::init('end_date', $options)->commaSeparated()->extract('endDate'),
                QueryParam::init('status', $options)
                    ->commaSeparated()
                    ->extract('status')
                    ->serializeBy([ProformaInvoiceStatus::class, 'checkValue']),
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
                QueryParam::init('custom_fields', $options)->commaSeparated()->extract('customFields', false)
            );

        $_resHandler = $this->responseHandler()->type(ListProformaInvoicesResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint will void a proforma invoice that has the status "draft".
     *
     * ## Restrictions
     *
     * Proforma invoices are only available on Relationship Invoicing sites.
     *
     * Only proforma invoices that have the appropriate status may be reopened. If the invoice identified
     * by {uid} does not have the appropriate status, the response will have HTTP status code 422 and an
     * error message.
     *
     * A reason for the void operation is required to be included in the request body. If one is not
     * provided, the response will have HTTP status code 422 and an error message.
     *
     * @param string $proformaInvoiceUid The uid of the proforma invoice
     * @param VoidInvoiceRequest|null $body
     *
     * @return ProformaInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function voidProformaInvoice(string $proformaInvoiceUid, ?VoidInvoiceRequest $body = null): ProformaInvoice
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/proforma_invoices/{proforma_invoice_uid}/void.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('proforma_invoice_uid', $proformaInvoiceUid)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ProformaInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Return a preview of the data that will be included on a given subscription's proforma invoice if one
     * were to be generated. It will have similar line items and totals as a renewal preview, but the
     * response will be presented in the format of a proforma invoice. Consequently it will include
     * additional information such as the name and addresses that will appear on the proforma invoice.
     *
     * The preview endpoint is subject to all the same conditions as the proforma invoice endpoint. For
     * example, previews are only available on the Relationship Invoicing architecture, and previews cannot
     * be made for end-of-life subscriptions.
     *
     * If all the data returned in the preview is as expected, you may then create a static proforma
     * invoice and send it to your customer. The data within a preview will not be saved and will not be
     * accessible after the call is made.
     *
     * Alternatively, if you have some proforma invoices already, you may make a preview call to determine
     * whether any billing information for the subscription's upcoming renewal has changed.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     *
     * @return ProformaInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function previewProformaInvoice(int $subscriptionId): ProformaInvoice
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/proforma_invoices/preview.json'
        )->auth('BasicAuth')->parameters(TemplateParam::init('subscription_id', $subscriptionId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ProformaInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint is only available for Relationship Invoicing sites. It cannot be used to create
     * consolidated proforma invoices or preview prepaid subscriptions.
     *
     * Create a proforma invoice to preview costs before a subscription's signup. Like other proforma
     * invoices, it can be emailed to the customer, voided, and publicly viewed on the chargifypay domain.
     *
     * Pass a payload that resembles a subscription create or signup preview request. For example, you can
     * specify components, coupons/a referral, offers, custom pricing, and an existing customer or payment
     * profile to populate a shipping or billing address.
     *
     * A product and customer first name, last name, and email are the minimum requirements. We recommend
     * associating the proforma invoice with a customer_id to easily find their proforma invoices, since
     * the subscription_id will always be blank.
     *
     * @param CreateSubscriptionRequest|null $body
     *
     * @return ProformaInvoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSignupProformaInvoice(?CreateSubscriptionRequest $body = null): ProformaInvoice
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/proforma_invoices.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ProformaBadRequestErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorArrayMapResponseException::class
                )
            )
            ->type(ProformaInvoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint is only available for Relationship Invoicing sites. It cannot be used to create
     * consolidated proforma invoice previews or preview prepaid subscriptions.
     *
     * Create a signup preview in the format of a proforma invoice to preview costs before a subscription's
     * signup. You have the option of optionally previewing the first renewal's costs as well. The proforma
     * invoice preview will not be persisted.
     *
     * Pass a payload that resembles a subscription create or signup preview request. For example, you can
     * specify components, coupons/a referral, offers, custom pricing, and an existing customer or payment
     * profile to populate a shipping or billing address.
     *
     * A product and customer first name, last name, and email are the minimum requirements.
     *
     * @param string|null $mInclude Choose to include a proforma invoice preview for the first
     *        renewal. Use in query `include=next_proforma_invoice`.
     * @param CreateSubscriptionRequest|null $body
     *
     * @return SignupProformaPreviewResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function previewSignupProformaInvoice(
        ?string $mInclude = null,
        ?CreateSubscriptionRequest $body = null
    ): SignupProformaPreviewResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/proforma_invoices/preview.json')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                QueryParam::init('include', $mInclude)
                    ->commaSeparated()
                    ->serializeBy([CreateSignupProformaPreviewInclude::class, 'checkValue']),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ProformaBadRequestErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorArrayMapResponseException::class
                )
            )
            ->type(SignupProformaPreviewResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
