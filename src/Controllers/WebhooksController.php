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
use AdvancedBillingLib\Models\CreateOrUpdateEndpointRequest;
use AdvancedBillingLib\Models\EnableWebhooksRequest;
use AdvancedBillingLib\Models\EnableWebhooksResponse;
use AdvancedBillingLib\Models\Endpoint;
use AdvancedBillingLib\Models\EndpointResponse;
use AdvancedBillingLib\Models\ReplayWebhooksRequest;
use AdvancedBillingLib\Models\ReplayWebhooksResponse;
use AdvancedBillingLib\Models\WebhookOrder;
use AdvancedBillingLib\Models\WebhookResponse;
use AdvancedBillingLib\Models\WebhookStatus;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class WebhooksController extends BaseController
{
    /**
     * Allows you to view a list of webhooks.  You can pass query parameters if you want to filter webhooks.
     * See the [Webhooks](page:introduction/webhooks/webhooks) documentation for more information.
     *
     * @param array $options Array with all options for search
     *
     * @return WebhookResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listWebhooks(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/webhooks.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('status', $options)
                    ->commaSeparated()
                    ->extract('status')
                    ->serializeBy([WebhookStatus::class, 'checkValue']),
                QueryParam::init('since_date', $options)->commaSeparated()->extract('sinceDate'),
                QueryParam::init('until_date', $options)->commaSeparated()->extract('untilDate'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('order', $options)
                    ->commaSeparated()
                    ->extract('order')
                    ->serializeBy([WebhookOrder::class, 'checkValue']),
                QueryParam::init('subscription', $options)->commaSeparated()->extract('subscription')
            );

        $_resHandler = $this->responseHandler()->type(WebhookResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Allows you to enable webhooks for your site
     *
     * @param EnableWebhooksRequest|null $body
     *
     * @return EnableWebhooksResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function enableWebhooks(?EnableWebhooksRequest $body = null): EnableWebhooksResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/webhooks/settings.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(EnableWebhooksResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Replays webhooks. Posting to this endpoint does not immediately resend the webhooks. They are added
     * to a queue and sent as soon as possible, depending on available system resources. You can submit an
     * array of up to 1000 webhook IDs in the replay request.
     *
     * @param ReplayWebhooksRequest|null $body
     *
     * @return ReplayWebhooksResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function replayWebhooks(?ReplayWebhooksRequest $body = null): ReplayWebhooksResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/webhooks/replay.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()->type(ReplayWebhooksResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates an endpoint and assigns a list of webhooks subscriptions (events) to it.
     * See the [Webhooks Reference](page:introduction/webhooks/webhooks-reference#events) page for
     * available events.
     *
     * @param CreateOrUpdateEndpointRequest|null $body
     *
     * @return EndpointResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createEndpoint(?CreateOrUpdateEndpointRequest $body = null): EndpointResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/endpoints.json')
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
            ->type(EndpointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns created endpoints for a site.
     *
     * @return Endpoint[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listEndpoints(): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/endpoints.json')->auth('BasicAuth');

        $_resHandler = $this->responseHandler()->type(Endpoint::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates an Endpoint. You can change the `url` of your endpoint or the list of
     * `webhook_subscriptions` to which you are subscribed. See the [Webhooks Reference](page:
     * introduction/webhooks/webhooks-reference#events) page for available events.
     *
     * Always send a complete list of events to which you want to subscribe. Sending a PUT request for an
     * existing endpoint with an empty list of `webhook_subscriptions` will unsubscribe all events.
     *
     * If you want unsubscribe from a specific event, send a list of `webhook_subscriptions` without the
     * specific event key.
     *
     * @param int $endpointId The Advanced Billing id for the endpoint that should be updated
     * @param CreateOrUpdateEndpointRequest|null $body
     *
     * @return EndpointResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateEndpoint(int $endpointId, ?CreateOrUpdateEndpointRequest $body = null): EndpointResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/endpoints/{endpoint_id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('endpoint_id', $endpointId)->required(),
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
            ->type(EndpointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
