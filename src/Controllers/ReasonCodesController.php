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
use AdvancedBillingLib\Models\CreateReasonCodeRequest;
use AdvancedBillingLib\Models\OkResponse;
use AdvancedBillingLib\Models\ReasonCodeResponse;
use AdvancedBillingLib\Models\UpdateReasonCodeRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class ReasonCodesController extends BaseController
{
    /**
     * Creates a reason code for a given site.
     *
     * # Reason Codes Intro
     *
     * Reason Codes are a way to gain a high-level view of why your customers are cancelling the
     * subscription to your product or service.
     *
     * Add a set of churn reason codes to be displayed in-app and/or the Maxio Billing Portal. As your
     * subscribers decide to cancel their subscription, learn why they decided to cancel.
     *
     * ## Reason Code Documentation
     *
     * Full documentation on how Reason Codes operate within Advanced Billing can be located under the
     * following links.
     *
     * [Churn Reason Codes](https://maxio.zendesk.com/hc/en-us/articles/24286647554701-Churn-Reason-Codes)
     *
     * ## Create Reason Code
     *
     * This method gives a merchant the option to create reason codes for a given site.
     *
     * @param CreateReasonCodeRequest|null $body
     *
     * @return ReasonCodeResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createReasonCode(?CreateReasonCodeRequest $body = null): ReasonCodeResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/reason_codes.json')
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
            ->type(ReasonCodeResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists all current churn codes for a given site.
     *
     * @param array $options Array with all options for search
     *
     * @return ReasonCodeResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listReasonCodes(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/reason_codes.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ReasonCodeResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a particular churn reason code for a given site by its unique ID.
     *
     * @param int $reasonCodeId The Advanced Billing id of the reason code
     *
     * @return ReasonCodeResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readReasonCode(int $reasonCodeId): ReasonCodeResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/reason_codes/{reason_code_id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('reason_code_id', $reasonCodeId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(ReasonCodeResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates an existing reason code for a given site.
     *
     * @param int $reasonCodeId The Advanced Billing id of the reason code
     * @param UpdateReasonCodeRequest|null $body
     *
     * @return ReasonCodeResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateReasonCode(int $reasonCodeId, ?UpdateReasonCodeRequest $body = null): ReasonCodeResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/reason_codes/{reason_code_id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('reason_code_id', $reasonCodeId)->required(),
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
            ->type(ReasonCodeResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes a reason code from the Churn Reason Codes. This code will be immediately removed. This
     * action is not reversible.
     *
     * @param int $reasonCodeId The Advanced Billing id of the reason code
     *
     * @return OkResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteReasonCode(int $reasonCodeId): OkResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/reason_codes/{reason_code_id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('reason_code_id', $reasonCodeId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->type(OkResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
