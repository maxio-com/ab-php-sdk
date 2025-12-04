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
use AdvancedBillingLib\Exceptions\SingleErrorResponseException;
use AdvancedBillingLib\Exceptions\SubscriptionAddCouponErrorException;
use AdvancedBillingLib\Exceptions\SubscriptionRemoveCouponErrorsException;
use AdvancedBillingLib\Exceptions\SubscriptionResponseErrorException;
use AdvancedBillingLib\Models\ActivateSubscriptionRequest;
use AdvancedBillingLib\Models\AddCouponsRequest;
use AdvancedBillingLib\Models\CreateSubscriptionRequest;
use AdvancedBillingLib\Models\OverrideSubscriptionRequest;
use AdvancedBillingLib\Models\PrepaidConfigurationResponse;
use AdvancedBillingLib\Models\SortingDirection;
use AdvancedBillingLib\Models\SubscriptionDateField;
use AdvancedBillingLib\Models\SubscriptionInclude;
use AdvancedBillingLib\Models\SubscriptionListInclude;
use AdvancedBillingLib\Models\SubscriptionPreviewResponse;
use AdvancedBillingLib\Models\SubscriptionPurgeType;
use AdvancedBillingLib\Models\SubscriptionResponse;
use AdvancedBillingLib\Models\SubscriptionSort;
use AdvancedBillingLib\Models\SubscriptionStateFilter;
use AdvancedBillingLib\Models\UpdateSubscriptionRequest;
use AdvancedBillingLib\Models\UpsertPrepaidConfigurationRequest;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class SubscriptionsController extends BaseController
{
    /**
     * Creates a Subscription for a customer and product
     *
     * Specify the product with `product_id` or `product_handle`. To set a specific product pricepPoint,
     * use `product_price_point_handle` or `product_price_point_id`.
     *
     * Identify an existing customer with `customer_id` or `customer_reference`. Optionally, include an
     * existing payment profile using `payment_profile_id`. To create a new customer, pass
     * customer_attributes.
     *
     * Select an option from the **Request Examples** drop-down on the right side of the portal to see
     * examples of common scenarios for creating subscriptions.
     *
     * Payment information may be required to create a subscription, depending on the options for the
     * Product being subscribed. See [product options](https://docs.maxio.com/hc/en-
     * us/articles/24261076617869-Edit-Products) for more information. See the [Payments
     * Profile]($e/Payment%20Profiles/createPaymentProfile) endpoint for details on payment parameters.
     *
     * Do not use real card information for testing. See the Sites articles that cover [testing your site
     * setup](https://docs.maxio.com/hc/en-us/articles/24250712113165-Testing-Overview#testing-overview-0-
     * 0) for more details on testing in your sandbox.
     *
     * Note that collecting and sending raw card details in production requires [PCI compliance](https:
     * //docs.maxio.com/hc/en-us/articles/24183956938381-PCI-Compliance#pci-compliance-0-0) on your end. If
     * your business is not PCI compliant, use [Chargify.js](https://docs.maxio.com/hc/en-
     * us/articles/38163190843789-Chargify-js-Overview#chargify-js-overview-0-0) to collect credit card or
     * bank account information.
     *
     * See the [Subscription Signups](page:introduction/basic-concepts/subscription-signup) article for
     * more information on working with subscriptions in Advanced Billing.
     *
     * @param CreateSubscriptionRequest|null $body
     *
     * @return SubscriptionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSubscription(?CreateSubscriptionRequest $body = null): SubscriptionResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(SubscriptionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method will return an array of subscriptions from a Site. Pay close attention to query string
     * filters and pagination in order to control responses from the server.
     *
     * ## Search for a subscription
     *
     * Use the query strings below to search for a subscription using the criteria available. The return
     * value will be an array.
     *
     * ## Self-Service Page token
     *
     * Self-Service Page token for the subscriptions is not returned by default. If this information is
     * desired, the include[]=self_service_page_token parameter must be provided with the request.
     *
     * @param array $options Array with all options for search
     *
     * @return SubscriptionResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSubscriptions(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('page', $options)->unIndexed()->extract('page', 1),
                QueryParam::init('per_page', $options)->unIndexed()->extract('perPage', 20),
                QueryParam::init('state', $options)
                    ->unIndexed()
                    ->extract('state')
                    ->serializeBy([SubscriptionStateFilter::class, 'checkValue']),
                QueryParam::init('product', $options)->unIndexed()->extract('product'),
                QueryParam::init('product_price_point_id', $options)->unIndexed()->extract('productPricePointId'),
                QueryParam::init('coupon', $options)->unIndexed()->extract('coupon'),
                QueryParam::init('coupon_code', $options)->unIndexed()->extract('couponCode'),
                QueryParam::init('date_field', $options)
                    ->unIndexed()
                    ->extract('dateField')
                    ->serializeBy([SubscriptionDateField::class, 'checkValue']),
                QueryParam::init('start_date', $options)
                    ->unIndexed()
                    ->extract('startDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('end_date', $options)
                    ->unIndexed()
                    ->extract('endDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('start_datetime', $options)
                    ->unIndexed()
                    ->extract('startDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('end_datetime', $options)
                    ->unIndexed()
                    ->extract('endDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('metadata', $options)->unIndexed()->extract('metadata'),
                QueryParam::init('direction', $options)
                    ->unIndexed()
                    ->extract('direction')
                    ->serializeBy([SortingDirection::class, 'checkValue']),
                QueryParam::init('sort', $options)
                    ->unIndexed()
                    ->extract('sort', SubscriptionSort::SIGNUP_DATE)
                    ->serializeBy([SubscriptionSort::class, 'checkValue']),
                QueryParam::init('include', $options)
                    ->unIndexed()
                    ->extract('mInclude')
                    ->serializeBy([SubscriptionListInclude::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(SubscriptionResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates one or more attributes of a subscription.
     *
     * ## Update Subscription Payment Method
     *
     * Change the card that your subscriber uses for their subscription. You can also use this method to
     * change the expiration date of the card **if your gateway allows**.
     *
     * Do not use real card information for testing. See the Sites articles that cover [testing your site
     * setup](https://docs.maxio.com/hc/en-us/articles/24250712113165-Testing-Overview#testing-overview-0-
     * 0) for more details on testing in your sandbox.
     *
     * Note that collecting and sending raw card details in production requires [PCI compliance](https:
     * //docs.maxio.com/hc/en-us/articles/24183956938381-PCI-Compliance#pci-compliance-0-0) on your end. If
     * your business is not PCI compliant, use [Chargify.js](https://docs.maxio.com/hc/en-
     * us/articles/38163190843789-Chargify-js-Overview#chargify-js-overview-0-0) to collect credit card or
     * bank account information.
     *
     * > Note: Partial card updates for **Authorize.Net** are not allowed via this endpoint. The existing
     * Payment Profile must be directly updated instead.
     *
     * ## Update Product
     *
     * You also use this method to change the subscription to a different product by setting a new value
     * for product_handle. A product change can be done in two different ways, **product change** or
     * **delayed product change**.
     *
     * ### Product Change
     *
     * You can change a subscription's product. The new payment amount is calculated and charged at the
     * normal start of the next period. If you require complex product changes or prorated upgrades and
     * downgrades instead, please see the documentation on [Migrating Subscription Products](https://docs.
     * maxio.com/hc/en-us/articles/24252069837581-Product-Changes-and-Migrations#product-changes-and-
     * migrations-0-0).
     *
     * To perform a product change, set either the `product_handle` or `product_id` attribute to that of a
     * different product from the same site as the subscription. You can also change the price point by
     * passing in either `product_price_point_id` or `product_price_point_handle` - otherwise the new
     * product's default price point is used.
     *
     * ### Delayed Product Change
     *
     * This method also changes the product and/or price point, and the new payment amount is calculated
     * and charged at the normal start of the next period.
     *
     * This method schedules the product change to happen automatically at the subscription’s next renewal
     * date. To perform a delayed product change, set the `product_handle` attribute as you would in a
     * regular product change, but also set the `product_change_delayed` attribute to `true`. No proration
     * applies in this case.
     *
     * You can also perform a delayed change to the price point by passing in either
     * `product_price_point_id` or `product_price_point_handle`
     *
     * > **Note:** To cancel a delayed product change, set `next_product_id` to an empty string.
     *
     * ## Billing Date Changes
     *
     * You can update dates for a subscrption.
     *
     * ### Regular Billing Date Changes
     *
     * Send the `next_billing_at` to set the next billing date for the subscription. After that date passes
     * and the subscription is processed, the following billing date will be set according to the
     * subscription's product period.
     *
     * > Note: If you pass an invalid date, the correct date is automatically set to he correct date. For
     * example, if February 30 is passed, the next billing would be set to March 2nd in a non-leap year.
     *
     * The server response will not return data under the key/value pair of `next_billing_at`. View the
     * key/value pair of `current_period_ends_at` to verify that the `next_billing_at` date has been
     * changed successfully.
     *
     * ### Calendar Billing  and Snap Day Changes
     *
     * For a subscription using Calendar Billing, setting the next billing date is a bit different. Send
     * the `snap_day` attribute to change the calendar billing date for **a subscription using a product
     * eligible for calendar billing**.
     *
     * > Note: If you change the product associated with a subscription that contains a `snap_day` and
     * immediately `READ/GET` the subscription data, it will still contain original `snap_day`. The
     * `snap_day`will will reset to 'null on the next billing cycle. This is because  a product change is
     * instantanous and only affects the product associated with a subscription.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param UpdateSubscriptionRequest|null $body
     *
     * @return SubscriptionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateSubscription(
        int $subscriptionId,
        ?UpdateSubscriptionRequest $body = null
    ): SubscriptionResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/subscriptions/{subscription_id}.json')
            ->auth('BasicAuth')
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
                    ErrorListResponseException::class
                )
            )
            ->type(SubscriptionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to find subscription details.
     *
     * ## Self-Service Page token
     *
     * Self-Service Page token for the subscription is not returned by default. If this information is
     * desired, the include[]=self_service_page_token parameter must be provided with the request.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param string[]|null $mInclude Allows including additional data in the response. Use in
     *        query: `include[]=coupons&include[]=self_service_page_token`.
     *
     * @return SubscriptionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readSubscription(int $subscriptionId, ?array $mInclude = null): SubscriptionResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions/{subscription_id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                QueryParam::init('include', $mInclude)
                    ->unIndexed()
                    ->serializeBy([SubscriptionInclude::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(SubscriptionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API endpoint allows you to set certain subscription fields that are usually managed for you
     * automatically. Some of the fields can be set via the normal Subscriptions Update API, but others can
     * only be set using this endpoint.
     *
     * This endpoint is provided for cases where you need to “align” Advanced Billing data with data that
     * happened in your system, perhaps before you started using Advanced Billing. For example, you may
     * choose to import your historical subscription data, and would like the activation and cancellation
     * dates in Advanced Billing to match your existing historical dates. Advanced Billing does not
     * backfill historical events (i.e. from the Events API), but some static data can be changed via this
     * API.
     *
     * Why are some fields only settable from this endpoint, and not the normal subscription create and
     * update endpoints? Because we want users of this endpoint to be aware that these fields are usually
     * managed by Advanced Billing, and using this API means **you are stepping out on your own.**
     *
     * Changing these fields will not affect any other attributes. For example, adding an expiration date
     * will not affect the next assessment date on the subscription.
     *
     * If you regularly need to override the current_period_starts_at for new subscriptions, this can also
     * be accomplished by setting both `previous_billing_at` and `next_billing_at` at subscription creation.
     * See the documentation on [Importing Subscriptions](./b3A6MTQxMDgzODg-create-
     * subscription#subscriptions-import) for more information.
     *
     * ## Limitations
     *
     * When passing `current_period_starts_at` some validations are made:
     *
     * 1. The subscription needs to be unbilled (no statements or invoices).
     * 2. The value passed must be a valid date/time. We recommend using the iso 8601 format.
     * 3. The value passed must be before the current date/time.
     *
     * If unpermitted parameters are sent, a 400 HTTP response is sent along with a string giving the
     * reason for the problem.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param OverrideSubscriptionRequest|null $body Only these fields are available to be set.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function overrideSubscription(int $subscriptionId, ?OverrideSubscriptionRequest $body = null): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/subscriptions/{subscription_id}/override.json')
            ->auth('BasicAuth')
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
                    SingleErrorResponseException::class
                )
            );

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to find a subscription by its reference.
     *
     * @param string|null $reference Subscription reference
     *
     * @return SubscriptionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function findSubscription(?string $reference = null): SubscriptionResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions/lookup.json')
            ->auth('BasicAuth')
            ->parameters(QueryParam::init('reference', $reference)->commaSeparated());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(SubscriptionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * For sites in test mode, you may purge individual subscriptions.
     *
     * Provide the subscription ID in the url.  To confirm, supply the customer ID in the query string
     * `ack` parameter. You may also delete the customer record and/or payment profiles by passing
     * `cascade` parameters. For example, to delete just the customer record, the query params would be: `?
     * ack={customer_id}&cascade[]=customer`
     *
     * If you need to remove subscriptions from a live site, contact support to discuss your use case.
     *
     * ### Delete customer and payment profile
     *
     * The query params will be: `?ack={customer_id}&cascade[]=customer&cascade[]=payment_profile`
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $ack id of the customer.
     * @param string[]|null $cascade Options are "customer" or "payment_profile". Use in query:
     *        `cascade[]=customer&cascade[]=payment_profile`.
     *
     * @return SubscriptionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function purgeSubscription(int $subscriptionId, int $ack, ?array $cascade = null): SubscriptionResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/{subscription_id}/purge.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                QueryParam::init('ack', $ack)->unIndexed()->required(),
                QueryParam::init('cascade', $cascade)
                    ->unIndexed()
                    ->serializeBy([SubscriptionPurgeType::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SubscriptionResponseErrorException::class
                )
            )
            ->type(SubscriptionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to update a subscription's prepaid configuration.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param UpsertPrepaidConfigurationRequest|null $body
     *
     * @return PrepaidConfigurationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePrepaidSubscriptionConfiguration(
        int $subscriptionId,
        ?UpsertPrepaidConfigurationRequest $body = null
    ): PrepaidConfigurationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/prepaid_configurations.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.'
                )
            )
            ->type(PrepaidConfigurationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * The Chargify API allows you to preview a subscription by POSTing the same JSON or XML as for a
     * subscription creation.
     *
     * The "Next Billing" amount and "Next Billing" date are represented in each Subscriber's Summary.
     *
     * A subscription will not be created by utilizing this endpoint; it is meant to serve as a prediction.
     *
     * For more information, see our documentation [here](https://maxio.zendesk.com/hc/en-
     * us/articles/24252493695757-Subscriber-Interface-Overview).
     *
     * ## Taxable Subscriptions
     *
     * This endpoint will preview taxes applicable to a purchase. In order for taxes to be previewed, the
     * following conditions must be met:
     *
     * + Taxes must be configured on the subscription
     * + The preview must be for the purchase of a taxable product or component, or combination of the two.
     * + The subscription payload must contain a full billing or shipping address in order to calculate
     * tax
     *
     * For more information about creating taxable previews, see our documentation guide on how to create
     * [taxable subscriptions.](https://maxio.zendesk.com/hc/en-us/sections/24287012349325-Taxes)
     *
     * You do **not** need to include a card number to generate tax information when you are previewing a
     * subscription. However, when you actually want to create the subscription, you must include the
     * credit card information if you want the billing address to be stored in Advanced Billing. The
     * billing address and the credit card information are stored together within the payment profile
     * object. Also, you may not send a billing address to Advanced Billing without payment profile
     * information, as the address is stored on the card.
     *
     * You can pass shipping and billing addresses and still decide not to calculate taxes. To do that,
     * pass `skip_billing_manifest_taxes: true` attribute.
     *
     * ## Non-taxable Subscriptions
     *
     * If you'd like to calculate subscriptions that do not include tax you may leave off the billing
     * information.
     *
     * @param CreateSubscriptionRequest|null $body
     *
     * @return SubscriptionPreviewResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function previewSubscription(?CreateSubscriptionRequest $body = null): SubscriptionPreviewResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/preview.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(SubscriptionPreviewResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * An existing subscription can accommodate multiple discounts/coupon codes. This is only applicable if
     * each coupon is stackable. For more information on stackable coupons, we recommend reviewing our
     * [coupon documentation.](https://maxio.zendesk.com/hc/en-us/articles/24261259337101-Coupons-and-
     * Subscriptions#stackability-rules)
     *
     * ## Query Parameters vs Request Body Parameters
     *
     * Passing in a coupon code as a query parameter will add the code to the subscription, completely
     * replacing all existing coupon codes on the subscription.
     *
     * For this reason, using this query parameter on this endpoint has been deprecated in favor of using
     * the request body parameters as described below. When passing in request body parameters, the list of
     * coupon codes will simply be added to any existing list of codes on the subscription.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param string|null $code A code for the coupon that would be applied to a subscription
     * @param AddCouponsRequest|null $body
     *
     * @return SubscriptionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function applyCouponsToSubscription(
        int $subscriptionId,
        ?string $code = null,
        ?AddCouponsRequest $body = null
    ): SubscriptionResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/add_coupon.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                QueryParam::init('code', $code)->commaSeparated(),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SubscriptionAddCouponErrorException::class
                )
            )
            ->type(SubscriptionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to remove a coupon from an existing subscription.
     *
     * For more information on the expected behaviour of removing a coupon from a subscription, See our
     * documentation [here.](https://maxio.zendesk.com/hc/en-us/articles/24261259337101-Coupons-and-
     * Subscriptions#removing-a-coupon)
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param string|null $couponCode The coupon code
     *
     * @return string Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function removeCouponFromSubscription(int $subscriptionId, ?string $couponCode = null): string
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/subscriptions/{subscription_id}/remove_coupon.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                QueryParam::init('coupon_code', $couponCode)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    SubscriptionRemoveCouponErrorsException::class
                )
            );

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Advanced Billing offers the ability to activate awaiting signup and trialing subscriptions. This
     * feature is only available on the Relationship Invoicing architecture. Subscriptions in a group may
     * not be activated immediately.
     *
     * For details on how the activation works, and how to activate subscriptions through the application,
     * see [activation](#).
     *
     * The `revert_on_failure` parameter controls the behavior upon activation failure.
     * - If set to `true` and something goes wrong i.e. payment fails, then Advanced Billing will not
     * change the subscription's state. The subscription’s billing period will also remain the same.
     * - If set to `false` and something goes wrong i.e. payment fails, then Advanced Billing will continue
     * through with the activation and enter an end of life state. For trialing subscriptions, that will
     * either be trial ended (if the trial is no obligation), past due (if the trial has an obligation), or
     * canceled (if the site has no dunning strategy, or has a strategy that says to cancel immediately).
     * For awaiting signup subscriptions, that will always be canceled.
     *
     * The default activation failure behavior can be configured per activation attempt, or you may set a
     * default value under Config > Settings > Subscription Activation Settings.
     *
     * ## Activation Scenarios
     *
     * ### Activate Awaiting Signup subscription
     *
     * - Given you have a product without trial
     * - Given you have a site without dunning strategy
     *
     * ```mermaid
     * flowchart LR
     * AS[Awaiting Signup] --> A{Activate}
     * A -->|Success| Active
     * A -->|Failure| ROF{revert_on_failure}
     * ROF -->|true| AS
     * ROF -->|false| Canceled
     * ```
     *
     * - Given you have a product with trial
     * - Given you have a site with dunning strategy
     *
     * ```mermaid
     * flowchart LR
     * AS[Awaiting Signup] --> A{Activate}
     * A -->|Success| Trialing
     * A -->|Failure| ROF{revert_on_failure}
     * ROF -->|true| AS
     * ROF -->|false| PD[Past Due]
     * ```
     *
     * ### Activate Trialing subscription
     *
     * You can read more about the behavior of trialing subscriptions [here](https://maxio.zendesk.
     * com/hc/en-us/articles/24252155721869-Trialing-Subscriptions).
     * When the `revert_on_failure` parameter is set to `true`, the subscription's state will remain as
     * Trialing, we will void the invoice from activation and return any prepayments and credits applied to
     * the invoice back to the subscription.
     *
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param ActivateSubscriptionRequest|null $body
     *
     * @return SubscriptionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function activateSubscription(
        int $subscriptionId,
        ?ActivateSubscriptionRequest $body = null
    ): SubscriptionResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/subscriptions/{subscription_id}/activate.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorArrayMapResponseException::class
                )
            )
            ->type(SubscriptionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
