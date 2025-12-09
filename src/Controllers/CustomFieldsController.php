<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\SingleErrorResponseException;
use AdvancedBillingLib\Models\BasicDateField;
use AdvancedBillingLib\Models\CreateMetadataRequest;
use AdvancedBillingLib\Models\CreateMetafieldsRequest;
use AdvancedBillingLib\Models\ListMetafieldsResponse;
use AdvancedBillingLib\Models\Metadata;
use AdvancedBillingLib\Models\Metafield;
use AdvancedBillingLib\Models\PaginatedMetadata;
use AdvancedBillingLib\Models\ResourceType;
use AdvancedBillingLib\Models\SortingDirection;
use AdvancedBillingLib\Models\UpdateMetadataRequest;
use AdvancedBillingLib\Models\UpdateMetafieldsRequest;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class CustomFieldsController extends BaseController
{
    /**
     * Creates metafields on a Site for either the Subscriptions or Customers resource.
     *
     * Metafields and their metadata are created in the Custom Fields configuration page on your Site.
     * Metafields can be populated with metadata when you create them or later with the [Update
     * Metafield]($e/Custom%20Fields/updateMetafield), [Create Metadata]($e/Custom%20Fields/createMetadata),
     * or [Update Metadata]($e/Custom%20Fields/updateMetadata) endpoints. The Create Metadata and Update
     * Metadata endpoints allow you to add metafields and metadata values to a specific subscription or
     * customer.
     *
     * Each site is limited to 100 unique metafields per resource. This means you can have 100 metafields
     * for Subscriptions and another 100 for Customers.
     *
     * > Note: After creating a metafield, the resource type cannot be modified.
     *
     * In the UI and product documentation, metafields and metadata are called Custom Fields.
     *
     * - Metafield is the custom field
     * - Metadata is the data populating the custom field.
     *
     * See [Custom Fields Reference](https://docs.maxio.com/hc/en-us/articles/24266140850573-Custom-Fields-
     * Reference) and [Custom Fields Tab](https://maxio.zendesk.com/hc/en-us/articles/24251701302925-
     * Subscription-Summary-Custom-Fields-Tab) for information on using Custom Fields in the Advanced
     * Billing UI.
     *
     * @param string $resourceType The resource type to which the metafields belong.
     * @param CreateMetafieldsRequest|null $body
     *
     * @return Metafield[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createMetafields(string $resourceType, ?CreateMetafieldsRequest $body = null): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/{resource_type}/metafields.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
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
            )
            ->type(Metafield::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists the metafields and their associated details for a Site and resource type. You can filter the
     * request to a specific metafield.
     *
     * @param array $options Array with all options for search
     *
     * @return ListMetafieldsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listMetafields(array $options): ListMetafieldsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{resource_type}/metafields.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('resource_type', $options)
                    ->extract('resourceType')
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                QueryParam::init('name', $options)->commaSeparated()->extract('name'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction')
                    ->serializeBy([SortingDirection::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(ListMetafieldsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates metafields on your Site for a resource type.  Depending on the request structure, you can
     * update or add metafields and metadata to the Subscriptions or Customers resource.
     *
     * With this endpoint, you can:
     *
     * - Add metafields. If the metafield specified in current_name does not exist, a new metafield is
     * added.
     * >Note: Each site is limited to 100 unique metafields per resource. This means you can have 100
     * metafields for Subscriptions and another 100 for Customers.
     *
     * - Change the name of a metafield.
     * >Note: To keep the metafield name the same and only update the metadata for the metafield, you
     * must use the current metafield name in both the `current_name` and `name` parameters.
     *
     * - Change the input type for the metafield. For example, you can change a metafield input type from
     * text to a dropdown. If you change the input type from text to a dropdown or radio, you must update
     * the specific subscriptions or customers where the metafield was used to reflect the updated
     * metafield and metadata.
     *
     * - Add metadata values to the existing metadata for a dropdown or radio metafield.
     * >Note: Updates to metadata overwrite. To add one or more values, you must specify all metadata
     * values including the new value you want to add.
     *
     * - Add new metadata to a dropdown or radio for a metafield that was created without metadata.
     *
     * - Remove  metadata for a dropdown or radio for a metafield.
     * >Note: Updates to metadata overwrite existing values. To remove one or more values, specify all
     * metadata values except those you want to remove.
     *
     * - Add or update scope settings for a metafield.
     * >Note: Scope changes overwrite existing settings. You must specify the complete scope, including
     * the changes you want to make.
     *
     * @param string $resourceType The resource type to which the metafields belong.
     * @param UpdateMetafieldsRequest|null $body
     *
     * @return Metafield[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateMetafield(string $resourceType, ?UpdateMetafieldsRequest $body = null): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/{resource_type}/metafields.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
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
            )
            ->type(Metafield::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes a metafield from your Site. Removes the metafield and associated metadata from all
     * Subscriptions or Customers resources on the Site.
     *
     * @param string $resourceType The resource type to which the metafields belong.
     * @param string|null $name The name of the metafield to be deleted
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteMetafield(string $resourceType, ?string $name = null): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/{resource_type}/metafields.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                QueryParam::init('name', $name)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates metadata and metafields for a specific subscription or customer, or updates metadata values
     * of existing metafields for a subscription or customer. Metadata values are limited to 2 KB in size.
     *
     * If you create metadata on a subscription or customer with a metafield that does not already exist,
     * the metafield is created with the metadata you specify and it is always added as a text field. You
     * can update the input_type for the metafield with the [Update
     * Metafield]($e/Custom%20Fields/updateMetafield) endpoint.
     *
     * >Note: Each site is limited to 100 unique metafields per resource. This means you can have 100
     * metafields for Subscriptions and another 100 for Customers.
     *
     * @param string $resourceType The resource type to which the metafields belong.
     * @param int $resourceId The Advanced Billing id of the customer or the subscription for which
     *        the metadata applies
     * @param CreateMetadataRequest|null $body
     *
     * @return Metadata[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createMetadata(string $resourceType, int $resourceId, ?CreateMetadataRequest $body = null): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/{resource_type}/{resource_id}/metadata.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                TemplateParam::init('resource_id', $resourceId)->required(),
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
            )
            ->type(Metadata::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists metadata and metafields for a specific customer or subscription.
     *
     * @param array $options Array with all options for search
     *
     * @return PaginatedMetadata Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listMetadata(array $options): PaginatedMetadata
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{resource_type}/{resource_id}/metadata.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('resource_type', $options)
                    ->extract('resourceType')
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                TemplateParam::init('resource_id', $options)->extract('resourceId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20)
            );

        $_resHandler = $this->responseHandler()->type(PaginatedMetadata::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates metadata and metafields on the Site and the customer or subscription specified, and updates
     * the metadata value on a subscription or customer.
     *
     * If you update metadata on a subscription or customer with a metafield that does not already exist,
     * the metafield is created with the metadata you specify and it is always added as a text field to the
     * Site and to the subscription or customer you specify. You can update the input_type for the
     * metafield with the Update Metafield endpoint.
     *
     * Each site is limited to 100 unique metafields per resource. This means you can have 100 metafields
     * for Subscription and another 100 for Customer.
     *
     * @param string $resourceType The resource type to which the metafields belong.
     * @param int $resourceId The Advanced Billing id of the customer or the subscription for which
     *        the metadata applies
     * @param UpdateMetadataRequest|null $body
     *
     * @return Metadata[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateMetadata(string $resourceType, int $resourceId, ?UpdateMetadataRequest $body = null): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/{resource_type}/{resource_id}/metadata.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                TemplateParam::init('resource_id', $resourceId)->required(),
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
            )
            ->type(Metadata::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes one or more metafields (and associated metadata) from the specified subscription or customer.
     *
     * @param string $resourceType The resource type to which the metafields belong.
     * @param int $resourceId The Advanced Billing id of the customer or the subscription for which
     *        the metadata applies
     * @param string|null $name Name of field to be removed.
     * @param string[]|null $names Names of fields to be removed. Use in query:
     *        `names[]=field1&names[]=my-field&names[]=another-field`.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteMetadata(
        string $resourceType,
        int $resourceId,
        ?string $name = null,
        ?array $names = null
    ): void {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/{resource_type}/{resource_id}/metadata.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                TemplateParam::init('resource_id', $resourceId)->required(),
                QueryParam::init('name', $name)->unIndexed(),
                QueryParam::init('names', $names)->unIndexed()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists  metadata for a specified array of subscriptions or customers.
     *
     * @param array $options Array with all options for search
     *
     * @return PaginatedMetadata Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listMetadataForResourceType(array $options): PaginatedMetadata
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{resource_type}/metadata.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('resource_type', $options)
                    ->extract('resourceType')
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                QueryParam::init('page', $options)->unIndexed()->extract('page', 1),
                QueryParam::init('per_page', $options)->unIndexed()->extract('perPage', 20),
                QueryParam::init('date_field', $options)
                    ->unIndexed()
                    ->extract('dateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
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
                QueryParam::init('with_deleted', $options)->unIndexed()->extract('withDeleted'),
                QueryParam::init('resource_ids', $options)->unIndexed()->extract('resourceIds'),
                QueryParam::init('direction', $options)
                    ->unIndexed()
                    ->extract('direction')
                    ->serializeBy([SortingDirection::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(PaginatedMetadata::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
