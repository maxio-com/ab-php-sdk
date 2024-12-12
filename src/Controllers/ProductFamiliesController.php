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
use AdvancedBillingLib\Models\CreateProductFamilyRequest;
use AdvancedBillingLib\Models\ListProductsInclude;
use AdvancedBillingLib\Models\ProductFamilyResponse;
use AdvancedBillingLib\Models\ProductResponse;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class ProductFamiliesController extends BaseController
{
    /**
     * This method allows to retrieve a list of Products belonging to a Product Family.
     *
     * @param array $options Array with all options for search
     *
     * @return ProductResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listProductsForProductFamily(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/product_families/{product_family_id}/products.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $options)->extract('productFamilyId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('filter', $options)->commaSeparated()->extract('filter'),
                QueryParam::init('start_date', $options)
                    ->commaSeparated()
                    ->extract('startDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('end_date', $options)
                    ->commaSeparated()
                    ->extract('endDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('start_datetime', $options)
                    ->commaSeparated()
                    ->extract('startDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('end_datetime', $options)
                    ->commaSeparated()
                    ->extract('endDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('include_archived', $options)->commaSeparated()->extract('includeArchived'),
                QueryParam::init('include', $options)
                    ->commaSeparated()
                    ->extract('mInclude')
                    ->serializeBy([ListProductsInclude::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->type(ProductResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method will create a Product Family within your Advanced Billing site. Create a Product Family
     * to act as a container for your products, components and coupons.
     *
     * Full documentation on how Product Families operate within the Advanced Billing UI can be located
     * [here](https://maxio.zendesk.com/hc/en-us/articles/24261098936205-Product-Families).
     *
     * @param CreateProductFamilyRequest|null $body
     *
     * @return ProductFamilyResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createProductFamily(?CreateProductFamilyRequest $body = null): ProductFamilyResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/product_families.json')
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
            ->type(ProductFamilyResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method allows to retrieve a list of Product Families for a site.
     *
     * @param array $options Array with all options for search
     *
     * @return ProductFamilyResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listProductFamilies(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/product_families.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('start_date', $options)
                    ->commaSeparated()
                    ->extract('startDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('end_date', $options)
                    ->commaSeparated()
                    ->extract('endDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('start_datetime', $options)
                    ->commaSeparated()
                    ->extract('startDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('end_datetime', $options)
                    ->commaSeparated()
                    ->extract('endDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime'])
            );

        $_resHandler = $this->responseHandler()->type(ProductFamilyResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method allows to retrieve a Product Family via the `product_family_id`. The response will
     * contain a Product Family object.
     *
     * The product family can be specified either with the id number, or with the `handle:my-family` format.
     *
     * @param int $id The Advanced Billing id of the product family
     *
     * @return ProductFamilyResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readProductFamily(int $id): ProductFamilyResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/product_families/{id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()->type(ProductFamilyResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
