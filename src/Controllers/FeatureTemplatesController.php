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
use AdvancedBillingLib\Models\CreateFeatureTemplateRequest;
use AdvancedBillingLib\Models\FeatureTemplateResponse;
use AdvancedBillingLib\Models\FeatureTemplatesListResponse;
use AdvancedBillingLib\Models\Kind;
use AdvancedBillingLib\Models\SortBy;
use AdvancedBillingLib\Models\SortDirection;
use AdvancedBillingLib\Models\Status1;
use AdvancedBillingLib\Models\UpdateFeatureTemplateRequest;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class FeatureTemplatesController extends BaseController
{
    /**
     * Lists the feature templates defined for your site, active (non-archived) ones by default. Pass
     * `status=archived` or `status=all` to widen the result set.
     *
     * Supply `page` or `per_page` to paginate. Without either parameter, the response includes the full
     * result set.
     *
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
     * @param string|null $status Filters by archived state. Defaults to `active` (non-archived
     *        templates only).
     * @param string|null $q Filters to feature templates whose name contains this substring
     *        (case-insensitive).
     * @param string|null $kind Filters by feature kind.
     * @param \DateTime|null $updatedFrom Returns feature templates updated on or after this date.
     * @param \DateTime|null $updatedTo Returns feature templates updated on or before this date.
     * @param string|null $sortBy The field to sort results by.
     * @param string|null $sortDirection The sort direction of the returned feature templates.
     *
     * @return FeatureTemplatesListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listFeatureTemplates(
        ?int $page = 1,
        ?int $perPage = 20,
        ?string $status = Status1::ACTIVE,
        ?string $q = null,
        ?string $kind = null,
        ?\DateTime $updatedFrom = null,
        ?\DateTime $updatedTo = null,
        ?string $sortBy = SortBy::NAME,
        ?string $sortDirection = SortDirection::ASC
    ): FeatureTemplatesListResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/features.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('page', $page)->commaSeparated(),
                QueryParam::init('per_page', $perPage)->commaSeparated(),
                QueryParam::init('status', $status)->commaSeparated()->serializeBy([Status1::class, 'checkValue']),
                QueryParam::init('q', $q)->commaSeparated(),
                QueryParam::init('kind', $kind)->commaSeparated()->serializeBy([Kind::class, 'checkValue']),
                QueryParam::init('updated_from', $updatedFrom)
                    ->commaSeparated()
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('updated_to', $updatedTo)
                    ->commaSeparated()
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('sort_by', $sortBy)->commaSeparated()->serializeBy([SortBy::class, 'checkValue']),
                QueryParam::init('sort_direction', $sortDirection)
                    ->commaSeparated()
                    ->serializeBy([SortDirection::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorListResponseException::class))
            ->type(FeatureTemplatesListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Defines a new feature at the site level. Feature templates aren't billable on their own. Attach a
     * template to products or components to grant the feature to subscribers.
     *
     * @param CreateFeatureTemplateRequest|null $body
     *
     * @return FeatureTemplateResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createFeatureTemplate(?CreateFeatureTemplateRequest $body = null): FeatureTemplateResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/features.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorListResponseException::class))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(FeatureTemplateResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a single feature template. Archived feature templates are not addressable here and return
     * `404`. Restore a template first to read or update it.
     *
     * @param int $id The Advanced Billing id of the feature template.
     *
     * @return FeatureTemplateResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readFeatureTemplate(int $id): FeatureTemplateResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/features/{id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorListResponseException::class))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->type(FeatureTemplateResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the name, description, unit, value type, default value, or default periodicity of a feature
     * template. `key` is rejected on every update. `kind` is rejected once any feature catalog item has
     * been created from this template.
     *
     * Archived feature templates are not addressable here and return `404`. Restore a template first to
     * update it.
     *
     * @param int $id The Advanced Billing id of the feature template.
     * @param UpdateFeatureTemplateRequest|null $body
     *
     * @return FeatureTemplateResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateFeatureTemplate(int $id, ?UpdateFeatureTemplateRequest $body = null): FeatureTemplateResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/features/{id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('id', $id)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorListResponseException::class))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(FeatureTemplateResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Archives a feature template. Archived feature templates are not addressable via [Read Feature
     * Template]($e/Feature%20Templates/readFeatureTemplate) or [Update Feature
     * Template]($e/Feature%20Templates/updateFeatureTemplate). Both endpoints return `404` until the
     * template is restored.
     *
     * The feature template record itself is never hard-deleted, and can always be restored with [Restore
     * Feature Template]($e/Feature%20Templates/restoreFeatureTemplate). Reversibility does not extend to
     * `remove_from_catalog=true`: the feature catalog items and entitlements that parameter destroys are
     * gone permanently, and restoring the template will not bring subscriber access back.
     *
     * @param int $id The Advanced Billing id of the feature template.
     * @param bool|null $removeFromCatalog When `true`, also destroys every feature catalog item
     *        created from this template and cascades to their entitlements, revoking subscriber
     *        access immediately. When `false` (default), the feature template and its feature
     *        catalog items are archived, and existing entitlements are preserved.
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function archiveFeatureTemplate(int $id, ?bool $removeFromCatalog = false): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/features/{id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('id', $id)->required(),
                QueryParam::init('remove_from_catalog', $removeFromCatalog)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorListResponseException::class))
            ->throwErrorOn('404', ErrorType::init('Not Found'));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Clears the feature template's archived state. Feature catalog items created from this template are
     * not automatically restored. Restore each one individually.
     *
     * @param int $id The Advanced Billing id of the feature template.
     *
     * @return FeatureTemplateResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function restoreFeatureTemplate(int $id): FeatureTemplateResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/features/{id}/restore.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorListResponseException::class))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(FeatureTemplateResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
