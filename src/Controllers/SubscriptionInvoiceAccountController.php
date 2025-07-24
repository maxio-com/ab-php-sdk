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
use AdvancedBillingLib\Exceptions\RefundPrepaymentBaseErrorsResponseException;
use AdvancedBillingLib\Models\AccountBalances;
use AdvancedBillingLib\Models\CreatePrepaymentRequest;
use AdvancedBillingLib\Models\CreatePrepaymentResponse;
use AdvancedBillingLib\Models\DeductServiceCreditRequest;
use AdvancedBillingLib\Models\IssueServiceCreditRequest;
use AdvancedBillingLib\Models\ListServiceCreditsResponse;
use AdvancedBillingLib\Models\PrepaymentResponse;
use AdvancedBillingLib\Models\PrepaymentsResponse;
use AdvancedBillingLib\Models\RefundPrepaymentRequest;
use AdvancedBillingLib\Models\ServiceCredit;
use AdvancedBillingLib\Models\SortingDirection;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class SubscriptionInvoiceAccountController extends BaseController
{
    /**
     * Returns the `balance_in_cents` of the Subscription's Pending Discount, Service Credit, and
     * Prepayment accounts, as well as the sum of the Subscription's open, payable invoices.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     *
     * @return AccountBalances Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readAccountBalances(int $subscriptionId): AccountBalances
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/account_balances.json'
        )->auth('BasicAuth')->parameters(TemplateParam::init('subscription_id', $subscriptionId)->required());

        $_resHandler = $this->responseHandler()->type(AccountBalances::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * ## Create Prepayment
     *
     * In order to specify a prepayment made against a subscription, specify the `amount, memo, details,
     * method`.
     *
     * When the `method` specified is `"credit_card_on_file"`, the prepayment amount will be collected
     * using the default credit card payment profile and applied to the prepayment account balance.  This
     * is especially useful for manual replenishment of prepaid subscriptions.
     *
     * Please note that you **can't** pass `amount_in_cents`.
     *
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param CreatePrepaymentRequest|null $body
     *
     * @return CreatePrepaymentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createPrepayment(
        int $subscriptionId,
        ?CreatePrepaymentRequest $body = null
    ): CreatePrepaymentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/prepayments.json'
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
            ->type(CreatePrepaymentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will list a subscription's prepayments.
     *
     * @param array $options Array with all options for search
     *
     * @return PrepaymentsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPrepayments(array $options): PrepaymentsResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/prepayments.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $options)->extract('subscriptionId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('filter', $options)->commaSeparated()->extract('filter')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(PrepaymentsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Credit will be added to the subscription in the amount specified in the request body. The credit is
     * subsequently applied to the next generated invoice.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param IssueServiceCreditRequest|null $body
     *
     * @return ServiceCredit Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function issueServiceCredit(int $subscriptionId, ?IssueServiceCreditRequest $body = null): ServiceCredit
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/service_credits.json'
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
            ->type(ServiceCredit::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Credit will be removed from the subscription in the amount specified in the request body. The credit
     * amount being deducted must be equal to or less than the current credit balance.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param DeductServiceCreditRequest|null $body
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deductServiceCredit(int $subscriptionId, ?DeductServiceCreditRequest $body = null): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/service_credit_deductions.json'
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
            );

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will list a subscription's service credits.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int|null $page Result records are organized in pages. By default, the first page of
     *        results is displayed. The page parameter specifies a page number of results to fetch.
     *        You can start navigating through the pages to consume the results. You do this by
     *        passing in a page parameter. Retrieve the next page by adding ?page=2 to the query
     *        string. If there are no results to return, then an empty result set will be returned.
     *        Use in query `page=1`.
     * @param int|null $perPage This parameter indicates how many records to fetch in each request.
     *        Default value is 20. The maximum allowed values is 200; any per_page value over 200
     *        will be changed to 200.
     *        Use in query `per_page=200`.
     * @param string|null $direction Controls the order in which results are returned. Use in query
     *        `direction=asc`.
     *
     * @return ListServiceCreditsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listServiceCredits(
        int $subscriptionId,
        ?int $page = 1,
        ?int $perPage = 20,
        ?string $direction = null
    ): ListServiceCreditsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/service_credits/list.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                QueryParam::init('page', $page)->commaSeparated(),
                QueryParam::init('per_page', $perPage)->commaSeparated(),
                QueryParam::init('direction', $direction)
                    ->commaSeparated()
                    ->serializeBy([SortingDirection::class, 'checkValue'])
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
            ->type(ListServiceCreditsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint will refund, completely or partially, a particular prepayment applied to a
     * subscription. The `prepayment_id` will be the account transaction ID of the original payment. The
     * prepayment must have some amount remaining in order to be refunded.
     *
     * The amount may be passed either as a decimal, with `amount`, or an integer in cents, with
     * `amount_in_cents`.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $prepaymentId id of prepayment
     * @param RefundPrepaymentRequest|null $body
     *
     * @return PrepaymentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function refundPrepayment(
        int $subscriptionId,
        int $prepaymentId,
        ?RefundPrepaymentRequest $body = null
    ): PrepaymentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/prepayments/{prepayment_id}/refunds.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('prepayment_id', $prepaymentId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    RefundPrepaymentBaseErrorsResponseException::class
                )
            )
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.'
                )
            )
            ->type(PrepaymentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
