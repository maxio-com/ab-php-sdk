<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\SubscriptionNoteResponse;
use AdvancedBillingLib\Models\UpdateSubscriptionNoteRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;

class SubscriptionNotesController extends BaseController
{
    /**
     * Use the following method to create a note for a subscription.
     *
     * ## How to Use Subscription Notes
     *
     * Notes allow you to record information about a particular Subscription in a free text format.
     *
     * If you have structured data such as birth date, color, etc., consider using Metadata instead.
     *
     * Full documentation on how to use Notes in the Chargify UI can be located [here](https://maxio-
     * chargify.zendesk.com/hc/en-us/articles/5404434903181-Subscription-Summary#notes).
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param UpdateSubscriptionNoteRequest|null $body
     *
     * @return SubscriptionNoteResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSubscriptionNote(
        int $subscriptionId,
        ?UpdateSubscriptionNoteRequest $body = null
    ): SubscriptionNoteResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/{subscription_id}/notes.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(SubscriptionNoteResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this method to retrieve a list of Notes associated with a Subscription. The response will be an
     * array of Notes.
     *
     * @param array $options Array with all options for search
     *
     * @return SubscriptionNoteResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSubscriptionNotes(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions/{subscription_id}/notes.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $options)->extract('subscriptionId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20)
            );

        $_resHandler = $this->responseHandler()->type(SubscriptionNoteResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Once you have obtained the ID of the note you wish to read, use this method to show a particular
     * note attached to a subscription.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $noteId The Chargify id of the note
     *
     * @return SubscriptionNoteResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readSubscriptionNote(int $subscriptionId, int $noteId): SubscriptionNoteResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/notes/{note_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('note_id', $noteId)->required()
            );

        $_resHandler = $this->responseHandler()->type(SubscriptionNoteResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use the following method to update a note for a Subscription.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $noteId The Chargify id of the note
     * @param UpdateSubscriptionNoteRequest|null $body
     *
     * @return SubscriptionNoteResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateSubscriptionNote(
        int $subscriptionId,
        int $noteId,
        ?UpdateSubscriptionNoteRequest $body = null
    ): SubscriptionNoteResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/subscriptions/{subscription_id}/notes/{note_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('note_id', $noteId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(SubscriptionNoteResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use the following method to delete a note for a Subscription.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $noteId The Chargify id of the note
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteSubscriptionNote(int $subscriptionId, int $noteId): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/subscriptions/{subscription_id}/notes/{note_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('note_id', $noteId)->required()
            );

        $this->execute($_reqBuilder);
    }
}
