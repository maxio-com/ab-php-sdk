<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\SubscriptionsMrrErrorResponseException;
use AdvancedBillingLib\Models\Direction;
use AdvancedBillingLib\Models\ListMRRResponse;
use AdvancedBillingLib\Models\MRRResponse;
use AdvancedBillingLib\Models\SiteSummary;
use AdvancedBillingLib\Models\SortingDirection;
use AdvancedBillingLib\Models\SubscriptionMRRResponse;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class InsightsController extends BaseController
{
    /**
     * The Stats API is a very basic view of some Site-level stats. This API call only answers with JSON
     * responses. An XML version is not provided.
     *
     * ## Stats Documentation
     *
     * There currently is not a complimentary matching set of documentation that compliments this endpoint.
     * However, each Site's dashboard will reflect the summary of information provided in the Stats
     * reposnse.
     *
     * ```
     * https://subdomain.chargify.com/dashboard
     * ```
     *
     * @return SiteSummary Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readSiteStats(): SiteSummary
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stats.json')->auth('global');

        $_resHandler = $this->responseHandler()->type(SiteSummary::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint returns your site's current MRR, including plan and usage breakouts.
     *
     * @deprecated
     *
     * @param \DateTime|null $atTime submit a timestamp in ISO8601 format to request MRR for a
     *        historic time
     * @param int|null $subscriptionId submit the id of a subscription in order to limit results
     *
     * @return MRRResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readMrr(?\DateTime $atTime = null, ?int $subscriptionId = null): MRRResponse
    {
        trigger_error('Method ' . __METHOD__ . ' is deprecated.', E_USER_DEPRECATED);

        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/mrr.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('at_time', $atTime)
                    ->commaSeparated()
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('subscription_id', $subscriptionId)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()->type(MRRResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint returns your site's MRR movements.
     *
     * ## Understanding MRR movements
     *
     * This endpoint will aid in accessing your site's [MRR Report](https://chargify.zendesk.com/hc/en-
     * us/articles/4407838249627) data.
     *
     * Whenever a subscription event occurs that causes your site's MRR to change (such as a signup or
     * upgrade), we record an MRR movement. These records are accessible via the MRR Movements endpoint.
     *
     * Each MRR Movement belongs to a subscription and contains a timestamp, category, and an amount.
     * `line_items` represent the subscription's product configuration at the time of the movement.
     *
     * ### Plan & Usage Breakouts
     *
     * In the MRR Report UI, we support a setting to [include or exclude](https://chargify.zendesk.
     * com/hc/en-us/articles/4407838249627#displaying-component-based-metered-usage-in-mrr) usage revenue.
     * In the MRR APIs, responses include `plan` and `usage` breakouts.
     *
     * Plan includes revenue from:
     * * Products
     * * Quantity-Based Components
     * * On/Off Components
     *
     * Usage includes revenue from:
     * * Metered Components
     * * Prepaid Usage Components
     *
     * @deprecated
     *
     * @param array $options Array with all options for search
     *
     * @return ListMRRResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readMrrMovements(array $options): ListMRRResponse
    {
        trigger_error('Method ' . __METHOD__ . ' is deprecated.', E_USER_DEPRECATED);

        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/mrr_movements.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('subscription_id', $options)->commaSeparated()->extract('subscriptionId'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 10),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction')
                    ->serializeBy([SortingDirection::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(ListMRRResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint returns your site's current MRR, including plan and usage breakouts split per
     * subscription.
     *
     * @deprecated
     *
     * @param array $options Array with all options for search
     *
     * @return SubscriptionMRRResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listMrrPerSubscription(array $options): SubscriptionMRRResponse
    {
        trigger_error('Method ' . __METHOD__ . ' is deprecated.', E_USER_DEPRECATED);

        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions_mrr.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('filter[subscription_ids]', $options)
                    ->commaSeparated()
                    ->extract('filterSubscriptionIds'),
                QueryParam::init('at_time', $options)->commaSeparated()->extract('atTime'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction')
                    ->serializeBy([Direction::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SubscriptionsMrrErrorResponseException::class
                )
            )
            ->type(SubscriptionMRRResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
