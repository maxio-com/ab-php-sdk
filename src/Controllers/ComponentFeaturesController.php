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
use AdvancedBillingLib\Models\CreateFeatureCatalogItemRequest;
use AdvancedBillingLib\Models\FeatureCatalogItemResponse;
use AdvancedBillingLib\Models\FeatureCatalogItemsListResponse;
use AdvancedBillingLib\Models\UpdateFeatureCatalogItemRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class ComponentFeaturesController extends BaseController
{
    /**
     * Lists the feature catalog items attached to this component, including price-point-specific overrides.
     *
     * @param int $componentId The Advanced Billing id of the component.
     *
     * @return FeatureCatalogItemsListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listComponentFeatures(int $componentId): FeatureCatalogItemsListResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/components/{component_id}/features.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('component_id', $componentId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorListResponseException::class))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->type(FeatureCatalogItemsListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Attaches a feature template to this component. Pass `price_point_type: "PricePoint"` and
     * `price_point_id` to scope the feature catalog item to a single component price point instead of the
     * whole component. `value`, the periodicity and the grant expiration fall back to the feature
     * template's defaults when omitted.
     *
     * **Product- or component-level items are a template.** A feature catalog item without
     * `price_point_id` is copied onto price points created after it (except bulk-created price points;
     * [Clone Component Price Point]($e/Component%3A%20Price%20Points/cloneComponentPricePoint) applies
     * only the `feature_catalog_items` you send with it, and the automatic clone described below copies
     * the source's features), but it is not added to price points that already exist, so their subscribers
     * get nothing from it, even with `propagate_to_subscriptions: true`. To grant a feature to existing
     * subscribers, create the item on each existing price point.
     *
     * **Restoring a template item.** Restoring an archived product- or component-level item, or creating
     * one again for the same feature template, also restores the price-point copies that were archived
     * together with it (for example, when the feature template was archived). If one of those price points
     * has subscribers without the feature, the call returns `422` naming that price point, unless you send
     * `propagate_to_subscriptions: true`, which restores the copies and grants the feature to those
     * subscribers.
     *
     * **Price points with subscribers.** When the feature catalog item is scoped to a price point that
     * already has subscribers and you don't send `propagate_to_subscriptions: true`, the new feature
     * applies to new subscriptions only. The price point is cloned with its current features, the new
     * feature is applied to the clone, and the response carries the clone's `price_point_id`. The feature
     * catalog item in the response is also a different record, with a new `id`: later calls for the clone
     * must use that `id`, not the original one. Existing subscribers stay on the original price point,
     * unchanged; sign new subscriptions up on the clone to give them the change. A component price point
     * has subscribers when any subscription, including a canceled one or one allocated a quantity of zero,
     * has the component at that price point. Price points that can't be cloned (archived or custom ones,
     * or a component price point with an interval on a site without multi-frequency) make the request
     * return `422`, with a message naming `propagate_to_subscriptions: true` as the way to apply the
     * change to existing subscribers instead.
     *
     * @param int $componentId The Advanced Billing id of the component.
     * @param CreateFeatureCatalogItemRequest|null $body
     *
     * @return FeatureCatalogItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createComponentFeature(
        int $componentId,
        ?CreateFeatureCatalogItemRequest $body = null
    ): FeatureCatalogItemResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/components/{component_id}/features.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
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
            ->type(FeatureCatalogItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a single feature catalog item attached to this component.
     *
     * @param int $componentId The Advanced Billing id of the component.
     * @param int $id The Advanced Billing id of the feature catalog item.
     *
     * @return FeatureCatalogItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readComponentFeature(int $componentId, int $id): FeatureCatalogItemResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/components/{component_id}/features/{id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('id', $id)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorListResponseException::class))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->type(FeatureCatalogItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the value or periodicity of a feature catalog item attached to this component. A request
     * that changes nothing returns the item as it is.
     *
     * **Price points with subscribers.** When the feature catalog item is scoped to a price point that
     * already has subscribers and you don't send `propagate_to_subscriptions: true`, the update applies to
     * new subscriptions only. The price point is cloned with its current features, the update is applied
     * to the clone, and the response carries the clone's `price_point_id`. The feature catalog item in the
     * response is also a different record, with a new `id`: later calls for the clone must use that `id`,
     * not the original one. Existing subscribers stay on the original price point, unchanged; sign new
     * subscriptions up on the clone to give them the change. A component price point has subscribers when
     * any subscription, including a canceled one or one allocated a quantity of zero, has the component at
     * that price point. Price points that can't be cloned (archived or custom ones, or a component price
     * point with an interval on a site without multi-frequency) make the request return `422`, with a
     * message naming `propagate_to_subscriptions: true` as the way to apply the change to existing
     * subscribers instead.
     *
     * @param int $componentId The Advanced Billing id of the component.
     * @param int $id The Advanced Billing id of the feature catalog item.
     * @param UpdateFeatureCatalogItemRequest|null $body
     *
     * @return FeatureCatalogItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateComponentFeature(
        int $componentId,
        int $id,
        ?UpdateFeatureCatalogItemRequest $body = null
    ): FeatureCatalogItemResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/components/{component_id}/features/{id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
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
            ->type(FeatureCatalogItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Removes a feature catalog item from this component. Returns `204` when the item is removed in place.
     *
     * **Price points with subscribers.** When the feature catalog item is scoped to a price point that
     * already has subscribers and you don't send `destroy_entitlements=true`, the removal applies to new
     * subscriptions only. The price point is cloned with its current features, the removal is applied to
     * the clone, and the call returns `200` with the archived feature catalog item on the clone (carrying
     * the clone's `price_point_id` and a new `id`) instead of `204`. Existing subscribers stay on the
     * original price point, unchanged; sign new subscriptions up on the clone to give them the change. A
     * component price point has subscribers when any subscription, including a canceled one or one
     * allocated a quantity of zero, has the component at that price point. Price points that can't be
     * cloned (archived or custom ones, or a component price point with an interval on a site without multi-
     * frequency) make the request return `422`, with a message naming `destroy_entitlements=true` as the
     * way to apply the change to existing subscribers instead.
     *
     * @param int $componentId The Advanced Billing id of the component.
     * @param int $id The Advanced Billing id of the feature catalog item.
     * @param bool|null $destroyEntitlements When `true`, permanently deletes this feature catalog
     *        item and every entitlement it created, revoking subscriber access immediately. When
     *        `false` (default), the feature catalog item is archived and existing entitlements
     *        are preserved.
     *
     * @return FeatureCatalogItemResponse|null Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function removeComponentFeature(
        int $componentId,
        int $id,
        ?bool $destroyEntitlements = false
    ): ?FeatureCatalogItemResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/components/{component_id}/features/{id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('id', $id)->required(),
                QueryParam::init('destroy_entitlements', $destroyEntitlements)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('403', ErrorType::init('Forbidden', ErrorListResponseException::class))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'The price point has subscribers but can\'t be cloned (it is archived or cu' .
                    'stom, or it is a component price point with an interval on a site without m' .
                    'ulti-frequency). Send `destroy_entitlements=true` to remove the feature fro' .
                    'm its existing subscribers instead.',
                    ErrorListResponseException::class
                )
            )
            ->nullableType()
            ->type(FeatureCatalogItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Clears the archived state of a feature catalog item attached to this component. Returns `422` if the
     * parent feature template is still archived. Restore the feature template first. Otherwise, restoring
     * an item that isn't archived returns it unchanged.
     *
     * **Price points with subscribers.** When the feature catalog item is scoped to a price point that
     * already has subscribers and you don't send `propagate_to_subscriptions=true`, the restore applies to
     * new subscriptions only. The price point is cloned with its current features, the restore is applied
     * to the clone, and the response carries the clone's `price_point_id`. The feature catalog item in the
     * response is also a different record, with a new `id`: later calls for the clone must use that `id`,
     * not the original one. Existing subscribers stay on the original price point, unchanged; sign new
     * subscriptions up on the clone to give them the change. A component price point has subscribers when
     * any subscription, including a canceled one or one allocated a quantity of zero, has the component at
     * that price point. Price points that can't be cloned (archived or custom ones, or a component price
     * point with an interval on a site without multi-frequency) make the request return `422`, with a
     * message naming `propagate_to_subscriptions: true` as the way to apply the change to existing
     * subscribers instead.
     *
     * @param int $componentId The Advanced Billing id of the component.
     * @param int $id The Advanced Billing id of the feature catalog item.
     * @param bool|null $propagateToSubscriptions When `true`, the restored feature is applied to
     *        the existing subscriptions on its price point. When `false` (default), an item
     *        scoped to a price point with subscribers is restored on a clone of that price point
     *        instead; a product- or component-level item is never cloned, and returns `422` if a
     *        price-point copy it restores has subscribers without the feature. See the
     *        description.
     *
     * @return FeatureCatalogItemResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function restoreComponentFeature(
        int $componentId,
        int $id,
        ?bool $propagateToSubscriptions = false
    ): FeatureCatalogItemResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/components/{component_id}/features/{id}/restore.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('id', $id)->required(),
                QueryParam::init('propagate_to_subscriptions', $propagateToSubscriptions)->commaSeparated()
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
            ->type(FeatureCatalogItemResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
