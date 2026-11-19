<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\WalletErrorResponseException;
use AdvancedBillingLib\Models\CreateWalletProductRequest;
use AdvancedBillingLib\Models\SortBy1;
use AdvancedBillingLib\Models\SortDirection;
use AdvancedBillingLib\Models\Status1;
use AdvancedBillingLib\Models\UpdateWalletProductRequest;
use AdvancedBillingLib\Models\WalletProductResponse;
use AdvancedBillingLib\Models\WalletProductsListResponse;
use AdvancedBillingLib\Models\WalletProductUsageResponse;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class WalletProductsController extends BaseController
{
    /**
     * Lists the Wallet Products on your site.
     *
     * @param bool|null $includeArchived Includes archived Wallet Products in the result. Defaults
     *        to `false`. Ignored when `status` is also sent.
     * @param string|null $status Restricts the result by status, and overrides `include_archived`
     *        when sent. An unrecognized value falls back to `active` rather than returning `422`.
     * @param string|null $q Restricts the result to Wallet Products whose name, handle, or unit
     *        name contains this substring (case-insensitive).
     * @param string|null $sortBy The field to sort results by. An unrecognized value falls back to
     *        `name`.
     * @param string|null $sortDirection The sort direction. Anything other than `desc` is treated
     *        as `asc`.
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
     *
     * @return WalletProductsListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listWalletProducts(
        ?bool $includeArchived = null,
        ?string $status = null,
        ?string $q = null,
        ?string $sortBy = SortBy1::NAME,
        ?string $sortDirection = SortDirection::ASC,
        ?int $page = 1,
        ?int $perPage = 20
    ): WalletProductsListResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/wallet_products.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('include_archived', $includeArchived)->commaSeparated(),
                QueryParam::init('status', $status)->commaSeparated()->serializeBy([Status1::class, 'checkValue']),
                QueryParam::init('q', $q)->commaSeparated(),
                QueryParam::init('sort_by', $sortBy)->commaSeparated()->serializeBy([SortBy1::class, 'checkValue']),
                QueryParam::init('sort_direction', $sortDirection)
                    ->commaSeparated()
                    ->serializeBy([SortDirection::class, 'checkValue']),
                QueryParam::init('page', $page)->commaSeparated(),
                QueryParam::init('per_page', $perPage)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->type(WalletProductsListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a Wallet Product: a billing product with no product family, meant to denominate wallets and
     * to be purchased through [Create Wallet Purchase]($e/Wallet%20Purchases/createWalletPurchase). It's a
     * Component under the hood, so it returns the full Component field set, and can optionally be priced
     * with one or more price points in the same call.
     *
     * @param CreateWalletProductRequest|null $body
     *
     * @return WalletProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createWalletProduct(?CreateWalletProductRequest $body = null): WalletProductResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/wallet_products.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'Validation failure. Includes a `product_family_id` (rejected rather than i' .
                    'gnored), and any failure validating a price point in `price_point`/`price_p' .
                    'oints`, which rolls back the whole call, including the Wallet Product itsel' .
                    'f.',
                    WalletErrorResponseException::class
                )
            )
            ->type(WalletProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns the Wallet Product.
     *
     * @param string $id The Advanced Billing id of the Wallet Product, or its handle prefixed with
     *        `handle:` (for example `handle:token-pack`). A bare handle returns `404`.
     *
     * @return WalletProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readWalletProduct(string $id): WalletProductResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/wallet_products/{id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn('404', ErrorType::init('Not Found', WalletErrorResponseException::class))
            ->type(WalletProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the Wallet Product's catalog-facing fields. Omitted fields are left unchanged. Unlike
     * [Create Wallet Product]($e/Wallet%20Products/createWalletProduct), this does not accept `unit_name`,
     * `handle`, `price_point`, or `price_points`; see the request schema for which fields are actually
     * mutable.
     *
     * @param string $id The Advanced Billing id of the Wallet Product, or its handle prefixed with
     *        `handle:` (for example `handle:token-pack`). A bare handle returns `404`.
     * @param UpdateWalletProductRequest|null $body
     *
     * @return WalletProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateWalletProduct(string $id, ?UpdateWalletProductRequest $body = null): WalletProductResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/wallet_products/{id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('id', $id)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn('404', ErrorType::init('Not Found', WalletErrorResponseException::class))
            ->throwErrorOn('422', ErrorType::init('Validation failure.', WalletErrorResponseException::class))
            ->type(WalletProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns everything drawing on this Wallet Product: the wallet templates billing through it, split
     * into ones using its default price point and ones overriding it, plus a sample of up to 50 of the
     * active wallets actually created from them. A wallet template can appear more than once in
     * `wallet_templates`/`price_point_overrides`, once per Feature and owning plan/component sharing it,
     * so these arrays aren't one row per template.
     *
     * @param string $id The Advanced Billing id of the Wallet Product, or its handle prefixed with
     *        `handle:` (for example `handle:token-pack`). A bare handle returns `404`.
     *
     * @return WalletProductUsageResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readWalletProductUsage(string $id): WalletProductUsageResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/wallet_products/{id}/usage.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn('404', ErrorType::init('Not Found', WalletErrorResponseException::class))
            ->type(WalletProductUsageResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Archives the Wallet Product. Refuses when an active Feature's `wallet_behavior` still points at it,
     * or when it's used in a scheduled renewal. This protects Feature-provisioned wallets, but not a
     * wallet created manually against this product: a manual wallet can be left denominated by an archived
     * Wallet Product, and [Create Wallet Purchase]($e/Wallet%20Purchases/createWalletPurchase) doesn't
     * check whether the billing product is archived before pricing and charging a purchase against it.
     *
     * @param string $id The Advanced Billing id of the Wallet Product, or its handle prefixed with
     *        `handle:` (for example `handle:token-pack`). A bare handle returns `404`.
     *
     * @return WalletProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function archiveWalletProduct(string $id): WalletProductResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/wallet_products/{id}/archive.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn('404', ErrorType::init('Not Found', WalletErrorResponseException::class))
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'The Wallet Product is already archived, is in use by one or more Features,' .
                    ' or is in use by a scheduled renewal.',
                    WalletErrorResponseException::class
                )
            )
            ->type(WalletProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Restores an archived Wallet Product.
     *
     * @param string $id The Advanced Billing id of the Wallet Product, or its handle prefixed with
     *        `handle:` (for example `handle:token-pack`). A bare handle returns `404`.
     *
     * @return WalletProductResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function unarchiveWalletProduct(string $id): WalletProductResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/wallet_products/{id}/unarchive.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn('404', ErrorType::init('Not Found', WalletErrorResponseException::class))
            ->throwErrorOn(
                '422',
                ErrorType::init('The Wallet Product is not archived.', WalletErrorResponseException::class)
            )
            ->type(WalletProductResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
