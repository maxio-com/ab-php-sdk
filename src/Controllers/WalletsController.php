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
use AdvancedBillingLib\Models\CreateWalletRequest;
use AdvancedBillingLib\Models\Status2;
use AdvancedBillingLib\Models\UpdateWalletRequest;
use AdvancedBillingLib\Models\WalletResponse;
use AdvancedBillingLib\Models\WalletsListResponse;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class WalletsController extends BaseController
{
    /**
     * Lists the wallets on your site, in creation order, paginated. Without `subscription_id`, returns
     * every wallet on the site. The API key is the tenancy boundary; `subscription_id` only narrows the
     * result set further. Archived wallets are included unless you filter them out with `status=active`.
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
     * @param int|null $subscriptionId Restricts the result to wallets owned by this subscription.
     * @param string|null $status Restricts the result by wallet status. An unrecognized value
     *        returns `422` rather than being silently ignored.
     *
     * @return WalletsListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listWallets(
        ?int $page = 1,
        ?int $perPage = 20,
        ?int $subscriptionId = null,
        ?string $status = null
    ): WalletsListResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/wallets.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('page', $page)->commaSeparated(),
                QueryParam::init('per_page', $perPage)->commaSeparated(),
                QueryParam::init('subscription_id', $subscriptionId)->commaSeparated(),
                QueryParam::init('status', $status)->commaSeparated()->serializeBy([Status2::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', WalletErrorResponseException::class)
            )
            ->type(WalletsListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a wallet owned by a subscription and denominated by a [Wallet
     * Product]($e/Wallet%20Products/createWalletProduct): only a Wallet Product can denominate a wallet,
     * not an ordinary component. The Wallet Product must be active; it never belongs to a product family,
     * so there's no family check against the subscription. It's **immutable for the life of the wallet**;
     * there's no way to repoint an existing wallet at a different one.
     *
     * This endpoint always creates a `manual` wallet. To provision a wallet automatically from a usage-
     * limit entitlement instead, configure `wallet_behavior` on the Feature behind that entitlement (see
     * [the Wallets concept guide](page:introduction/basic-concepts/wallets#provisioning-a-wallet-from-a-
     * feature)) rather than sending `entitlement_id` here.
     *
     * @param string|null $idempotencyKey A key you generate, such as a UUID, that makes retrying
     *        this request safe. 1 to 255 printable ASCII characters; surrounding double quotes
     *        are ignored. Keys are scoped to your site and kept for at least 24 hours.
     *
     *        The first request with a key runs normally. A retry with the same key, method, path
     *        and query string, and a byte-identical body returns the stored status and body of
     *        that first request without running it again. The same key with a different request
     *        returns `422` (`idempotency_key_mismatch`). A retry that arrives while the first
     *        request is still running waits for it to finish, and returns `409`
     *        (`idempotency_request_in_progress`) only if that wait times out; on Create Wallet
     *        Purchase the `409` is immediate. Only successful responses are stored, so a failed
     *        request can be retried with the same key. When this header is sent,
     *        `uniqueness_token` is not checked.
     *
     *        See [Idempotent retries](page:introduction/basic-concepts/wallets#idempotent-
     *        retries) for the details, including how wallet purchases differ.
     * @param CreateWalletRequest|null $body
     *
     * @return WalletResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createWallet(?string $idempotencyKey = null, ?CreateWalletRequest $body = null): WalletResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/wallets.json')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                HeaderParam::init('Idempotency-Key', $idempotencyKey),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    'The `Idempotency-Key` header is empty, longer than 255 characters, or cont' .
                    'ains characters other than printable ASCII. Nothing is written.',
                    WalletErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'Unknown or cross-site subscription or meter, or a `wallet_product_id` that' .
                    ' doesn\'t resolve to a Wallet Product on this site.',
                    WalletErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '409',
                ErrorType::init(
                    'A request with the same `Idempotency-Key` was still being processed when t' .
                    'his retry\'s wait for it timed out (`idempotency_request_in_progress`). Not' .
                    'hing is written; retry with the same key once it finishes.',
                    WalletErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'Validation failure, or an `Idempotency-Key` reused with a different reques' .
                    't (`idempotency_key_mismatch`). Validation failures include a missing or ar' .
                    'chived `wallet_product_id`; a `price_point_id` that\'s missing, archived, a' .
                    ' subscription-specific custom price point, or doesn\'t belong to the Wallet' .
                    ' Product; an invalid `depletion_policy` or `hard_stop_overflow` value; a me' .
                    'ter that isn\'t a `sum` or `count` meter; an invalid `conversion_rate`; a s' .
                    'ubscription with no reference, when pairing a meter whose stream bills by s' .
                    'ubscription reference; and the `initial_balance` / `initial_balance_expires' .
                    '_at` error cases described on those fields. Also returned for `entitlement_' .
                    'id`: this endpoint never accepts it, and rejects it with the message shown ' .
                    'below rather than silently ignoring it. Also returned when `subscription_id' .
                    '` names a prepaid subscription: a wallet would double-meter a balance the s' .
                    'ubscription already tracks on its own, so the two are mutually exclusive.',
                    WalletErrorResponseException::class
                )
            )
            ->type(WalletResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns the wallet's balance and grant breakdown. For an active, metered wallet on a site with
     * metered consumption enabled, this is the only operation that computes a live balance from meter
     * usage; see the wallet resource's `metered_*` fields. It is also the only operation where `balance`
     * can differ from `posted_balance`, and a grant's `remaining` from its `posted_remaining`: the pending
     * usage is drawn from the grants in drain order, so the grants' `remaining` add up to `balance`.
     * Readable regardless of status. Archiving a wallet doesn't affect reads.
     *
     * @param int $id The Advanced Billing id of the wallet.
     *
     * @return WalletResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readWallet(int $id): WalletResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/wallets/{id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn('404', ErrorType::init('Not Found', WalletErrorResponseException::class))
            ->type(WalletResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Archives the wallet: blocks further grants, debits, adjustments, and purchases (each returns `422`),
     * stops any metered drawdown, and stops recurring funding (its schedule is deactivated with reason
     * `wallet_archived`, not removed), while reads and the ledger stay available. Nothing already on the
     * wallet is destroyed or clawed back, but nothing on it can be spent either, by any path, once
     * archived. Idempotent: archiving an already-archived wallet returns the same `200`. There is no
     * restore endpoint.
     *
     * @param int $id The Advanced Billing id of the wallet.
     *
     * @return WalletResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function archiveWallet(int $id): WalletResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/wallets/{id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn('404', ErrorType::init('Not Found', WalletErrorResponseException::class))
            ->type(WalletResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the wallet's editable attributes. Only `name` is editable; any other attribute in the body
     * is ignored. Send only the attributes to change.
     *
     * @param int $id The Advanced Billing id of the wallet.
     * @param UpdateWalletRequest|null $body
     *
     * @return WalletResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateWallet(int $id, ?UpdateWalletRequest $body = null): WalletResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/wallets/{id}.json')
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
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'Validation failure. Includes a body with no editable attribute (`parameter' .
                    '_missing`), a `name` over 255 characters (`validation_failed`), and an arch' .
                    'ived wallet (`wallet_archived`).',
                    WalletErrorResponseException::class
                )
            )
            ->type(WalletResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
