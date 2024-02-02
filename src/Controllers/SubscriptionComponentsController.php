<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ComponentAllocationErrorException;
use AdvancedBillingLib\Exceptions\ComponentPricePointErrorException;
use AdvancedBillingLib\Exceptions\ErrorListResponseException;
use AdvancedBillingLib\Exceptions\SubscriptionComponentAllocationErrorException;
use AdvancedBillingLib\Models\AllocateComponents;
use AdvancedBillingLib\Models\AllocationPreviewResponse;
use AdvancedBillingLib\Models\AllocationResponse;
use AdvancedBillingLib\Models\BulkComponentSPricePointAssignment;
use AdvancedBillingLib\Models\CreateAllocationRequest;
use AdvancedBillingLib\Models\CreateUsageRequest;
use AdvancedBillingLib\Models\CreditSchemeRequest;
use AdvancedBillingLib\Models\EBBEvent;
use AdvancedBillingLib\Models\IncludeNotNull;
use AdvancedBillingLib\Models\ListSubscriptionComponentsInclude;
use AdvancedBillingLib\Models\ListSubscriptionComponentsResponse;
use AdvancedBillingLib\Models\ListSubscriptionComponentsSort;
use AdvancedBillingLib\Models\PreviewAllocationsRequest;
use AdvancedBillingLib\Models\SortingDirection;
use AdvancedBillingLib\Models\SubscriptionComponentResponse;
use AdvancedBillingLib\Models\SubscriptionListDateField;
use AdvancedBillingLib\Models\SubscriptionResponse;
use AdvancedBillingLib\Models\SubscriptionStateFilter;
use AdvancedBillingLib\Models\UpdateAllocationExpirationDate;
use AdvancedBillingLib\Models\UsageResponse;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class SubscriptionComponentsController extends BaseController
{
    /**
     * This request will list information regarding a specific component owned by a subscription.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $componentId The Chargify id of the component. Alternatively, the component's
     *        handle prefixed by `handle:`
     *
     * @return SubscriptionComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readSubscriptionComponent(int $subscriptionId, int $componentId): SubscriptionComponentResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/components/{component_id}.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('component_id', $componentId)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(SubscriptionComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will list a subscription's applied components.
     *
     * ## Archived Components
     *
     * When requesting to list components for a given subscription, if the subscription contains
     * **archived** components they will be listed in the server response.
     *
     * @param array $options Array with all options for search
     *
     * @return SubscriptionComponentResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSubscriptionComponents(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/components.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $options)->extract('subscriptionId')->required(),
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField')
                    ->serializeBy([SubscriptionListDateField::class, 'checkValue']),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction')
                    ->serializeBy([SortingDirection::class, 'checkValue']),
                QueryParam::init('end_date', $options)->commaSeparated()->extract('endDate'),
                QueryParam::init('end_datetime', $options)->commaSeparated()->extract('endDatetime'),
                QueryParam::init('price_point_ids', $options)
                    ->commaSeparated()
                    ->extract('pricePointIds')
                    ->serializeBy([IncludeNotNull::class, 'checkValue']),
                QueryParam::init('product_family_ids', $options)->commaSeparated()->extract('productFamilyIds'),
                QueryParam::init('sort', $options)
                    ->commaSeparated()
                    ->extract('sort')
                    ->serializeBy([ListSubscriptionComponentsSort::class, 'checkValue']),
                QueryParam::init('start_date', $options)->commaSeparated()->extract('startDate'),
                QueryParam::init('start_datetime', $options)->commaSeparated()->extract('startDatetime'),
                QueryParam::init('include', $options)
                    ->commaSeparated()
                    ->extract('mInclude')
                    ->serializeBy([ListSubscriptionComponentsInclude::class, 'checkValue']),
                QueryParam::init('filter[use_site_exchange_rate]', $options)
                    ->commaSeparated()
                    ->extract('filterUseSiteExchangeRate'),
                QueryParam::init('filter[currencies]', $options)->commaSeparated()->extract('filterCurrencies')
            );

        $_resHandler = $this->responseHandler()->type(SubscriptionComponentResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the price points on one or more of a subscription's components.
     *
     * The `price_point` key can take either a:
     * 1. Price point id (integer)
     * 2. Price point handle (string)
     * 3. `"_default"` string, which will reset the price point to the component's current default price
     * point.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param BulkComponentSPricePointAssignment|null $body
     *
     * @return BulkComponentSPricePointAssignment Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function bulkUpdateSubscriptionComponentsPricePoints(
        int $subscriptionId,
        ?BulkComponentSPricePointAssignment $body = null
    ): BulkComponentSPricePointAssignment {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/price_points.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ComponentPricePointErrorException::class
                )
            )
            ->type(BulkComponentSPricePointAssignment::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Resets all of a subscription's components to use the current default.
     *
     * **Note**: this will update the price point for all of the subscription's components, even ones that
     * have not been allocated yet.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     *
     * @return SubscriptionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function bulkResetSubscriptionComponentsPricePoints(int $subscriptionId): SubscriptionResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/price_points/reset.json'
        )->auth('global')->parameters(TemplateParam::init('subscription_id', $subscriptionId)->required());

        $_resHandler = $this->responseHandler()->type(SubscriptionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint creates a new allocation, setting the current allocated quantity for the Component and
     * recording a memo.
     *
     * **Notice**: Allocations can only be updated for Quantity, On/Off, and Prepaid Components.
     *
     * ## Allocations Documentation
     *
     * Full documentation on how to record Allocations in the Chargify UI can be located [here](https:
     * //maxio-chargify.zendesk.com/hc/en-us/articles/5404527849997). It is focused on how allocations
     * operate within the Chargify UI.It goes into greater detail on how the user interface will react when
     * recording allocations.
     *
     * This documentation also goes into greater detail on how proration is taken into consideration when
     * applying component allocations.
     *
     * ## Proration Schemes
     *
     * Changing the allocated quantity of a component mid-period can result in either a Charge or Credit
     * being applied to the subscription. When creating an allocation via the API, you can pass the
     * `upgrade_charge`, `downgrade_credit`, and `accrue_charge` to be applied.
     *
     * **Notice:** These proration and accural fields will be ignored for Prepaid Components since this
     * component type always generate charges immediately without proration.
     *
     * For background information on prorated components and upgrade/downgrade schemes, see [Setting
     * Component Allocations.](https://maxio-chargify.zendesk.com/hc/en-us/articles/5404527849997#proration-
     * upgrades-vs-downgrades).
     * See the tables below for valid values.
     *
     * | upgrade_charge | Definition                                                        |
     * |----------------|-------------------------------------------------------------------|
     * | `full`         | A charge is added for the full price of the component.            |
     * | `prorated`     | A charge is added for the prorated price of the component change. |
     * | `none`         | No charge is added.                                               |
     *
     * | downgrade_credit | Definition                                        |
     * |------------------|---------------------------------------------------|
     * | `full`           | A full price credit is added for the amount owed. |
     * | `prorated`       | A prorated credit is added for the amount owed.   |
     * | `none`           | No charge is added.                               |
     *
     * | accrue_charge | Definition
     *                         |
     * |---------------|------------------------------------------------------------------------------------
     * ------------------------|
     * | `true`        | Attempt to charge the customer at next renewal.
     * |
     * | `false`       | Attempt to charge the customer right away. If it fails, the charge will be accrued
     * until the next renewal. |
     *
     * ### Order of Resolution for upgrade_charge and downgrade_credit
     *
     * 1. Per allocation in API call (within a single allocation of the `allocations` array)
     * 2. [Component-level default value](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5404527849997-Component-Allocations#component-allocations-0-0)
     * 3. Allocation API call top level (outside of the `allocations` array)
     * 4. [Site-level default value](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5404527849997#proration-schemes)
     *
     * ### Order of Resolution for accrue charge
     *
     * 1. Allocation API call top level (outside of the `allocations` array)
     * 2. [Site-level default value](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5404527849997#proration-schemes)
     *
     * **NOTE: Proration uses the current price of the component as well as the current tax rates. Changes
     * to either may cause the prorated charge/credit to be wrong.**
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $componentId The Chargify id of the component
     * @param CreateAllocationRequest|null $body
     *
     * @return AllocationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function allocateComponent(
        int $subscriptionId,
        int $componentId,
        ?CreateAllocationRequest $body = null
    ): AllocationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/components/{component_id}/allocations.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('component_id', $componentId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(AllocationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint returns the 50 most recent Allocations, ordered by most recent first.
     *
     * ## On/Off Components
     *
     * When a subscription's on/off component has been toggled to on (`1`) or off (`0`), usage will be
     * logged in this response.
     *
     * ## Querying data via Chargify gem
     *
     * You can also query the current quantity via the [official Chargify Gem.](http://github.
     * com/chargify/chargify_api_ares)
     *
     * ```# First way
     * component = Chargify::Subscription::Component.find(1, :params => {:subscription_id => 7})
     * puts component.allocated_quantity
     * # => 23
     *
     * # Second way
     * component = Chargify::Subscription.find(7).component(1)
     * puts component.allocated_quantity
     * # => 23
     * ```
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $componentId The Chargify id of the component
     * @param int|null $page Result records are organized in pages. By default, the first page of
     *        results is displayed. The page parameter specifies a page number of results to fetch.
     *        You can start navigating through the pages to consume the results. You do this by
     *        passing in a page parameter. Retrieve the next page by adding ?page=2 to the query
     *        string. If there are no results to return, then an empty result set will be returned.
     *        Use in query `page=1`.
     *
     * @return AllocationResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllocations(int $subscriptionId, int $componentId, ?int $page = 1): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/components/{component_id}/allocations.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('component_id', $componentId)->required(),
                QueryParam::init('page', $page)->commaSeparated()
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
            ->type(AllocationResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates multiple allocations, setting the current allocated quantity for each of the components and
     * recording a memo. The charges and/or credits that are created will be rolled up into a single total
     * which is used to determine whether this is an upgrade or a downgrade. Be aware of the Order of
     * Resolutions explained below in determining the proration scheme.
     *
     * A `component_id` is required for each allocation.
     *
     * This endpoint only responds to JSON. It is not available for XML.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param AllocateComponents|null $body
     *
     * @return AllocationResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function allocateComponents(int $subscriptionId, ?AllocateComponents $body = null): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/allocations.json'
        )
            ->auth('global')
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
            ->type(AllocationResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Chargify offers the ability to preview a potential subscription's **quantity-based** or **on/off**
     * component allocation in the middle of the current billing period.  This is useful if you want users
     * to be able to see the effect of a component operation before actually doing it.
     *
     * ## Fine-grained Component Control: Use with multiple `upgrade_charge`s or `downgrade_credits`
     *
     * When the allocation uses multiple different types of `upgrade_charge`s or `downgrade_credit`s, the
     * Allocation is viewed as an Allocation which uses "Fine-Grained Component Control". As a result, the
     * response will not include `direction` and `proration` within the `allocation_preview`, but at the
     * `line_items` and `allocations` level respectfully.
     *
     * See example below for Fine-Grained Component Control response.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param PreviewAllocationsRequest|null $body
     *
     * @return AllocationPreviewResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function previewAllocations(
        int $subscriptionId,
        ?PreviewAllocationsRequest $body = null
    ): AllocationPreviewResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/allocations/preview.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ComponentAllocationErrorException::class
                )
            )
            ->type(AllocationPreviewResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * When the expiration interval options are selected on a prepaid usage component price point, all
     * allocations will be created with an expiration date. This expiration date can be changed after the
     * fact to allow for extending or shortening the allocation's active window.
     *
     * In order to change a prepaid usage allocation's expiration date, a PUT call must be made to the
     * allocation's endpoint with a new expiration date.
     *
     * ## Limitations
     *
     * A few limitations exist when changing an allocation's expiration date:
     *
     * - An expiration date can only be changed for an allocation that belongs to a price point with
     * expiration interval options explicitly set.
     * - An expiration date can be changed towards the future with no limitations.
     * - An expiration date can be changed towards the past (essentially expiring it) up to the
     * subscription's current period beginning date.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $componentId The Chargify id of the component
     * @param int $allocationId The Chargify id of the allocation
     * @param UpdateAllocationExpirationDate|null $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePrepaidUsageAllocationExpirationDate(
        int $subscriptionId,
        int $componentId,
        int $allocationId,
        ?UpdateAllocationExpirationDate $body = null
    ): void {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/subscriptions/{subscription_id}/components/{component_id}/allocations/{allocation_id}.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('allocation_id', $allocationId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SubscriptionComponentAllocationErrorException::class
                )
            );

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Prepaid Usage components are unique in that their allocations are always additive. In order to
     * reduce a subscription's allocated quantity for a prepaid usage component each allocation must be
     * destroyed individually via this endpoint.
     *
     * ## Credit Scheme
     *
     * By default, destroying an allocation will generate a service credit on the subscription. This
     * behavior can be modified with the optional `credit_scheme` parameter on this endpoint. The accepted
     * values are:
     *
     * 1. `none`: The allocation will be destroyed and the balances will be updated but no service credit
     * or refund will be created.
     * 2. `credit`: The allocation will be destroyed and the balances will be updated and a service credit
     * will be generated. This is also the default behavior if the `credit_scheme` param is not passed.
     * 3. `refund`: The allocation will be destroyed and the balances will be updated and a refund will be
     * issued along with a Credit Note.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $componentId The Chargify id of the component
     * @param int $allocationId The Chargify id of the allocation
     * @param CreditSchemeRequest|null $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deletePrepaidUsageAllocation(
        int $subscriptionId,
        int $componentId,
        int $allocationId,
        ?CreditSchemeRequest $body = null
    ): void {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/subscriptions/{subscription_id}/components/{component_id}/allocations/{allocation_id}.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('allocation_id', $allocationId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SubscriptionComponentAllocationErrorException::class
                )
            );

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * ## Documentation
     *
     * Full documentation on how to create Components in the Chargify UI can be located [here](https:
     * //maxio-chargify.zendesk.com/hc/en-us/articles/5405020625677#creating-components). Additionally, for
     * information on how to record component usage against a subscription, please see the following
     * resources:
     *
     * + [Recording Metered Component Usage](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5404527849997#reporting-metered-component-usage)
     * + [Reporting Prepaid Component Status](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5404527849997#reporting-prepaid-component-status)
     *
     * You may choose to report metered or prepaid usage to Chargify as often as you wish. You may report
     * usage as it happens. You may also report usage periodically, such as each night or once per billing
     * period. If usage events occur in your system very frequently (on the order of thousands of times an
     * hour), it is best to accumulate usage into batches on your side, and then report those batches less
     * frequently, such as daily. This will ensure you remain below any API throttling limits. If your use
     * case requires higher rates of usage reporting, we recommend utilizing Events Based Components.
     *
     * ## Create Usage for Subscription
     *
     * This endpoint allows you to record an instance of metered or prepaid usage for a subscription. The
     * `quantity` from usage for each component is accumulated to the `unit_balance` on the [Component Line
     * Item](./b3A6MTQxMDgzNzQ-read-subscription-component) for the subscription.
     *
     * ## Price Point ID usage
     *
     * If you are using price points, for metered and prepaid usage components, Chargify gives you the
     * option to specify a price point in your request.
     *
     * You do not need to specify a price point ID. If a price point is not included, the default price
     * point for the component will be used when the usage is recorded.
     *
     * If an invalid `price_point_id` is submitted, the endpoint will return an error.
     *
     * ## Deducting Usage
     *
     * In the event that you need to reverse a previous usage report or otherwise deduct from the current
     * usage balance, you may provide a negative quantity.
     *
     * Example:
     *
     * Previously recorded:
     *
     * ```json
     * {
     * "usage": {
     * "quantity": 5000,
     * "memo": "Recording 5000 units"
     * }
     * }
     * ```
     *
     * At this point, `unit_balance` would be `5000`. To reduce the balance to `0`, POST the following
     * payload:
     *
     * ```json
     * {
     * "usage": {
     * "quantity": -5000,
     * "memo": "Deducting 5000 units"
     * }
     * }
     * ```
     *
     * The `unit_balance` has a floor of `0`; negative unit balances are never allowed. For example, if the
     * usage balance is 100 and you deduct 200 units, the unit balance would then be `0`, not `-100`.
     *
     * ## FAQ
     *
     * Q. Is it possible to record metered usage for more than one component at a time?
     *
     * A. No. Usage should be reported as one API call per component on a single subscription. For example,
     * to record that a subscriber has sent both an SMS Message and an Email, send an API call for each.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int|string $componentId Either the Chargify id for the component or the component's
     *        handle prefixed by `handle:`
     * @param CreateUsageRequest|null $body
     *
     * @return UsageResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createUsage(int $subscriptionId, $componentId, ?CreateUsageRequest $body = null): UsageResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/components/{component_id}/usages.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('component_id', $componentId)->required()->strictType('oneOf(int,string)'),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(UsageResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will return a list of the usages associated with a subscription for a particular
     * metered component. This will display the previously recorded components for a subscription.
     *
     * This endpoint is not compatible with quantity-based components.
     *
     * ## Since Date and Until Date Usage
     *
     * Note: The `since_date` and `until_date` attributes each default to midnight on the date specified.
     * For example, in order to list usages for January 20th, you would need to append the following to the
     * URL.
     *
     * ```
     * ?since_date=2016-01-20&until_date=2016-01-21
     * ```
     *
     * ## Read Usage by Handle
     *
     * Use this endpoint to read the previously recorded components for a subscription.  You can now
     * specify either the component id (integer) or the component handle prefixed by "handle:" to specify
     * the unique identifier for the component you are working with.
     *
     * @param array $options Array with all options for search
     *
     * @return UsageResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listUsages(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/components/{component_id}/usages.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $options)->extract('subscriptionId')->required(),
                TemplateParam::init('component_id', $options)
                    ->extract('componentId')
                    ->required()
                    ->strictType('oneOf(int,string)'),
                QueryParam::init('since_id', $options)->commaSeparated()->extract('sinceId'),
                QueryParam::init('max_id', $options)->commaSeparated()->extract('maxId'),
                QueryParam::init('since_date', $options)
                    ->commaSeparated()
                    ->extract('sinceDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('until_date', $options)
                    ->commaSeparated()
                    ->extract('untilDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20)
            );

        $_resHandler = $this->responseHandler()->type(UsageResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * In order to bill your subscribers on your Events data under the Events-Based Billing feature, the
     * components must be activated for the subscriber.
     *
     * Learn more about the role of activation in the [Events-Based Billing docs](https://chargify.zendesk.
     * com/hc/en-us/articles/4407720810907#activating-components-for-subscribers).
     *
     * Use this endpoint to activate an event-based component for a single subscription. Activating an
     * event-based component causes Chargify to bill for events when the subscription is renewed.
     *
     * *Note: it is possible to stream events for a subscription at any time, regardless of component
     * activation status. The activation status only determines if the subscription should be billed for
     * event-based component usage at renewal.*
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $componentId The Chargify id of the component
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function activateEventBasedComponent(int $subscriptionId, int $componentId): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/event_based_billing/subscriptions/{subscription_id}/components/{component_id}/activate.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('component_id', $componentId)->required()
            );

        $this->execute($_reqBuilder);
    }

    /**
     * Use this endpoint to deactivate an event-based component for a single subscription. Deactivating the
     * event-based component causes Chargify to ignore related events at subscription renewal.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $componentId The Chargify id of the component
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deactivateEventBasedComponent(int $subscriptionId, int $componentId): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/event_based_billing/subscriptions/{subscription_id}/components/{component_id}/deactivate.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('component_id', $componentId)->required()
            );

        $this->execute($_reqBuilder);
    }

    /**
     * ## Documentation
     *
     * Events-Based Billing is an evolved form of metered billing that is based on data-rich events
     * streamed in real-time from your system to Chargify.
     *
     * These events can then be transformed, enriched, or analyzed to form the computed totals of usage
     * charges billed to your customers.
     *
     * This API allows you to stream events into the Chargify data ingestion engine.
     *
     * Learn more about the feature in general in the [Events-Based Billing help docs](https://chargify.
     * zendesk.com/hc/en-us/articles/4407720613403).
     *
     * ## Record Event
     *
     * Use this endpoint to record a single event.
     *
     * *Note: this endpoint differs from the standard Chargify endpoints in that the URL subdomain will be
     * `events` and your site subdomain will be included in the URL path. For example:*
     *
     * ```
     * https://events.chargify.com/my-site-subdomain/events/my-stream-api-handle
     * ```
     *
     * @param string $subdomain Your site's subdomain
     * @param string $apiHandle Identifies the Stream for which the event should be published.
     * @param string|null $storeUid If you've attached your own Keen project as a Chargify event
     *        data-store, use this parameter to indicate the data-store.
     * @param EBBEvent|null $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function recordEvent(
        string $subdomain,
        string $apiHandle,
        ?string $storeUid = null,
        ?EBBEvent $body = null
    ): void {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/{subdomain}/events/{api_handle}.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('subdomain', $subdomain)->required(),
                TemplateParam::init('api_handle', $apiHandle)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                QueryParam::init('store_uid', $storeUid)->commaSeparated(),
                BodyParam::init($body)
            );

        $this->execute($_reqBuilder);
    }

    /**
     * Use this endpoint to record a collection of events.
     *
     * *Note: this endpoint differs from the standard Chargify endpoints in that the subdomain will be
     * `events` and your site subdomain will be included in the URL path.*
     *
     * A maximum of 1000 events can be published in a single request. A 422 will be returned if this limit
     * is exceeded.
     *
     * @param string $subdomain Your site's subdomain
     * @param string $apiHandle Identifies the Stream for which the events should be published.
     * @param string|null $storeUid If you've attached your own Keen project as a Chargify event
     *        data-store, use this parameter to indicate the data-store.
     * @param EBBEvent[]|null $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function bulkRecordEvents(
        string $subdomain,
        string $apiHandle,
        ?string $storeUid = null,
        ?array $body = null
    ): void {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/{subdomain}/events/{api_handle}/bulk.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('subdomain', $subdomain)->required(),
                TemplateParam::init('api_handle', $apiHandle)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                QueryParam::init('store_uid', $storeUid)->commaSeparated(),
                BodyParam::init($body)
            );

        $this->execute($_reqBuilder);
    }

    /**
     * This request will list components applied to each subscription.
     *
     * @param array $options Array with all options for search
     *
     * @return ListSubscriptionComponentsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSubscriptionComponentsForSite(array $options): ListSubscriptionComponentsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions_components.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('sort', $options)
                    ->commaSeparated()
                    ->extract('sort')
                    ->serializeBy([ListSubscriptionComponentsSort::class, 'checkValue']),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction')
                    ->serializeBy([SortingDirection::class, 'checkValue']),
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField')
                    ->serializeBy([SubscriptionListDateField::class, 'checkValue']),
                QueryParam::init('start_date', $options)->commaSeparated()->extract('startDate'),
                QueryParam::init('start_datetime', $options)->commaSeparated()->extract('startDatetime'),
                QueryParam::init('end_date', $options)->commaSeparated()->extract('endDate'),
                QueryParam::init('end_datetime', $options)->commaSeparated()->extract('endDatetime'),
                QueryParam::init('subscription_ids', $options)->commaSeparated()->extract('subscriptionIds'),
                QueryParam::init('price_point_ids', $options)
                    ->commaSeparated()
                    ->extract('pricePointIds')
                    ->serializeBy([IncludeNotNull::class, 'checkValue']),
                QueryParam::init('product_family_ids', $options)->commaSeparated()->extract('productFamilyIds'),
                QueryParam::init('include', $options)
                    ->commaSeparated()
                    ->extract('mInclude')
                    ->serializeBy([ListSubscriptionComponentsInclude::class, 'checkValue']),
                QueryParam::init('filter[use_site_exchange_rate]', $options)
                    ->commaSeparated()
                    ->extract('filterUseSiteExchangeRate'),
                QueryParam::init('filter[currencies]', $options)->commaSeparated()->extract('filterCurrencies'),
                QueryParam::init('filter[subscription][states]', $options)
                    ->commaSeparated()
                    ->extract('filterSubscriptionStates')
                    ->serializeBy([SubscriptionStateFilter::class, 'checkValue']),
                QueryParam::init('filter[subscription][date_field]', $options)
                    ->commaSeparated()
                    ->extract('filterSubscriptionDateField')
                    ->serializeBy([SubscriptionListDateField::class, 'checkValue']),
                QueryParam::init('filter[subscription][start_date]', $options)
                    ->commaSeparated()
                    ->extract('filterSubscriptionStartDate'),
                QueryParam::init('filter[subscription][start_datetime]', $options)
                    ->commaSeparated()
                    ->extract('filterSubscriptionStartDatetime'),
                QueryParam::init('filter[subscription][end_date]', $options)
                    ->commaSeparated()
                    ->extract('filterSubscriptionEndDate'),
                QueryParam::init('filter[subscription][end_datetime]', $options)
                    ->commaSeparated()
                    ->extract('filterSubscriptionEndDatetime')
            );

        $_resHandler = $this->responseHandler()->type(ListSubscriptionComponentsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
