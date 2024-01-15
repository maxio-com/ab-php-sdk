<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\SingleErrorResponseException;
use AdvancedBillingLib\Models\BatchJobResponse;
use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\ProformaInvoice;
use AdvancedBillingLib\Models\Subscription;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class APIExportsController extends BaseController
{
    /**
     * This API returns an array of exported proforma invoices for a provided `batch_id`. Pay close
     * attention to pagination in order to control responses from the server.
     *
     * Example: `GET https://{subdomain}.chargify.com/api_exports/proforma_invoices/123/rows?
     * per_page=10000&page=1`.
     *
     * @param array $options Array with all options for search
     *
     * @return ProformaInvoice[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listExportedProformaInvoices(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/api_exports/proforma_invoices/{batch_id}/rows.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('batch_id', $options)->extract('batchId')->required(),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 100),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(ProformaInvoice::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API returns an array of exported invoices for a provided `batch_id`. Pay close attention to
     * pagination in order to control responses from the server.
     *
     * Example: `GET https://{subdomain}.chargify.com/api_exports/invoices/123/rows?per_page=10000&page=1`.
     *
     * @param array $options Array with all options for search
     *
     * @return Invoice[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listExportedInvoices(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/api_exports/invoices/{batch_id}/rows.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('batch_id', $options)->extract('batchId')->required(),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 100),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(Invoice::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API returns an array of exported subscriptions for a provided `batch_id`. Pay close attention
     * to pagination in order to control responses from the server.
     *
     * Example: `GET https://{subdomain}.chargify.com/api_exports/subscriptions/123/rows?
     * per_page=200&page=1`.
     *
     * @param array $options Array with all options for search
     *
     * @return Subscription[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listExportedSubscriptions(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/api_exports/subscriptions/{batch_id}/rows.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('batch_id', $options)->extract('batchId')->required(),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 100),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(Subscription::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API creates a proforma invoices export and returns a batchjob object.
     *
     * It is only available for Relationship Invoicing architecture.
     *
     * @return BatchJobResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function exportProformaInvoices(): BatchJobResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/api_exports/proforma_invoices.json')
            ->auth('global');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '409',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SingleErrorResponseException::class
                )
            )
            ->type(BatchJobResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API creates an invoices export and returns a batchjob object.
     *
     * @return BatchJobResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function exportInvoices(): BatchJobResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/api_exports/invoices.json')->auth('global');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '409',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SingleErrorResponseException::class
                )
            )
            ->type(BatchJobResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API creates a subscriptions export and returns a batchjob object.
     *
     * @return BatchJobResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function exportSubscriptions(): BatchJobResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/api_exports/subscriptions.json')->auth('global');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '409',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SingleErrorResponseException::class
                )
            )
            ->type(BatchJobResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API returns a batchjob object for proforma invoices export.
     *
     * @param string $batchId Id of a Batch Job.
     *
     * @return BatchJobResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readProformaInvoicesExport(string $batchId): BatchJobResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/api_exports/proforma_invoices/{batch_id}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('batch_id', $batchId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(BatchJobResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API returns a batchjob object for invoices export.
     *
     * @param string $batchId Id of a Batch Job.
     *
     * @return BatchJobResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readInvoicesExport(string $batchId): BatchJobResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/api_exports/invoices/{batch_id}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('batch_id', $batchId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(BatchJobResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API returns a batchjob object for subscriptions export.
     *
     * @param string $batchId Id of a Batch Job.
     *
     * @return BatchJobResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readSubscriptionsExport(string $batchId): BatchJobResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/api_exports/subscriptions/{batch_id}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('batch_id', $batchId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(BatchJobResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
