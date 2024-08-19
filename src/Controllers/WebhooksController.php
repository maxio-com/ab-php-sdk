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
     * ## Webhooks Intro
     *
     * The Webhooks API allows you to view a list of all webhooks and to selectively resend individual or
     * groups of webhooks. Webhooks will be sent on endpoints specified by you. Endpoints can be added via
     * API or Web UI. There is also an option to enable / disable webhooks via API request.
     *
     * We recommend that you review Advanced Billing's webhook documentation located in our help site. The
     * following resources will help guide you on how to use webhooks in Advanced Billing, in addition to
     * these webhook endpoints:
     *
     * + [Adding/editing new webhooks](https://maxio.zendesk.com/hc/en-us/articles/24286723085197-
     * Webhooks#configure-webhook-url)
     * + [Webhooks introduction and delivery information](https://maxio.zendesk.com/hc/en-
     * us/articles/24266143173901-Webhooks-Overview)
     * + [Main webhook reference](https://maxio.zendesk.com/hc/en-us/articles/24266136649869-Webhooks-
     * Reference)
     * + [Available webhooks and payloads](https://maxio.zendesk.com/hc/en-us/articles/24266136649869-
     * Webhooks-Reference#events)
     *
     * ## List Webhooks for a Site
     *
     * This method allows you to fetch data about webhooks. You can pass query parameters if you want to
     * filter webhooks.
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
     * This method allows you to enable webhooks via API for your site
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
     * Posting to the replay endpoint does not immediately resend the webhooks. They are added to a queue
     * and will be sent as soon as possible, depending on available system resources.
     *
     * You may submit an array of up to 1000 webhook IDs to replay in the request.
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
     * The Chargify API allows you to create an endpoint and assign a list of webhooks subscriptions
     * (events) to it.
     *
     * You can check available events here.
     * [Event keys](https://maxio.zendesk.com/hc/en-us/articles/24266136649869-Webhooks-Reference#events)
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
     * This method returns created endpoints for site.
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
     * You can update an Endpoint via the API with a PUT request to the resource endpoint.
     *
     * You can change the `url` of your endpoint which consumes webhooks or list of `webhook_subscriptions`.
     * Check available [Event keys](https://maxio.zendesk.com/hc/en-us/articles/24266136649869-Webhooks-
     * Reference#events).
     *
     * Always send a complete list of events which you want subscribe/watch.
     * Sending an PUT request for existing endpoint with empty list of `webhook_subscriptions` will end
     * with unsubscribe from all events.
     *
     * If you want unsubscribe from specific event, just send a list of `webhook_subscriptions` without the
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
