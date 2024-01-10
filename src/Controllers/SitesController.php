<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\CleanupScope;
use AdvancedBillingLib\Models\ListPublicKeysResponse;
use AdvancedBillingLib\Models\SiteResponse;
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class SitesController extends BaseController
{
    /**
     * This endpoint allows you to fetch some site data.
     *
     * Full documentation on Sites in the Chargify UI can be located [here](https://chargify.zendesk.
     * com/hc/en-us/articles/4407870738587).
     *
     * Specifically, the [Clearing Site Data](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5405428327309) section is extremely relevant to this endpoint documentation.
     *
     * #### Relationship invoicing enabled
     * If site has RI enabled then you will see more settings like:
     *
     * "customer_hierarchy_enabled": true,
     * "whopays_enabled": true,
     * "whopays_default_payer": "self"
     * You can read more about these settings here:
     * [Who Pays & Customer Hierarchy](https://chargify.zendesk.com/hc/en-us/articles/4407746683291)
     *
     * @return SiteResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readSite(): SiteResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/site.json')->auth('BasicAuth');

        $_resHandler = $this->responseHandler()->type(SiteResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This call is asynchronous and there may be a delay before the site data is fully deleted. If you are
     * clearing site data for an automated test, you will need to build in a delay and/or check that there
     * are no products, etc., in the site before proceeding.
     *
     * **This functionality will only work on sites in TEST mode. Attempts to perform this on sites in
     * “live” mode will result in a response of 403 FORBIDDEN.**
     *
     *
     * @param string|null $cleanupScope `all`: Will clear all products, customers, and related
     *        subscriptions from the site.
     *        `customers`: Will clear only customers and related subscriptions (leaving the
     *        products untouched) for the site.
     *        Revenue will also be reset to 0.
     *        Use in query `cleanup_scope=all`.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function clearSite(?string $cleanupScope = CleanupScope::ALL): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/sites/clear_data.json')
            ->auth('BasicAuth')
            ->parameters(QueryParam::init('cleanup_scope', $cleanupScope)
                ->commaSeparated()
                ->serializeBy([CleanupScope::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->throwErrorOn('403', ErrorType::init('Forbidden'));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint returns public keys used for Chargify.js.
     *
     * @param array $options Array with all options for search
     *
     * @return ListPublicKeysResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listChargifyJsPublicKeys(array $options): ListPublicKeysResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/chargify_js_keys.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20)
            );

        $_resHandler = $this->responseHandler()->type(ListPublicKeysResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
