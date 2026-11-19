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
use AdvancedBillingLib\Models\CreateWalletTransactionRequest;
use AdvancedBillingLib\Models\WalletTransactionResultResponse;
use AdvancedBillingLib\Models\WalletTransactionsListResponse;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class WalletTransactionsController extends BaseController
{
    /**
     * Lists the wallet's append-only ledger, newest first, paginated.
     *
     * @param int $walletId The Advanced Billing id of the wallet.
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
     * @return WalletTransactionsListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listWalletTransactions(
        int $walletId,
        ?int $page = 1,
        ?int $perPage = 20
    ): WalletTransactionsListResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/wallets/{wallet_id}/transactions.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('wallet_id', $walletId)->required(),
                QueryParam::init('page', $page)->commaSeparated(),
                QueryParam::init('per_page', $perPage)->commaSeparated()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden. The response body is plain text (`403 Forbidden`), not JSON. Return' .
                'ed when the Wallets feature isn\'t enabled for the site.')
            )
            ->throwErrorOn('404', ErrorType::init('Not Found', WalletErrorResponseException::class))
            ->type(WalletTransactionsListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Grants units to the wallet, or debits units from it, depending on `kind`. `amount` is always sent
     * positive, and `kind` determines the direction written to the ledger.
     *
     * **`kind: grant`**: a one-time manual top-up. On a non-negative balance, this creates a grant and
     * writes one ledger row. On a negative balance, it repays the overdraft first (a `kind: grant` row
     * with `grant_id: null`, for the repaid amount), then creates the grant: its `original` is always the
     * full `amount` sent, and its `remaining` is what's left after the overdraft was repaid, which is `0`
     * if the overdraft absorbed the whole top-up. The grant row is still written, and its `amount` is that
     * `remaining`, not `original`, so the ledger rows sum to the balance change. A grant may carry
     * `expires_at`; a debit may not.
     *
     * **`kind: debit`**: direct consumption. Drains grants earliest-expiration-first, one `kind: debit`
     * row per grant touched, plus any overdue expiration rows this same call triggers first (see below):
     * - Under the wallet's default `hard_stop_overflow: discard`, the drain is capped at the available
     * balance. For a metered wallet, that cap is the live metered balance, not the stored one, so a debit
     * can drain less than its stored balance would suggest, or even drain nothing at all (`201` with
     * `drained_amount: "0.0"`) if live usage has already consumed what the ledger hadn't caught up to yet.
     * A debit against a wallet whose *stored* balance is already zero or negative (`discard` only ever
     * reaches zero) returns `422 "Wallet is depleted"`. Before that failure is returned, this call still
     * expires any grants that were already overdue, so a `422` response can still leave new `kind:
     * expiration` rows written.
     * - Under `hard_stop_overflow: allow_negative`, the full amount is deducted. The excess past the
     * wallet's grants is booked as one overdraft row with `grant_id: null`, `rejected_amount` is always
     * `"0.0"`, and the balance goes negative.
     *
     * @param int $walletId The Advanced Billing id of the wallet.
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
     * @param CreateWalletTransactionRequest|null $body
     *
     * @return WalletTransactionResultResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createWalletTransaction(
        int $walletId,
        ?string $idempotencyKey = null,
        ?CreateWalletTransactionRequest $body = null
    ): WalletTransactionResultResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/wallets/{wallet_id}/transactions.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('wallet_id', $walletId)->required(),
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
            ->throwErrorOn('404', ErrorType::init('Not Found', WalletErrorResponseException::class))
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
                    't (`idempotency_key_mismatch`). Validation failures include an unrecognized' .
                    ' `kind`, a missing `wallet_transaction` root, a malformed, non-positive, or' .
                    ' out-of-range `amount`, a memo over 255 characters, `expires_at` sent with ' .
                    '`kind: debit`, a malformed or past-dated `expires_at`, an archived wallet, ' .
                    'and, for `kind: debit` only, a depleted wallet.',
                    WalletErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    'For a metered wallet, usage could be read but settling it against the ledger failed.',
                    WalletErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '503',
                ErrorType::init(
                    'For a metered wallet, live usage could not be read in time to compute the ' .
                    'debit. Not returned for `kind: grant`.',
                    WalletErrorResponseException::class
                )
            )
            ->type(WalletTransactionResultResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
