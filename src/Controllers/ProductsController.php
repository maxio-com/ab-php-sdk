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
use AdvancedBillingLib\Models\BasicDateField;
use AdvancedBillingLib\Models\CreateOrUpdateProductRequest;
use AdvancedBillingLib\Models\IncludeNotNull;
use AdvancedBillingLib\Models\ListProductsInclude;
use AdvancedBillingLib\Models\ProductResponse;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class ProductsController extends BaseController
{
    /**
     * Use this method to create a product within your Chargify site.
     *
     * + [Products Documentation](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405561405709)
     * + [Changing a Subscription's Product](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5404225334669-Product-Changes-Migrations)
     *
     * @param int $productFamilyId The Chargify id of the product family to which the product
     *        belongs
     * @param CreateOrUpdateProductRequest|null $body
     *
     * @return ProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createProduct(int $productFamilyId, ?CreateOrUpdateProductRequest $body = null): ProductResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/product_families/{product_family_id}/products.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
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
            ->type(ProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Sending a DELETE request to this endpoint will archive the product. All current subscribers will be
     * unffected; their subscription/purchase will continue to be charged monthly.
     *
     * This will restrict the option to chose the product for purchase via the Billing Portal, as well as
     * disable Public Signup Pages for the product.
     *
     * @param int $productId The Chargify id of the product
     *
     * @return ProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function archiveProduct(int $productId): ProductResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/products/{product_id}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('product_id', $productId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method allows to retrieve a Product object by its `api_handle`.
     *
     * @param string $apiHandle The handle of the product
     *
     * @return ProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readProductByHandle(string $apiHandle): ProductResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/products/handle/{api_handle}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('api_handle', $apiHandle)->required());

        $_resHandler = $this->responseHandler()->type(ProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to read the current details of a product that you've created in Chargify.
     *
     * @param int $productId The Chargify id of the product
     *
     * @return ProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readProduct(int $productId): ProductResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/products/{product_id}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('product_id', $productId)->required());

        $_resHandler = $this->responseHandler()->type(ProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this method to change aspects of an existing product.
     *
     * ### Input Attributes Update Notes
     *
     * + `update_return_params` The parameters we will append to your `update_return_url`. See Return URLs
     * and Parameters
     *
     * ### Product Price Point
     *
     * Updating a product using this endpoint will create a new price point and set it as the default price
     * point for this product. If you should like to update an existing product price point, that must be
     * done separately.
     *
     * @param int $productId The Chargify id of the product
     * @param CreateOrUpdateProductRequest|null $body
     *
     * @return ProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateProduct(int $productId, ?CreateOrUpdateProductRequest $body = null): ProductResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/products/{product_id}.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('product_id', $productId)->required(),
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
            ->type(ProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method allows to retrieve a list of Products belonging to a Site.
     *
     * @param array $options Array with all options for search
     *
     * @return ProductResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listProducts(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/products.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('end_date', $options)
                    ->commaSeparated()
                    ->extract('endDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('end_datetime', $options)
                    ->commaSeparated()
                    ->extract('endDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('start_date', $options)
                    ->commaSeparated()
                    ->extract('startDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('start_datetime', $options)
                    ->commaSeparated()
                    ->extract('startDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('include_archived', $options)->commaSeparated()->extract('includeArchived'),
                QueryParam::init('include', $options)
                    ->commaSeparated()
                    ->extract('mInclude')
                    ->serializeBy([ListProductsInclude::class, 'checkValue']),
                QueryParam::init('filter[prepaid_product_price_point][product_price_point_id]', $options)
                    ->commaSeparated()
                    ->extract('filterPrepaidProductPricePointProductPricePointId')
                    ->serializeBy([IncludeNotNull::class, 'checkValue']),
                QueryParam::init('filter[use_site_exchange_rate]', $options)
                    ->commaSeparated()
                    ->extract('filterUseSiteExchangeRate')
            );

        $_resHandler = $this->responseHandler()->type(ProductResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
