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
use AdvancedBillingLib\Models\DeductServiceCreditRequest;
use AdvancedBillingLib\Models\IssueServiceCreditRequest;
use AdvancedBillingLib\Models\ListSubscriptionGroupPrepaymentDateField;
use AdvancedBillingLib\Models\ListSubscriptionGroupPrepaymentResponse;
use AdvancedBillingLib\Models\ServiceCredit;
use AdvancedBillingLib\Models\ServiceCreditResponse;
use AdvancedBillingLib\Models\SubscriptionGroupPrepaymentRequest;
use AdvancedBillingLib\Models\SubscriptionGroupPrepaymentResponse;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class SubscriptionGroupInvoiceAccountController extends BaseController
{
    /**
     * A prepayment can be added for a subscription group identified by the group's `uid`. This endpoint
     * requires a `amount`, `details`, `method`, and `memo`. On success, the prepayment will be added to
     * the group's prepayment balance.
     *
     * @param string $uid The uid of the subscription group
     * @param SubscriptionGroupPrepaymentRequest|null $body
     *
     * @return SubscriptionGroupPrepaymentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSubscriptionGroupPrepayment(
        string $uid,
        ?SubscriptionGroupPrepaymentRequest $body = null
    ): SubscriptionGroupPrepaymentResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscription_groups/{uid}/prepayments.json')
            ->auth('BasicAuth')
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
                    ErrorListResponseException::class
                )
            )
            ->type(SubscriptionGroupPrepaymentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will list a subscription group's prepayments.
     *
     * @param array $options Array with all options for search
     *
     * @return ListSubscriptionGroupPrepaymentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPrepaymentsForSubscriptionGroup(array $options): ListSubscriptionGroupPrepaymentResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscription_groups/{uid}/prepayments.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('uid', $options)->extract('uid')->required(),
                QueryParam::init('filter[date_field]', $options)
                    ->commaSeparated()
                    ->extract('filterDateField')
                    ->serializeBy([ListSubscriptionGroupPrepaymentDateField::class, 'checkValue']),
                QueryParam::init('filter[end_date]', $options)
                    ->commaSeparated()
                    ->extract('filterEndDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[start_date]', $options)
                    ->commaSeparated()
                    ->extract('filterStartDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(ListSubscriptionGroupPrepaymentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Credit can be issued for a subscription group identified by the group's `uid`. Credit will be added
     * to the group in the amount specified in the request body. The credit will be applied to group member
     * invoices as they are generated.
     *
     * @param string $uid The uid of the subscription group
     * @param IssueServiceCreditRequest|null $body
     *
     * @return ServiceCreditResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function issueSubscriptionGroupServiceCredit(
        string $uid,
        ?IssueServiceCreditRequest $body = null
    ): ServiceCreditResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscription_groups/{uid}/service_credits.json'
        )
            ->auth('BasicAuth')
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
                    ErrorListResponseException::class
                )
            )
            ->type(ServiceCreditResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Credit can be deducted for a subscription group identified by the group's `uid`. Credit will be
     * deducted from the group in the amount specified in the request body.
     *
     * @param string $uid The uid of the subscription group
     * @param DeductServiceCreditRequest|null $body
     *
     * @return ServiceCredit Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deductSubscriptionGroupServiceCredit(
        string $uid,
        ?DeductServiceCreditRequest $body = null
    ): ServiceCredit {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscription_groups/{uid}/service_credit_deductions.json'
        )
            ->auth('BasicAuth')
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
                    ErrorListResponseException::class
                )
            )
            ->type(ServiceCredit::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
