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
use AdvancedBillingLib\Exceptions\RefundPrepaymentAggregatedErrorsResponseException;
use AdvancedBillingLib\Exceptions\RefundPrepaymentBaseErrorsResponseException;
use AdvancedBillingLib\Models\AccountBalances;
use AdvancedBillingLib\Models\BasicDateField;
use AdvancedBillingLib\Models\CreatePrepaymentRequest;
use AdvancedBillingLib\Models\CreatePrepaymentResponse;
use AdvancedBillingLib\Models\DeductServiceCreditRequest;
use AdvancedBillingLib\Models\IssueServiceCreditRequest;
use AdvancedBillingLib\Models\PrepaymentResponse;
use AdvancedBillingLib\Models\PrepaymentsResponse;
use AdvancedBillingLib\Models\RefundPrepaymentRequest;
use AdvancedBillingLib\Models\ServiceCredit;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class SubscriptionInvoiceAccountController extends BaseController
{
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
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $options)->extract('subscriptionId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('filter[date_field]', $options)
                    ->commaSeparated()
                    ->extract('filterDateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('filter[start_date]', $options)
                    ->commaSeparated()
                    ->extract('filterStartDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[end_date]', $options)
                    ->commaSeparated()
                    ->extract('filterEndDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(PrepaymentsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

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
        )->auth('global')->parameters(TemplateParam::init('subscription_id', $subscriptionId)->required());

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
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(CreatePrepaymentResponse::class);

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
            ->auth('global')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(ServiceCredit::class);

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
     * @param string $prepaymentId id of prepayment
     * @param RefundPrepaymentRequest|null $body
     *
     * @return PrepaymentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function refundPrepayment(
        int $subscriptionId,
        string $prepaymentId,
        ?RefundPrepaymentRequest $body = null
    ): PrepaymentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/prepayments/{prepayment_id}/refunds.json'
        )
            ->auth('global')
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
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    RefundPrepaymentAggregatedErrorsResponseException::class
                )
            )
            ->type(PrepaymentResponse::class);

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
                    ErrorListResponseException::class
                )
            );

        $this->execute($_reqBuilder, $_resHandler);
    }
}
