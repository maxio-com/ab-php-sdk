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
use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\IssueAdvanceInvoiceRequest;
use AdvancedBillingLib\Models\VoidInvoiceRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class AdvanceInvoiceController extends BaseController
{
    /**
     * Generate an invoice in advance for a subscription's next renewal date. [Please see our docs](https:
     * //maxio-chargify.zendesk.com/hc/en-us/articles/5404811062541-Issue-Invoice-In-Advance  ) for more
     * information on advance invoices, including eligibility on generating one; for the most part, they
     * function like any other invoice, except they are issued early and have special behavior upon being
     * voided.
     * A subscription may only have one advance invoice per billing period. Attempting to issue an advance
     * invoice when one already exists will return an error.
     * That said, regeneration of the invoice may be forced with the params `force: true`, which will void
     * an advance invoice if one exists and generate a new one. If no advance invoice exists, a new one
     * will be generated.
     * We recommend using either the create or preview endpoints for proforma invoices to preview this
     * advance invoice before using this endpoint to generate it.
     *
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param IssueAdvanceInvoiceRequest|null $body
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function issueAdvanceInvoice(int $subscriptionId, ?IssueAdvanceInvoiceRequest $body = null): Invoice
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/advance_invoice/issue.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
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
            ->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Once an advance invoice has been generated for a subscription's upcoming renewal, it can be viewed
     * through this endpoint. There can only be one advance invoice per subscription per billing cycle.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readAdvanceInvoice(int $subscriptionId): Invoice
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/advance_invoice.json'
        )->auth('BasicAuth')->parameters(TemplateParam::init('subscription_id', $subscriptionId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Void a subscription's existing advance invoice. Once voided, it can later be regenerated if desired.
     * A `reason` is required in order to void, and the invoice must have an open status. Voiding will
     * cause any prepayments and credits that were applied to the invoice to be returned to the
     * subscription. For a full overview of the impact of voiding, please [see our help docs]($m/Invoice).
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param VoidInvoiceRequest|null $body
     *
     * @return Invoice Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function voidAdvanceInvoice(int $subscriptionId, ?VoidInvoiceRequest $body = null): Invoice
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/advance_invoice/void.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(Invoice::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
