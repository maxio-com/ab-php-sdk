<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
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
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class CustomFieldsController extends BaseController
{
    /**
     * ## Custom Fields: Metafield Intro
     *
     * **Chargify refers to Custom Fields in the API documentation as metafields and metadata.** Within the
     * Chargify UI, metadata and metafields are grouped together under the umbrella of "Custom Fields." All
     * of our UI-based documentation that references custom fields will not cite the terminology metafields
     * or metadata.
     *
     * + **Metafield is the custom field**
     * + **Metadata is the data populating the custom field.**
     *
     * Chargify Metafields are used to add meaningful attributes to subscription and customer resources.
     * Full documentation on how to create Custom Fields in the Chargify UI can be located [here](https:
     * //maxio-chargify.zendesk.com/hc/en-us/articles/5405332553613-Custom-Fields-Reference). For
     * additional documentation on how to record data within custom fields, please see our subscription-
     * based documentation [here.](https://maxio-chargify.zendesk.com/hc/en-us/articles/5404434903181-
     * Subscription-Summary#custom-fields)
     *
     * Metafield are the place where you will set up your resource to accept additional data. It is scoped
     * to the site instead of a specific customer or subscription. Think of it as the key, and Metadata as
     * the value on every record.
     *
     * ## Create Metafields
     *
     * Use this endpoint to create metafields for your Site. Metafields can be populated with metadata
     * after the fact.
     *
     * Each site is limited to 100 unique Metafields (i.e. keys, or names) per resource. This means you can
     * have 100 Metafields for Subscription and another 100 for Customer.
     *
     * ### Metafields "On-the-Fly"
     *
     * It is possible to create Metafields “on the fly” when you create your Metadata – if a non-existant
     * name is passed when creating Metadata, a Metafield for that key will be automatically created. The
     * Metafield API, however, gives you more control over your “keys”.
     *
     * ### Metafield Scope Warning
     *
     * If configuring metafields in the Admin UI or via the API, be careful sending updates to metafields
     * with the scope attribute – **if a partial update is sent it will overwrite the current
     * configuration**.
     *
     * @param string $resourceType the resource type to which the metafields belong
     * @param CreateMetafieldsRequest|null $body
     *
     * @return Metafield[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createMetafields(string $resourceType, ?CreateMetafieldsRequest $body = null): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/{resource_type}/metafields.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(Metafield::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint lists metafields associated with a site. The metafield description and usage is
     * contained in the response.
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
            ->auth('global')
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
     * Use the following method to update metafields for your Site. Metafields can be populated with
     * metadata after the fact.
     *
     * @param string $resourceType the resource type to which the metafields belong
     * @param string $name Name of the custom field.
     * @param string|null $currentName This only applies when you are updating an existing record
     *        and you wish to rename the field. Note you must supply name and current_name to
     *        rename the field
     * @param UpdateMetafieldsRequest|null $body
     *
     * @return Metafield[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateMetafield(
        string $resourceType,
        string $name,
        ?string $currentName = null,
        ?UpdateMetafieldsRequest $body = null
    ): array {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/{resource_type}/metafields.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                QueryParam::init('name', $name)->commaSeparated()->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                QueryParam::init('current_name', $currentName)->commaSeparated(),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(Metafield::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use the following method to delete a metafield. This will remove the metafield from the Site.
     *
     * Additionally, this will remove the metafield and associated metadata with all Subscriptions on the
     * Site.
     *
     * @param string $resourceType the resource type to which the metafields belong
     * @param string|null $name The name of the metafield to be deleted
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteMetafield(string $resourceType, ?string $name = null): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/{resource_type}/metafields.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                QueryParam::init('name', $name)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()->throwErrorOn('404', ErrorType::init('Not Found'));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * ## Custom Fields: Metadata Intro
     *
     * **Chargify refers to Custom Fields in the API documentation as metafields and metadata.** Within the
     * Chargify UI, metadata and metafields are grouped together under the umbrella of "Custom Fields." All
     * of our UI-based documentation that references custom fields will not cite the terminology metafields
     * or metadata.
     *
     * + **Metafield is the custom field**
     * + **Metadata is the data populating the custom field.**
     *
     * Chargify Metafields are used to add meaningful attributes to subscription and customer resources.
     * Full documentation on how to create Custom Fields in the Chargify UI can be located [here](https:
     * //chargify.zendesk.com/hc/en-us/articles/4407659856411). For additional documentation on how to
     * record data within custom fields, please see our subscription-based documentation [here.](https:
     * //chargify.zendesk.com/hc/en-us/articles/4407884887835#custom-fields)
     *
     * Metadata is associated to a customer or subscription, and corresponds to a Metafield. When creating
     * a new metadata object for a given record, **if the metafield is not present it will be created**.
     *
     * ## Metadata limits
     *
     * Metadata values are limited to 2kB in size. Additonally, there are limits on the number of unique
     * metafields available per resource.
     *
     * ## Create Metadata
     *
     * This method will create a metafield for the site on the fly if it does not already exist, and
     * populate the metadata value.
     *
     * ### Subscription or Customer Resource
     *
     * Please pay special attention to the resource you use when creating metadata.
     *
     * @param string $resourceType the resource type to which the metafields belong
     * @param string $resourceId The Chargify id of the customer or the subscription for which the
     *        metadata applies
     * @param string|null $value Can be a single item or a list of metadata
     * @param CreateMetadataRequest|null $body
     *
     * @return Metadata[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createMetadata(
        string $resourceType,
        string $resourceId,
        ?string $value = null,
        ?CreateMetadataRequest $body = null
    ): array {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/{resource_type}/{resource_id}/metadata.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                TemplateParam::init('resource_id', $resourceId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                QueryParam::init('value', $value)->commaSeparated(),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(Metadata::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will list all of the metadata belonging to a particular resource (ie. subscription,
     * customer) that is specified.
     *
     * ## Metadata Data
     *
     * This endpoint will also display the current stats of your metadata to use as a tool for pagination.
     *
     * @param array $options Array with all options for search
     *
     * @return PaginatedMetadata Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readMetadata(array $options): PaginatedMetadata
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{resource_type}/{resource_id}/metadata.json')
            ->auth('global')
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
     * This method allows you to update the existing metadata associated with a subscription or customer.
     *
     * @param string $resourceType the resource type to which the metafields belong
     * @param string $resourceId The Chargify id of the customer or the subscription for which the
     *        metadata applies
     * @param string|null $value Can be a single item or a list of metadata
     * @param UpdateMetadataRequest|null $body
     *
     * @return Metadata[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateMetadata(
        string $resourceType,
        string $resourceId,
        ?string $value = null,
        ?UpdateMetadataRequest $body = null
    ): array {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/{resource_type}/{resource_id}/metadata.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                TemplateParam::init('resource_id', $resourceId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                QueryParam::init('value', $value)->commaSeparated(),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(Metadata::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method removes the metadata from the subscriber/customer cited.
     *
     * ## Query String Usage
     *
     * For instance if you wanted to delete the metadata for customer 99 named weight you would request:
     *
     * ```
     * https://acme.chargify.com/customers/99/metadata.json?name=weight
     * ```
     *
     * If you want to delete multiple metadata fields for a customer 99 named: `weight` and `age` you
     * wrould request:
     * ```
     * https://acme.chargify.com/customers/99/metadata.json?names[]=weight&names[]=age
     * ```
     *
     * ## Successful Response
     *
     * For a success, there will be a code `200` and the plain text response `true`.
     *
     * ## Unsuccessful Response
     *
     * When a failed response is encountered, you will receive a `404` response and the plain text response
     * of `true`.
     *
     * @param string $resourceType the resource type to which the metafields belong
     * @param string $resourceId The Chargify id of the customer or the subscription for which the
     *        metadata applies
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
        string $resourceId,
        ?string $name = null,
        ?array $names = null
    ): void {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/{resource_type}/{resource_id}/metadata.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('resource_type', $resourceType)
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                TemplateParam::init('resource_id', $resourceId)->required(),
                QueryParam::init('name', $name)->plain(),
                QueryParam::init('names[]', $names)->plain()
            );

        $_resHandler = $this->responseHandler()->throwErrorOn('404', ErrorType::init('Not Found'));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method will provide you information on usage of metadata across your selected resource (ie.
     * subscriptions, customers)
     *
     * ## Metadata Data
     *
     * This endpoint will also display the current stats of your metadata to use as a tool for pagination.
     *
     * ### Metadata for multiple records
     *
     * `https://acme.chargify.com/subscriptions/metadata.json?resource_ids[]=1&resource_ids[]=2`
     *
     * ## Read Metadata for a Site
     *
     * This endpoint will list the number of pages of metadata information that are contained within a site.
     *
     * @param array $options Array with all options for search
     *
     * @return PaginatedMetadata Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listMetadata(array $options): PaginatedMetadata
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{resource_type}/metadata.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('resource_type', $options)
                    ->extract('resourceType')
                    ->required()
                    ->serializeBy([ResourceType::class, 'checkValue']),
                QueryParam::init('page', $options)->plain()->extract('page', 1),
                QueryParam::init('per_page', $options)->plain()->extract('perPage', 20),
                QueryParam::init('date_field', $options)
                    ->plain()
                    ->extract('dateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('start_date', $options)->plain()->extract('startDate'),
                QueryParam::init('end_date', $options)->plain()->extract('endDate'),
                QueryParam::init('start_datetime', $options)->plain()->extract('startDatetime'),
                QueryParam::init('end_datetime', $options)->plain()->extract('endDatetime'),
                QueryParam::init('with_deleted', $options)->plain()->extract('withDeleted'),
                QueryParam::init('resource_ids[]', $options)->plain()->extract('resourceIds'),
                QueryParam::init('direction', $options)
                    ->plain()
                    ->extract('direction')
                    ->serializeBy([SortingDirection::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(PaginatedMetadata::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
