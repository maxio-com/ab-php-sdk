<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ErrorArrayMapResponseException;
use AdvancedBillingLib\Exceptions\ErrorListResponseException;
use AdvancedBillingLib\Models\ComponentCurrencyPricesResponse;
use AdvancedBillingLib\Models\ComponentPricePointResponse;
use AdvancedBillingLib\Models\ComponentPricePointsResponse;
use AdvancedBillingLib\Models\ComponentResponse;
use AdvancedBillingLib\Models\CreateComponentPricePointRequest;
use AdvancedBillingLib\Models\CreateComponentPricePointsRequest;
use AdvancedBillingLib\Models\CreateCurrencyPricesRequest;
use AdvancedBillingLib\Models\ListComponentsPricePointsInclude;
use AdvancedBillingLib\Models\ListComponentsPricePointsResponse;
use AdvancedBillingLib\Models\PricePointType;
use AdvancedBillingLib\Models\SortingDirection;
use AdvancedBillingLib\Models\UpdateComponentPricePointRequest;
use AdvancedBillingLib\Models\UpdateCurrencyPricesRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class ComponentPricePointsController extends BaseController
{
    /**
     * Sets a new default price point for the component. This new default will apply to all new
     * subscriptions going forward - existing subscriptions will remain on their current price point.
     *
     * See [Price Points Documentation](https://maxio.zendesk.com/hc/en-us/articles/24261191737101-Price-
     * Points-Components) for more information on price points and moving subscriptions between price
     * points.
     *
     * Note: Custom price points are not able to be set as the default for a component.
     *
     * @param int $componentId The Advanced Billing id of the component to which the price point
     *        belongs
     * @param int $pricePointId The Advanced Billing id of the price point
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function promoteComponentPricePointToDefault(int $componentId, int $pricePointId): ComponentResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/components/{component_id}/price_points/{price_point_id}/default.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required()
            );

        $_resHandler = $this->responseHandler()->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint can be used to create a new price point for an existing component.
     *
     * @param int $componentId The Advanced Billing id of the component
     * @param CreateComponentPricePointRequest|null $body
     *
     * @return ComponentPricePointResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createComponentPricePoint(
        int $componentId,
        ?CreateComponentPricePointRequest $body = null
    ): ComponentPricePointResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/components/{component_id}/price_points.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorArrayMapResponseException::class
                )
            )
            ->type(ComponentPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to read current price points that are associated with a component.
     *
     * You may specify the component by using either the numeric id or the `handle:gold` syntax.
     *
     * When fetching a component's price points, if you have defined multiple currencies at the site level,
     * you can optionally pass the `?currency_prices=true` query param to include an array of currency
     * price data in the response.
     *
     * If the price point is set to `use_site_exchange_rate: true`, it will return pricing based on the
     * current exchange rate. If the flag is set to false, it will return all of the defined prices for
     * each currency.
     *
     * @param array $options Array with all options for search
     *
     * @return ComponentPricePointsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listComponentPricePoints(array $options): ComponentPricePointsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/components/{component_id}/price_points.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $options)->extract('componentId')->required(),
                QueryParam::init('currency_prices', $options)->commaSeparated()->extract('currencyPrices'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('filter[type]', $options)
                    ->commaSeparated()
                    ->extract('filterType')
                    ->serializeBy([PricePointType::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()->type(ComponentPricePointsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to create multiple component price points in one request.
     *
     * @param string $componentId The Advanced Billing id of the component for which you want to
     *        fetch price points.
     * @param CreateComponentPricePointsRequest|null $body
     *
     * @return ComponentPricePointsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function bulkCreateComponentPricePoints(
        string $componentId,
        ?CreateComponentPricePointsRequest $body = null
    ): ComponentPricePointsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/components/{component_id}/price_points/bulk.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
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
            ->type(ComponentPricePointsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * When updating a price point, it's prices can be updated as well by creating new prices or editing /
     * removing existing ones.
     *
     * Passing in a price bracket without an `id` will attempt to create a new price.
     *
     * Including an `id` will update the corresponding price, and including the `_destroy` flag set to true
     * along with the `id` will remove that price.
     *
     * Note: Custom price points cannot be updated directly. They must be edited through the Subscription.
     *
     * @param int|string $componentId The id or handle of the component. When using the handle, it
     *        must be prefixed with `handle:`. Example: `123` for an integer ID, or `handle:
     *        example-product-handle` for a string handle.
     * @param int|string $pricePointId The id or handle of the price point. When using the handle,
     *        it must be prefixed with `handle:`. Example: `123` for an integer ID, or `handle:
     *        example-price_point-handle` for a string handle.
     * @param UpdateComponentPricePointRequest|null $body
     *
     * @return ComponentPricePointResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateComponentPricePoint(
        $componentId,
        $pricePointId,
        ?UpdateComponentPricePointRequest $body = null
    ): ComponentPricePointResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/components/{component_id}/price_points/{price_point_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required()->strictType('oneOf(int,string)'),
                TemplateParam::init('price_point_id', $pricePointId)->required()->strictType('oneOf(int,string)'),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorArrayMapResponseException::class
                )
            )
            ->type(ComponentPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to retrieve details for a specific component price point. You can achieve this by
     * using either the component price point ID or handle.
     *
     * @param int|string $componentId The id or handle of the component. When using the handle, it
     *        must be prefixed with `handle:`. Example: `123` for an integer ID, or `handle:
     *        example-product-handle` for a string handle.
     * @param int|string $pricePointId The id or handle of the price point. When using the handle,
     *        it must be prefixed with `handle:`. Example: `123` for an integer ID, or `handle:
     *        example-price_point-handle` for a string handle.
     * @param bool|null $currencyPrices Include an array of currency price data
     *
     * @return ComponentPricePointResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readComponentPricePoint(
        $componentId,
        $pricePointId,
        ?bool $currencyPrices = null
    ): ComponentPricePointResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/components/{component_id}/price_points/{price_point_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required()->strictType('oneOf(int,string)'),
                TemplateParam::init('price_point_id', $pricePointId)->required()->strictType('oneOf(int,string)'),
                QueryParam::init('currency_prices', $currencyPrices)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()->type(ComponentPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * A price point can be archived at any time. Subscriptions using a price point that has been archived
     * will continue using it until they're moved to another price point.
     *
     * @param int|string $componentId The id or handle of the component. When using the handle, it
     *        must be prefixed with `handle:`. Example: `123` for an integer ID, or `handle:
     *        example-product-handle` for a string handle.
     * @param int|string $pricePointId The id or handle of the price point. When using the handle,
     *        it must be prefixed with `handle:`. Example: `123` for an integer ID, or `handle:
     *        example-price_point-handle` for a string handle.
     *
     * @return ComponentPricePointResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function archiveComponentPricePoint($componentId, $pricePointId): ComponentPricePointResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/components/{component_id}/price_points/{price_point_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required()->strictType('oneOf(int,string)'),
                TemplateParam::init('price_point_id', $pricePointId)->required()->strictType('oneOf(int,string)')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ComponentPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this endpoint to unarchive a component price point.
     *
     * @param int $componentId The Advanced Billing id of the component to which the price point
     *        belongs
     * @param int $pricePointId The Advanced Billing id of the price point
     *
     * @return ComponentPricePointResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function unarchiveComponentPricePoint(int $componentId, int $pricePointId): ComponentPricePointResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/components/{component_id}/price_points/{price_point_id}/unarchive.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required()
            );

        $_resHandler = $this->responseHandler()->type(ComponentPricePointResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to create currency prices for a given currency that has been defined on the
     * site level in your settings.
     *
     * When creating currency prices, they need to mirror the structure of your primary pricing. For each
     * price level defined on the component price point, there should be a matching price level created in
     * the given currency.
     *
     * Note: Currency Prices are not able to be created for custom price points.
     *
     * @param int $pricePointId The Advanced Billing id of the price point
     * @param CreateCurrencyPricesRequest|null $body
     *
     * @return ComponentCurrencyPricesResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createCurrencyPrices(
        int $pricePointId,
        ?CreateCurrencyPricesRequest $body = null
    ): ComponentCurrencyPricesResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/price_points/{price_point_id}/currency_prices.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('price_point_id', $pricePointId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorArrayMapResponseException::class
                )
            )
            ->type(ComponentCurrencyPricesResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to update currency prices for a given currency that has been defined on the
     * site level in your settings.
     *
     * Note: Currency Prices are not able to be updated for custom price points.
     *
     * @param int $pricePointId The Advanced Billing id of the price point
     * @param UpdateCurrencyPricesRequest|null $body
     *
     * @return ComponentCurrencyPricesResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCurrencyPrices(
        int $pricePointId,
        ?UpdateCurrencyPricesRequest $body = null
    ): ComponentCurrencyPricesResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/price_points/{price_point_id}/currency_prices.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('price_point_id', $pricePointId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorArrayMapResponseException::class
                )
            )
            ->type(ComponentCurrencyPricesResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method allows to retrieve a list of Components Price Points belonging to a Site.
     *
     * @param array $options Array with all options for search
     *
     * @return ListComponentsPricePointsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllComponentPricePoints(array $options): ListComponentsPricePointsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/components_price_points.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('include', $options)
                    ->commaSeparated()
                    ->extract('mInclude')
                    ->serializeBy([ListComponentsPricePointsInclude::class, 'checkValue']),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction')
                    ->serializeBy([SortingDirection::class, 'checkValue']),
                QueryParam::init('filter', $options)->commaSeparated()->extract('filter')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ListComponentsPricePointsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
