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
use AdvancedBillingLib\Models\CreateWalletAdjustmentRequest;
use AdvancedBillingLib\Models\WalletGrantResultResponse;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class WalletAdjustmentsController extends BaseController
{
    /**
     * Posts a signed correction against a specific grant (or, for an overdraft entry, against the
     * overdraft): positive adds units to the grant, negative removes them. `reason` is required and is
     * written to the ledger row's `memo`. Writes exactly one ledger row, of kind `adjustment`.
     *
     * Use `source_transaction_id` to name a specific `debit` row when you're correcting one recorded
     * consumption rather than the grant's balance as a whole. When it names a grant-attributed debit, it's
     * recorded for audit only: naming it doesn't change how `amount` is applied, and more than one
     * adjustment may name the same row. When it names an overdraft entry, it switches the correction to
     * the overdraft path described below.
     *
     * An overdraft entry (a `debit` row with no `grant_id`, written when an `allow_negative` wallet
     * consumes past its grants) can be corrected without a `grant_id`. That correction is credit-only,
     * credits no grant, and is bounded by the usage the entry still records and by the overdraft the
     * wallet still owes. Once a later grant has repaid the overdraft, correct that grant's balance instead.
     *
     * An adjustment corrects the ledger, so it works on the grant's recorded remainder, `posted_remaining`,
     * not on `remaining`, which on a metered wallet read through [Read Wallet]($e/Wallets/readWallet)
     * also subtracts usage not yet posted. Send `posted_remaining` back as `expected_remaining`; sending
     * `remaining` on a metered wallet with pending usage returns `409`.
     *
     * `expected_remaining` and `expected_source_corrections` are optional optimistic-concurrency checks;
     * see their field descriptions. Use them when the correction's `amount` was derived from a value read
     * earlier that might have moved since.
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
     * @param CreateWalletAdjustmentRequest|null $body
     *
     * @return WalletGrantResultResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createWalletAdjustment(
        int $walletId,
        ?string $idempotencyKey = null,
        ?CreateWalletAdjustmentRequest $body = null
    ): WalletGrantResultResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/wallets/{wallet_id}/adjustments.json')
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
                    'Returned in two cases. A request with the same `Idempotency-Key` was still' .
                    ' being processed when this retry\'s wait for it timed out (`idempotency_req' .
                    'uest_in_progress`); retry with the same key once it finishes. Or the state ' .
                    'the `amount` was derived from has moved: either the grant\'s `posted_remain' .
                    'ing` no longer matches `expected_remaining`, or the corrections already pos' .
                    'ted against `source_transaction_id` no longer sum to `expected_source_corre' .
                    'ctions`. Nothing is written. Reload and re-derive the amount.',
                    WalletErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'Validation failure, or an `Idempotency-Key` reused with a different reques' .
                    't (`idempotency_key_mismatch`). Validation failures include a missing `reas' .
                    'on`, a `reason` over 255 characters, a missing or not-found `grant_id`, a z' .
                    'ero, malformed, or out-of-range `amount`, a negative adjustment exceeding t' .
                    'he grant\'s `posted_remaining`, a positive adjustment exceeding the grant\'' .
                    's `original`, a malformed `expected_remaining` or `expected_source_correcti' .
                    'ons` (including an empty string, which is treated as malformed rather than ' .
                    'omitted), a `source_transaction_id` not on this wallet or not a `debit` row' .
                    ', an overdraft correction that debits instead of credits ("Overdraft usage ' .
                    'can only be corrected downward"), that exceeds the usage the entry still re' .
                    'cords ("Adjustment exceeds the usage this entry still records"), or that ex' .
                    'ceeds the overdraft the wallet still owes ("Adjustment exceeds the wallet\'' .
                    's outstanding overdraft", followed by how much can still be corrected), a `' .
                    'grant_id` sent with an overdraft entry, and an archived wallet.',
                    WalletErrorResponseException::class
                )
            )
            ->type(WalletGrantResultResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
