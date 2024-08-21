<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\ListSaleRepItem;
use AdvancedBillingLib\Models\SaleRep;
use AdvancedBillingLib\Models\SaleRepSettings;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;

class SalesCommissionsController extends BaseController
{
    /**
     * Endpoint returns subscriptions with associated sales reps
     *
     * ## Modified Authentication Process
     *
     * The Sales Commission API differs from other Chargify API endpoints. This resource is associated with
     * the seller itself. Up to now all available resources were at the level of the site, therefore
     * creating the API Key per site was a sufficient solution. To share resources at the seller level, a
     * new authentication method was introduced, which is user authentication. Creating an API Key for a
     * user is a required step to correctly use the Sales Commission API, more details [here](https:
     * //developers.chargify.com/docs/developer-docs/ZG9jOjMyNzk5NTg0-2020-04-20-new-api-authentication).
     *
     * Access to the Sales Commission API endpoints is available to users with financial access, where the
     * seller has the Advanced Analytics component enabled. For further information on getting access to
     * Advanced Analytics please contact Maxio support.
     *
     * > Note: The request is at seller level, it means `<<subdomain>>` variable will be replaced by `app`
     *
     * @param array $options Array with all options for search
     *
     * @return SaleRepSettings[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSalesCommissionSettings(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/sellers/{seller_id}/sales_commission_settings.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('seller_id', $options)->extract('sellerId')->required(),
                HeaderParam::init('Authorization', $options)->extract('authorization', 'Bearer <<apiKey>>'),
                QueryParam::init('live_mode', $options)->commaSeparated()->extract('liveMode'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 100)
            );

        $_resHandler = $this->responseHandler()->type(SaleRepSettings::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Endpoint returns sales rep list with details
     *
     * ## Modified Authentication Process
     *
     * The Sales Commission API differs from other Chargify API endpoints. This resource is associated with
     * the seller itself. Up to now all available resources were at the level of the site, therefore
     * creating the API Key per site was a sufficient solution. To share resources at the seller level, a
     * new authentication method was introduced, which is user authentication. Creating an API Key for a
     * user is a required step to correctly use the Sales Commission API, more details [here](https:
     * //developers.chargify.com/docs/developer-docs/ZG9jOjMyNzk5NTg0-2020-04-20-new-api-authentication).
     *
     * Access to the Sales Commission API endpoints is available to users with financial access, where the
     * seller has the Advanced Analytics component enabled. For further information on getting access to
     * Advanced Analytics please contact Maxio support.
     *
     * > Note: The request is at seller level, it means `<<subdomain>>` variable will be replaced by `app`
     *
     * @param array $options Array with all options for search
     *
     * @return ListSaleRepItem[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSalesReps(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/sellers/{seller_id}/sales_reps.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('seller_id', $options)->extract('sellerId')->required(),
                HeaderParam::init('Authorization', $options)->extract('authorization', 'Bearer <<apiKey>>'),
                QueryParam::init('live_mode', $options)->commaSeparated()->extract('liveMode'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 100)
            );

        $_resHandler = $this->responseHandler()->type(ListSaleRepItem::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Endpoint returns sales rep and attached subscriptions details.
     *
     * ## Modified Authentication Process
     *
     * The Sales Commission API differs from other Chargify API endpoints. This resource is associated with
     * the seller itself. Up to now all available resources were at the level of the site, therefore
     * creating the API Key per site was a sufficient solution. To share resources at the seller level, a
     * new authentication method was introduced, which is user authentication. Creating an API Key for a
     * user is a required step to correctly use the Sales Commission API, more details [here](https:
     * //developers.chargify.com/docs/developer-docs/ZG9jOjMyNzk5NTg0-2020-04-20-new-api-authentication).
     *
     * Access to the Sales Commission API endpoints is available to users with financial access, where the
     * seller has the Advanced Analytics component enabled. For further information on getting access to
     * Advanced Analytics please contact Maxio support.
     *
     * > Note: The request is at seller level, it means `<<subdomain>>` variable will be replaced by `app`
     *
     * @param string $sellerId The Chargify id of your seller account
     * @param string $salesRepId The Advanced Billing id of sales rep.
     * @param string|null $authorization For authorization use user API key. See details
     *        [here](https://developers.chargify.com/docs/developer-docs/ZG9jOjMyNzk5NTg0-2020-04-
     *        20-new-api-authentication).
     * @param bool|null $liveMode This parameter indicates if records should be fetched from live
     *        mode sites. Default value is true.
     * @param int|null $page Result records are organized in pages. By default, the first page of
     *        results is displayed. The page parameter specifies a page number of results to fetch.
     *        You can start navigating through the pages to consume the results. You do this by
     *        passing in a page parameter. Retrieve the next page by adding ?page=2 to the query
     *        string. If there are no results to return, then an empty result set will be returned.
     *        Use in query `page=1`.
     * @param int|null $perPage This parameter indicates how many records to fetch in each request.
     *        Default value is 100.
     *
     * @return SaleRep Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readSalesRep(
        string $sellerId,
        string $salesRepId,
        ?string $authorization = 'Bearer <<apiKey>>',
        ?bool $liveMode = null,
        ?int $page = 1,
        ?int $perPage = 100
    ): SaleRep {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/sellers/{seller_id}/sales_reps/{sales_rep_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('seller_id', $sellerId)->required(),
                TemplateParam::init('sales_rep_id', $salesRepId)->required(),
                HeaderParam::init('Authorization', $authorization),
                QueryParam::init('live_mode', $liveMode)->commaSeparated(),
                QueryParam::init('page', $page)->commaSeparated(),
                QueryParam::init('per_page', $perPage)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()->type(SaleRep::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
