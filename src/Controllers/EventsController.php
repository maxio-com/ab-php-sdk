<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\CountResponse;
use AdvancedBillingLib\Models\Direction;
use AdvancedBillingLib\Models\EventKey;
use AdvancedBillingLib\Models\EventResponse;
use AdvancedBillingLib\Models\ListEventsDateField;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;

class EventsController extends BaseController
{
    /**
     * Lists events for a site.
     *
     * ## Events Intro
     *
     * Advanced Billing Events include various activity that happens around a Site. This information is
     * **especially** useful to track down issues that arise when subscriptions are not created due to
     * errors.
     *
     * Within the Advanced Billing UI, "Events" are referred to as "Site Activity".  See the [Site
     * Activity](https://maxio.zendesk.com/hc/en-us/articles/24250671733517-Site-Activity) article in the
     * product documentation for details on how to record view Events / Site Activty in the Advanced
     * Billing UI.
     *
     * If you’re using the [enhanced Catalog experience](page:help/announcements/2026-announcements#new-
     * catalog-experience-and-terminology), you’ll see updated naming in webhook events and messages.
     *
     * Event name changes:
     *
     * - subscription_product_change → subscription_plan_change
     * - component_allocation_change → allocation_change
     * - component_billing_date_change → product_billing_date_change
     *
     * Message updates:
     *
     * - “Plan changed on Subscription from previous plan to new plan”
     * - “Successful payment for allocation changes to Product on Subscription”
     * - “Failed payment for allocation changes to Product on Subscription”
     *
     * ## List Events for a Site
     *
     * This method will retrieve a list of events for a site. Use query string filters to narrow down
     * results. You may use the `key` filter as part of your query string to narrow down results.
     *
     * ### Legacy Filters
     *
     * The following keys are no longer supported.
     *
     * + `payment_failure_recreated`
     * + `payment_success_recreated`
     * + `renewal_failure_recreated`
     * + `renewal_success_recreated`
     * + `zferral_revenue_post_failure` - (Specific to the deprecated Zferral integration)
     * + `zferral_revenue_post_success` - (Specific to the deprecated Zferral integration)
     *
     * ## Event Key
     * The event type is identified by the key property. You can check supported keys
     * [here]($m/Event%20Key).
     *
     * ## Event Specific Data
     *
     * Different event types may include additional data in `event_specific_data` property.
     * While some events share the same schema for `event_specific_data`, others may not include it at all.
     * For precise mappings from key to event_specific_data, refer to [Event]($m/Event).
     *
     * ### Example
     * Here’s an example event for the `subscription_product_change` event:
     *
     * ```
     * {
     * "event": {
     * "id": 351,
     * "key": "subscription_product_change",
     * "message": "Product changed on Mark Alan's subscription from 'Basic' to 'Pro'",
     * "subscription_id": 205,
     * "event_specific_data": {
     * "new_product_id": 3,
     * "previous_product_id": 2
     * },
     * "created_at": "2012-01-30T10:43:31-05:00"
     * }
     * }
     * ```
     *
     * Here’s an example event for the `subscription_state_change` event:
     *
     * ```
     * {
     * "event": {
     * "id": 353,
     * "key": "subscription_state_change",
     * "message": "State changed on Mark Alan's subscription to Pro from trialing to active",
     * "subscription_id": 205,
     * "event_specific_data": {
     * "new_subscription_state": "active",
     * "previous_subscription_state": "trialing"
     * },
     * "created_at": "2012-01-30T10:43:33-05:00"
     * }
     * }
     * ```
     *
     * @param array $options Array with all options for search
     *
     * @return EventResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listEvents(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/events.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('since_id', $options)->commaSeparated()->extract('sinceId'),
                QueryParam::init('max_id', $options)->commaSeparated()->extract('maxId'),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction', Direction::DESC)
                    ->serializeBy([Direction::class, 'checkValue']),
                QueryParam::init('filter', $options)
                    ->commaSeparated()
                    ->extract('filter')
                    ->serializeBy([EventKey::class, 'checkValue']),
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField')
                    ->serializeBy([ListEventsDateField::class, 'checkValue']),
                QueryParam::init('start_date', $options)->commaSeparated()->extract('startDate'),
                QueryParam::init('end_date', $options)->commaSeparated()->extract('endDate'),
                QueryParam::init('start_datetime', $options)->commaSeparated()->extract('startDatetime'),
                QueryParam::init('end_datetime', $options)->commaSeparated()->extract('endDatetime')
            );

        $_resHandler = $this->responseHandler()->type(EventResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists events for a subscription.
     *
     * ## Event Key
     * The event type is identified by the key property. You can check supported keys
     * [here]($m/Event%20Key).
     *
     * If you’re using the [enhanced Catalog experience](page:help/announcements/2026-announcements#new-
     * catalog-experience-and-terminology), you’ll see updated naming in webhook events and messages.
     *
     * Event name changes:
     *
     * - subscription_product_change → subscription_plan_change
     * - component_allocation_change → allocation_change
     * - component_billing_date_change → product_billing_date_change
     *
     * Message updates:
     *
     * - “Successful payment for allocation changes to Product on Subscription”
     * - “Failed payment for allocation changes to Product on Subscription”
     * - “Plan changed on Subscription from previous plan to new plan”
     *
     * ## Event Specific Data
     *
     * Different event types may include additional data in `event_specific_data` property.
     * While some events share the same schema for `event_specific_data`, others may not include it at all.
     * For precise mappings from key to event_specific_data, refer to [Event]($m/Event).
     *
     * @param array $options Array with all options for search
     *
     * @return EventResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSubscriptionEvents(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions/{subscription_id}/events.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $options)->extract('subscriptionId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('since_id', $options)->commaSeparated()->extract('sinceId'),
                QueryParam::init('max_id', $options)->commaSeparated()->extract('maxId'),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction', Direction::DESC)
                    ->serializeBy([Direction::class, 'checkValue']),
                QueryParam::init('filter', $options)
                    ->commaSeparated()
                    ->extract('filter')
                    ->serializeBy([EventKey::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(EventResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns the total count of events for a given site.
     *
     * If you’re using the [enhanced Catalog experience](page:help/announcements/2026-announcements#new-
     * catalog-experience-and-terminology), you’ll see updated naming in webhook events and messages.
     *
     * Event name changes:
     *
     * - subscription_product_change → subscription_plan_change
     * - component_allocation_change → allocation_change
     * - component_billing_date_change → product_billing_date_change
     *
     * Message updates:
     *
     * - “Successful payment for allocation changes to Product on Subscription”
     * - “Failed payment for allocation changes to Product on Subscription”
     * - “Plan changed on Subscription from previous plan to new plan”
     *
     * @param array $options Array with all options for search
     *
     * @return CountResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readEventsCount(array $options): CountResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/events/count.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('since_id', $options)->commaSeparated()->extract('sinceId'),
                QueryParam::init('max_id', $options)->commaSeparated()->extract('maxId'),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction', Direction::DESC)
                    ->serializeBy([Direction::class, 'checkValue']),
                QueryParam::init('filter', $options)
                    ->commaSeparated()
                    ->extract('filter')
                    ->serializeBy([EventKey::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(CountResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
