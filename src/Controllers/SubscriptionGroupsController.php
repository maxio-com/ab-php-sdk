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
use AdvancedBillingLib\Exceptions\SingleStringErrorResponseException;
use AdvancedBillingLib\Exceptions\SubscriptionGroupSignupErrorResponseException;
use AdvancedBillingLib\Exceptions\SubscriptionGroupUpdateErrorResponseException;
use AdvancedBillingLib\Models\AddSubscriptionToAGroup;
use AdvancedBillingLib\Models\CreateSubscriptionGroupRequest;
use AdvancedBillingLib\Models\DeleteSubscriptionGroupResponse;
use AdvancedBillingLib\Models\FullSubscriptionGroupResponse;
use AdvancedBillingLib\Models\ListSubscriptionGroupsResponse;
use AdvancedBillingLib\Models\SubscriptionGroupResponse;
use AdvancedBillingLib\Models\SubscriptionGroupSignupRequest;
use AdvancedBillingLib\Models\SubscriptionGroupSignupResponse;
use AdvancedBillingLib\Models\UpdateSubscriptionGroupRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class SubscriptionGroupsController extends BaseController
{
    /**
     * Create multiple subscriptions at once under the same customer and consolidate them into a
     * subscription group.
     *
     * You must provide one and only one of the `payer_id`/`payer_reference`/`payer_attributes` for the
     * customer attached to the group.
     *
     * You must provide one and only one of the
     * `payment_profile_id`/`credit_card_attributes`/`bank_account_attributes` for the payment profile
     * attached to the group.
     *
     * Only one of the `subscriptions` can have `"primary": true` attribute set.
     *
     * When passing product to a subscription you can use either `product_id` or `product_handle` or
     * `offer_id`. You can also use `custom_price` instead.
     *
     * @param SubscriptionGroupSignupRequest|null $body
     *
     * @return SubscriptionGroupSignupResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function signupWithSubscriptionGroup(
        ?SubscriptionGroupSignupRequest $body = null
    ): SubscriptionGroupSignupResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscription_groups/signup.json')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SubscriptionGroupSignupErrorResponseException::class
                )
            )
            ->type(SubscriptionGroupSignupResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a subscription group with given members.
     *
     * @param CreateSubscriptionGroupRequest|null $body
     *
     * @return SubscriptionGroupResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSubscriptionGroup(?CreateSubscriptionGroupRequest $body = null): SubscriptionGroupResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscription_groups.json')
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SingleStringErrorResponseException::class
                )
            )
            ->type(SubscriptionGroupResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns an array of subscription groups for the site. The response is paginated and will return a
     * `meta` key with pagination information.
     *
     * #### Account Balance Information
     *
     * Account balance information for the subscription groups is not returned by default. If this
     * information is desired, the `include[]=account_balances` parameter must be provided with the request.
     *
     * @param array $options Array with all options for search
     *
     * @return ListSubscriptionGroupsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSubscriptionGroups(array $options): ListSubscriptionGroupsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscription_groups.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('include', $options)->commaSeparated()->extract('mInclude')
            );

        $_resHandler = $this->responseHandler()->type(ListSubscriptionGroupsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to find subscription group details.
     *
     * #### Current Billing Amount in Cents
     *
     * Current billing amount for the subscription group is not returned by default. If this information is
     * desired, the `include[]=current_billing_amount_in_cents` parameter must be provided with the request.
     *
     * @param string $uid The uid of the subscription group
     *
     * @return FullSubscriptionGroupResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readSubscriptionGroup(string $uid): FullSubscriptionGroupResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscription_groups/{uid}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('uid', $uid)->required());

        $_resHandler = $this->responseHandler()->type(FullSubscriptionGroupResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to update subscription group members.
     * `"member_ids": []` should contain an array of both subscription IDs to set as group members and
     * subscription IDs already present in the groups. Not including them will result in removing them from
     * subscription group. To clean up members, just leave the array empty.
     *
     * @param string $uid The uid of the subscription group
     * @param UpdateSubscriptionGroupRequest|null $body
     *
     * @return SubscriptionGroupResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateSubscriptionGroupMembers(
        string $uid,
        ?UpdateSubscriptionGroupRequest $body = null
    ): SubscriptionGroupResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/subscription_groups/{uid}.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('uid', $uid)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SubscriptionGroupUpdateErrorResponseException::class
                )
            )
            ->type(SubscriptionGroupResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to delete subscription group.
     * Only groups without members can be deleted
     *
     * @param string $uid The uid of the subscription group
     *
     * @return DeleteSubscriptionGroupResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteSubscriptionGroup(string $uid): DeleteSubscriptionGroupResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/subscription_groups/{uid}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('uid', $uid)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(DeleteSubscriptionGroupResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to find subscription group associated with subscription.
     *
     * If the subscription is not in a group endpoint will return 404 code.
     *
     * @param string $subscriptionId The Chargify id of the subscription associated with the
     *        subscription group
     *
     * @return FullSubscriptionGroupResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function findSubscriptionGroup(string $subscriptionId): FullSubscriptionGroupResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscription_groups/lookup.json')
            ->auth('global')
            ->parameters(QueryParam::init('subscription_id', $subscriptionId)->commaSeparated()->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(FullSubscriptionGroupResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * For sites making use of the [Relationship Billing](https://chargify.zendesk.com/hc/en-
     * us/articles/4407737494171) and [Customer Hierarchy](https://chargify.zendesk.com/hc/en-
     * us/articles/4407746683291) features, it is possible to add existing subscriptions to subscription
     * groups.
     *
     * Passing `group` parameters with a `target` containing a `type` and optional `id` is all that's
     * needed. When the `target` parameter specifies a `"customer"` or `"subscription"` that is already
     * part of a hierarchy, the subscription will become a member of the customer's subscription group.  If
     * the target customer or subscription is not part of a subscription group, a new group will be created
     * and the subscription will become part of the group with the specified target customer set as the
     * responsible payer for the group's subscriptions.
     *
     * **Please Note:** In order to add an existing subscription to a subscription group, it must belong to
     * either the same customer record as the target, or be within the same customer hierarchy.
     *
     * Rather than specifying a customer, the `target` parameter could instead simply have a value of
     * * `"self"` which indicates the subscription will be paid for not by some other customer, but by the
     * subscribing customer,
     * * `"parent"` which indicates the subscription will be paid for by the subscribing customer's parent
     * within a customer hierarchy, or
     * * `"eldest"` which indicates the subscription will be paid for by the root-level customer in the
     * subscribing customer's hierarchy.
     *
     * To create a new subscription into a subscription group, please reference the following:
     * [Create Subscription in a Subscription Group](https://developers.chargify.com/docs/api-
     * docs/d571659cf0f24-create-subscription#subscription-in-a-subscription-group)
     *
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param AddSubscriptionToAGroup|null $body
     *
     * @return SubscriptionGroupResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function addSubscriptionToGroup(
        int $subscriptionId,
        ?AddSubscriptionToAGroup $body = null
    ): SubscriptionGroupResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/{subscription_id}/group.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(SubscriptionGroupResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * For sites making use of the [Relationship Billing](https://chargify.zendesk.com/hc/en-
     * us/articles/4407737494171) and [Customer Hierarchy](https://chargify.zendesk.com/hc/en-
     * us/articles/4407746683291) features, it is possible to remove existing subscription from
     * subscription group.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function removeSubscriptionFromGroup(int $subscriptionId): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/subscriptions/{subscription_id}/group.json')
            ->auth('global')
            ->parameters(TemplateParam::init('subscription_id', $subscriptionId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            );

        $this->execute($_reqBuilder, $_resHandler);
    }
}
