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
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationItemRequest;
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationItemResponse;
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationRequest;
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationResponse;
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationsResponse;
use AdvancedBillingLib\Models\ScheduledRenewalLockInRequest;
use AdvancedBillingLib\Models\ScheduledRenewalUpdateRequest;
use AdvancedBillingLib\Models\Status;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class SubscriptionRenewalsController extends BaseController
{
    /**
     * Creates a scheduled renewal configuration for a subscription. The scheduled renewal is based on the
     * subscription’s current product and component setup.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param ScheduledRenewalConfigurationRequest|null $body
     *
     * @return ScheduledRenewalConfigurationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createScheduledRenewalConfiguration(
        int $subscriptionId,
        ?ScheduledRenewalConfigurationRequest $body = null
    ): ScheduledRenewalConfigurationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/scheduled_renewals.json'
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
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(ScheduledRenewalConfigurationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists scheduled renewal configurations for the subscription and permits an optional status query
     * filter.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param string|null $status (Optional) Status filter for scheduled renewal configurations.
     *
     * @return ScheduledRenewalConfigurationsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listScheduledRenewalConfigurations(
        int $subscriptionId,
        ?string $status = null
    ): ScheduledRenewalConfigurationsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/scheduled_renewals.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                QueryParam::init('status', $status)->commaSeparated()->serializeBy([Status::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(ScheduledRenewalConfigurationsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the configuration settings for the scheduled renewal.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param int $id The renewal id.
     *
     * @return ScheduledRenewalConfigurationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readScheduledRenewalConfiguration(
        int $subscriptionId,
        int $id
    ): ScheduledRenewalConfigurationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/subscriptions/{subscription_id}/scheduled_renewals/{id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('id', $id)->required()
            );

        $_resHandler = $this->responseHandler()->type(ScheduledRenewalConfigurationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates an existing configuration.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param int $id The renewal id.
     * @param ScheduledRenewalConfigurationRequest|null $body
     *
     * @return ScheduledRenewalConfigurationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateScheduledRenewalConfiguration(
        int $subscriptionId,
        int $id,
        ?ScheduledRenewalConfigurationRequest $body = null
    ): ScheduledRenewalConfigurationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/subscriptions/{subscription_id}/scheduled_renewals/{id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('id', $id)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(ScheduledRenewalConfigurationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Schedules a future lock-in date for the renewal.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param int $id The renewal id.
     * @param ScheduledRenewalLockInRequest|null $body
     *
     * @return ScheduledRenewalConfigurationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function scheduleScheduledRenewalLockIn(
        int $subscriptionId,
        int $id,
        ?ScheduledRenewalLockInRequest $body = null
    ): ScheduledRenewalConfigurationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/subscriptions/{subscription_id}/scheduled_renewals/{id}/schedule_lock_in.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('id', $id)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(ScheduledRenewalConfigurationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Locks in the renewal immediately.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param int $id The renewal id.
     *
     * @return ScheduledRenewalConfigurationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function lockInScheduledRenewalImmediately(
        int $subscriptionId,
        int $id
    ): ScheduledRenewalConfigurationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/subscriptions/{subscription_id}/scheduled_renewals/{id}/immediate_lock_in.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('id', $id)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(ScheduledRenewalConfigurationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a scheduled renewal configuration to an editable state.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param int $id The renewal id.
     *
     * @return ScheduledRenewalConfigurationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function unpublishScheduledRenewalConfiguration(
        int $subscriptionId,
        int $id
    ): ScheduledRenewalConfigurationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/subscriptions/{subscription_id}/scheduled_renewals/{id}/unpublish.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('id', $id)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(ScheduledRenewalConfigurationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Cancels a scheduled renewal configuration.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param int $id The renewal id.
     *
     * @return ScheduledRenewalConfigurationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cancelScheduledRenewalConfiguration(
        int $subscriptionId,
        int $id
    ): ScheduledRenewalConfigurationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/subscriptions/{subscription_id}/scheduled_renewals/{id}/cancel.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('id', $id)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(ScheduledRenewalConfigurationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Adds product and component line items to the scheduled renewal.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param int $scheduledRenewalsConfigurationId The scheduled renewal configuration id.
     * @param ScheduledRenewalConfigurationItemRequest|null $body
     *
     * @return ScheduledRenewalConfigurationItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createScheduledRenewalConfigurationItem(
        int $subscriptionId,
        int $scheduledRenewalsConfigurationId,
        ?ScheduledRenewalConfigurationItemRequest $body = null
    ): ScheduledRenewalConfigurationItemResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/scheduled_renewals/{scheduled_renewals_configurat' .
            'ion_id}/configuration_items.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('scheduled_renewals_configuration_id', $scheduledRenewalsConfigurationId)
                    ->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(ScheduledRenewalConfigurationItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates an existing configuration item’s pricing and quantity.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param int $scheduledRenewalsConfigurationId The scheduled renewal configuration id.
     * @param int $id The scheduled renewal configuration item id.
     * @param ScheduledRenewalUpdateRequest|null $body
     *
     * @return ScheduledRenewalConfigurationItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateScheduledRenewalConfigurationItem(
        int $subscriptionId,
        int $scheduledRenewalsConfigurationId,
        int $id,
        ?ScheduledRenewalUpdateRequest $body = null
    ): ScheduledRenewalConfigurationItemResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/subscriptions/{subscription_id}/scheduled_renewals/{scheduled_renewals_configurat' .
            'ion_id}/configuration_items/{id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('scheduled_renewals_configuration_id', $scheduledRenewalsConfigurationId)
                    ->required(),
                TemplateParam::init('id', $id)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            )
            ->type(ScheduledRenewalConfigurationItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Removes an item from the pending renewal configuration.
     *
     * @param int $subscriptionId The Chargify id of the subscription.
     * @param int $scheduledRenewalsConfigurationId The scheduled renewal configuration id.
     * @param int $id The scheduled renewal configuration item id.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteScheduledRenewalConfigurationItem(
        int $subscriptionId,
        int $scheduledRenewalsConfigurationId,
        int $id
    ): void {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/subscriptions/{subscription_id}/scheduled_renewals/{scheduled_renewals_configurat' .
            'ion_id}/configuration_items/{id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('scheduled_renewals_configuration_id', $scheduledRenewalsConfigurationId)
                    ->required(),
                TemplateParam::init('id', $id)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', ErrorListResponseException::class)
            );

        $this->execute($_reqBuilder, $_resHandler);
    }
}
