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
use AdvancedBillingLib\Exceptions\SingleStringErrorResponseException;
use AdvancedBillingLib\Models\BasicDateField;
use AdvancedBillingLib\Models\CouponCurrencyRequest;
use AdvancedBillingLib\Models\CouponCurrencyResponse;
use AdvancedBillingLib\Models\CouponResponse;
use AdvancedBillingLib\Models\CouponSubcodes;
use AdvancedBillingLib\Models\CouponSubcodesResponse;
use AdvancedBillingLib\Models\CouponUsage;
use AdvancedBillingLib\Models\CreateOrUpdateCoupon;
use AdvancedBillingLib\Utils\DateTimeHelper;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class CouponsController extends BaseController
{
    /**
     * ## Coupons Documentation
     *
     * Coupons can be administered in the Chargify application or created via API. Please view our section
     * on [creating coupons](https://maxio-chargify.zendesk.com/hc/en-us/articles/5404742830733) for more
     * information.
     *
     * Additionally, for documentation on how to apply a coupon to a subscription within the Chargify UI,
     * please see our documentation [here](https://maxio-chargify.zendesk.com/hc/en-
     * us/articles/5404761012877).
     *
     * ## Create Coupon
     *
     * This request will create a coupon, based on the provided information.
     *
     * When creating a coupon, you must specify a product family using the `product_family_id`. If no
     * `product_family_id` is passed, the first product family available is used. You will also need to
     * formulate your URL to cite the Product Family ID in your request.
     *
     * You can restrict a coupon to only apply to specific products / components by optionally passing in
     * hashes of `restricted_products` and/or `restricted_components` in the format:
     * `{ "<product/component_id>": boolean_value }`
     *
     * @param int $productFamilyId The Chargify id of the product family to which the coupon belongs
     * @param CreateOrUpdateCoupon|null $body
     *
     * @return CouponResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createCoupon(int $productFamilyId, ?CreateOrUpdateCoupon $body = null): CouponResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/product_families/{product_family_id}/coupons.json'
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
            ->type(CouponResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * List coupons for a specific Product Family in a Site.
     *
     * If the coupon is set to `use_site_exchange_rate: true`, it will return pricing based on the current
     * exchange rate. If the flag is set to false, it will return all of the defined prices for each
     * currency.
     *
     * @param array $options Array with all options for search
     *
     * @return CouponResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCouponsForProductFamily(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/product_families/{product_family_id}/coupons.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('product_family_id', $options)->extract('productFamilyId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 30),
                QueryParam::init('filter[date_field]', $options)
                    ->commaSeparated()
                    ->extract('filterDateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('filter[end_date]', $options)
                    ->commaSeparated()
                    ->extract('filterEndDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[end_datetime]', $options)
                    ->commaSeparated()
                    ->extract('filterEndDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[start_date]', $options)
                    ->commaSeparated()
                    ->extract('filterStartDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[start_datetime]', $options)
                    ->commaSeparated()
                    ->extract('filterStartDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[ids]', $options)->commaSeparated()->extract('filterIds'),
                QueryParam::init('filter[codes]', $options)->commaSeparated()->extract('filterCodes'),
                QueryParam::init('currency_prices', $options)->commaSeparated()->extract('currencyPrices'),
                QueryParam::init('filter[use_site_exchange_rate]', $options)
                    ->commaSeparated()
                    ->extract('filterUseSiteExchangeRate')
            );

        $_resHandler = $this->responseHandler()->type(CouponResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * You can search for a coupon via the API with the find method. By passing a code parameter, the find
     * will attempt to locate a coupon that matches that code. If no coupon is found, a 404 is returned.
     *
     * If you have more than one product family and if the coupon you are trying to find does not belong to
     * the default product family in your site, then you will need to specify (either in the url or as a
     * query string param) the product family id.
     *
     * @param int|null $productFamilyId The Chargify id of the product family to which the coupon
     *        belongs
     * @param string|null $code The code of the coupon
     *
     * @return CouponResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readCouponByCode(?int $productFamilyId = null, ?string $code = null): CouponResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/coupons/find.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('product_family_id', $productFamilyId)->commaSeparated(),
                QueryParam::init('code', $code)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()->type(CouponResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * You can retrieve the Coupon via the API with the Show method. You must identify the Coupon in this
     * call by the ID parameter that Chargify assigns.
     * If instead you would like to find a Coupon using a Coupon code, see the Coupon Find method.
     *
     * When fetching a coupon, if you have defined multiple currencies at the site level, you can
     * optionally pass the `?currency_prices=true` query param to include an array of currency price data
     * in the response.
     *
     * If the coupon is set to `use_site_exchange_rate: true`, it will return pricing based on the current
     * exchange rate. If the flag is set to false, it will return all of the defined prices for each
     * currency.
     *
     * @param int $productFamilyId The Chargify id of the product family to which the coupon belongs
     * @param int $couponId The Chargify id of the coupon
     *
     * @return CouponResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readCoupon(int $productFamilyId, int $couponId): CouponResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/product_families/{product_family_id}/coupons/{coupon_id}.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                TemplateParam::init('coupon_id', $couponId)->required()
            );

        $_resHandler = $this->responseHandler()->type(CouponResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * ## Update Coupon
     *
     * You can update a Coupon via the API with a PUT request to the resource endpoint.
     *
     * You can restrict a coupon to only apply to specific products / components by optionally passing in
     * hashes of `restricted_products` and/or `restricted_components` in the format:
     * `{ "<product/component_id>": boolean_value }`
     *
     * @param int $productFamilyId The Chargify id of the product family to which the coupon belongs
     * @param int $couponId The Chargify id of the coupon
     * @param CreateOrUpdateCoupon|null $body
     *
     * @return CouponResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCoupon(
        int $productFamilyId,
        int $couponId,
        ?CreateOrUpdateCoupon $body = null
    ): CouponResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/product_families/{product_family_id}/coupons/{coupon_id}.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                TemplateParam::init('coupon_id', $couponId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(CouponResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * You can archive a Coupon via the API with the archive method.
     * Archiving makes that Coupon unavailable for future use, but allows it to remain attached and
     * functional on existing Subscriptions that are using it.
     * The `archived_at` date and time will be assigned.
     *
     * @param int $productFamilyId The Chargify id of the product family to which the coupon belongs
     * @param int $couponId The Chargify id of the coupon
     *
     * @return CouponResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function archiveCoupon(int $productFamilyId, int $couponId): CouponResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/product_families/{product_family_id}/coupons/{coupon_id}.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                TemplateParam::init('coupon_id', $couponId)->required()
            );

        $_resHandler = $this->responseHandler()->type(CouponResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * You can retrieve a list of coupons.
     *
     * If the coupon is set to `use_site_exchange_rate: true`, it will return pricing based on the current
     * exchange rate. If the flag is set to false, it will return all of the defined prices for each
     * currency.
     *
     * @param array $options Array with all options for search
     *
     * @return CouponResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCoupons(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/coupons.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 30),
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
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[ids]', $options)->commaSeparated()->extract('filterIds'),
                QueryParam::init('filter[codes]', $options)->commaSeparated()->extract('filterCodes'),
                QueryParam::init('currency_prices', $options)->commaSeparated()->extract('currencyPrices'),
                QueryParam::init('filter[end_date]', $options)
                    ->commaSeparated()
                    ->extract('filterEndDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[end_datetime]', $options)
                    ->commaSeparated()
                    ->extract('filterEndDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[start_date]', $options)
                    ->commaSeparated()
                    ->extract('filterStartDate')
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[start_datetime]', $options)
                    ->commaSeparated()
                    ->extract('filterStartDatetime')
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[date_field]', $options)
                    ->commaSeparated()
                    ->extract('filterDateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('filter[use_site_exchange_rate]', $options)
                    ->commaSeparated()
                    ->extract('filterUseSiteExchangeRate')
            );

        $_resHandler = $this->responseHandler()->type(CouponResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will provide details about the coupon usage as an array of data hashes, one per product.
     *
     * @param int $productFamilyId The Chargify id of the product family to which the coupon belongs
     * @param int $couponId The Chargify id of the coupon
     *
     * @return CouponUsage[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readCouponUsage(int $productFamilyId, int $couponId): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/product_families/{product_family_id}/coupons/{coupon_id}/usage.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                TemplateParam::init('coupon_id', $couponId)->required()
            );

        $_resHandler = $this->responseHandler()->type(CouponUsage::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * You can verify if a specific coupon code is valid using the `validate` method. This method is useful
     * for validating coupon codes that are entered by a customer. If the coupon is found and is valid, the
     * coupon will be returned with a 200 status code.
     *
     * If the coupon is invalid, the status code will be 404 and the response will say why it is invalid.
     * If the coupon is valid, the status code will be 200 and the coupon will be returned. The following
     * reasons for invalidity are supported:
     *
     * + Coupon not found
     * + Coupon is invalid
     * + Coupon expired
     *
     * If you have more than one product family and if the coupon you are validating does not belong to the
     * first product family in your site, then you will need to specify the product family, either in the
     * url or as a query string param. This can be done by supplying the id or the handle in the `handle:my-
     * family` format.
     *
     * Eg.
     *
     * ```
     * https://<subdomain>.chargify.com/product_families/handle:<product_family_handle>/coupons/validate.
     * <format>?code=<coupon_code>
     * ```
     *
     * Or:
     *
     * ```
     * https://<subdomain>.chargify.com/coupons/validate.<format>?
     * code=<coupon_code>&product_family_id=<id>
     * ```
     *
     * @param string $code The code of the coupon
     * @param int|null $productFamilyId The Chargify id of the product family to which the coupon
     *        belongs
     *
     * @return CouponResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function validateCoupon(string $code, ?int $productFamilyId = null): CouponResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/coupons/validate.json')
            ->auth('global')
            ->parameters(
                QueryParam::init('code', $code)->commaSeparated()->required(),
                QueryParam::init('product_family_id', $productFamilyId)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found', SingleStringErrorResponseException::class))
            ->type(CouponResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to create and/or update currency prices for an existing coupon. Multiple
     * prices can be created or updated in a single request but each of the currencies must be defined on
     * the site level already and the coupon must be an amount-based coupon, not percentage.
     *
     * Currency pricing for coupons must mirror the setup of the primary coupon pricing - if the primary
     * coupon is percentage based, you will not be able to define pricing in non-primary currencies.
     *
     * @param int $couponId The Chargify id of the coupon
     * @param CouponCurrencyRequest|null $body
     *
     * @return CouponCurrencyResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCouponCurrencyPrices(
        int $couponId,
        ?CouponCurrencyRequest $body = null
    ): CouponCurrencyResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/coupons/{coupon_id}/currency_prices.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('coupon_id', $couponId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(CouponCurrencyResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * ## Coupon Subcodes Intro
     *
     * Coupon Subcodes allow you to create a set of unique codes that allow you to expand the use of one
     * coupon.
     *
     * For example:
     *
     * Master Coupon Code:
     *
     * + SPRING2020
     *
     * Coupon Subcodes:
     *
     * + SPRING90210
     * + DP80302
     * + SPRINGBALTIMORE
     *
     * Coupon subcodes can be administered in the Admin Interface or via the API.
     *
     * When creating a coupon subcode, you must specify a coupon to attach it to using the coupon_id. Valid
     * coupon subcodes are all capital letters, contain only letters and numbers, and do not have any
     * spaces. Lowercase letters will be capitalized before the subcode is created.
     *
     * ## Coupon Subcodes Documentation
     *
     * Full documentation on how to create coupon subcodes in the Chargify UI can be located [here](https:
     * //chargify.zendesk.com/hc/en-us/articles/4407755909531#coupon-codes).
     *
     * Additionally, for documentation on how to apply a coupon to a Subscription within the Chargify UI,
     * please see our documentation [here](https://chargify.zendesk.com/hc/en-
     * us/articles/4407884887835#coupon).
     *
     * ## Create Coupon Subcode
     *
     * This request allows you to create specific subcodes underneath an existing coupon code.
     *
     * *Note*: If you are using any of the allowed special characters ("%", "@", "+", "-", "_", and "."),
     * you must encode them for use in the URL.
     *
     * % to %25
     * @ to %40
     * + to %2B
     * - to %2D
     * _ to %5F
     * . to %2E
     *
     * So, if the coupon subcode is `20%OFF`, the URL to delete this coupon subcode would be: `https:
     * //<subdomain>.chargify.com/coupons/567/codes/20%25OFF.<format>`
     *
     * @param int $couponId The Chargify id of the coupon
     * @param CouponSubcodes|null $body
     *
     * @return CouponSubcodesResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createCouponSubcodes(int $couponId, ?CouponSubcodes $body = null): CouponSubcodesResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/coupons/{coupon_id}/codes.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('coupon_id', $couponId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(CouponSubcodesResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request allows you to request the subcodes that are attached to a coupon.
     *
     * @param array $options Array with all options for search
     *
     * @return CouponSubcodes Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCouponSubcodes(array $options): CouponSubcodes
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/coupons/{coupon_id}/codes.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('coupon_id', $options)->extract('couponId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20)
            );

        $_resHandler = $this->responseHandler()->type(CouponSubcodes::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * You can update the subcodes for the given Coupon via the API with a PUT request to the resource
     * endpoint.
     * Send an array of new coupon subcodes.
     *
     * **Note**: All current subcodes for that Coupon will be deleted first, and replaced with the list of
     * subcodes sent to this endpoint.
     * The response will contain:
     *
     * + The created subcodes,
     *
     * + Subcodes that were not created because they already exist,
     *
     * + Any subcodes not created because they are invalid.
     *
     * @param int $couponId The Chargify id of the coupon
     * @param CouponSubcodes|null $body
     *
     * @return CouponSubcodesResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCouponSubcodes(int $couponId, ?CouponSubcodes $body = null): CouponSubcodesResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/coupons/{coupon_id}/codes.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('coupon_id', $couponId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()->type(CouponSubcodesResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * ## Example
     *
     * Given a coupon with an ID of 567, and a coupon subcode of 20OFF, the URL to `DELETE` this coupon
     * subcode would be:
     *
     * ```
     * http://subdomain.chargify.com/coupons/567/codes/20OFF.<format>
     * ```
     *
     * Note: If you are using any of the allowed special characters (“%”, “@”, “+”, “-”, “_”, and “.”), you
     * must encode them for use in the URL.
     *
     * | Special character | Encoding |
     * |-------------------|----------|
     * | %                 | %25      |
     * | @                 | %40      |
     * | +                 | %2B      |
     * | –                 | %2D      |
     * | _                 | %5F      |
     * | .                 | %2E      |
     *
     * ## Percent Encoding Example
     *
     * Or if the coupon subcode is 20%OFF, the URL to delete this coupon subcode would be: @https:
     * //<subdomain>.chargify.com/coupons/567/codes/20%25OFF.<format>
     *
     * @param int $couponId The Chargify id of the coupon to which the subcode belongs
     * @param string $subcode The subcode of the coupon
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteCouponSubcode(int $couponId, string $subcode): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/coupons/{coupon_id}/codes/{subcode}.json')
            ->auth('global')
            ->parameters(
                TemplateParam::init('coupon_id', $couponId)->required(),
                TemplateParam::init('subcode', $subcode)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''));

        $this->execute($_reqBuilder, $_resHandler);
    }
}
