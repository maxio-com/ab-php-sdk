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
use AdvancedBillingLib\Models\CreateWalletPurchaseRequest;
use AdvancedBillingLib\Models\WalletPurchasePreviewResponse;
use AdvancedBillingLib\Models\WalletPurchaseResultResponse;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class WalletPurchasesController extends BaseController
{
    /**
     * Purchases prepaid units for the wallet and charges the subscription's payment method for them, using
     * the wallet's `price_point_id` unless a different price point is named. A successful purchase writes
     * a grant of origin `purchase`, with its expiration following the funding entitlement's grant
     * expiration policy.
     *
     * How "charged" works depends on the subscription's collection method. For card/automatic collection,
     * the payment is attempted immediately; a decline writes nothing to the wallet, and the call fails
     * with a `422` naming the gateway's decline reason. For invoice-billed (remittance) subscriptions,
     * there's no immediate charge to decline: an invoice is drafted, the wallet is credited right away,
     * and the invoice is issued afterward. If issuing the invoice fails at that point, the invoice is left
     * in draft state and reported for follow-up, but the call still returns `201` and the units already
     * credited are **not** rolled back. See [Preview Wallet
     * Purchase]($e/Wallet%20Purchases/previewWalletPurchase) to quote a price before charging anything.
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
     * @param CreateWalletPurchaseRequest|null $body
     *
     * @return WalletPurchaseResultResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createWalletPurchase(
        int $walletId,
        ?string $idempotencyKey = null,
        ?CreateWalletPurchaseRequest $body = null
    ): WalletPurchaseResultResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/wallets/{wallet_id}/purchases.json')
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
                    'Returned in two cases, both with nothing new charged or written. `idempote' .
                    'ncy_request_in_progress`: a purchase with the same `Idempotency-Key` is sti' .
                    'll running; retry with the same key once it finishes. `idempotency_key_outc' .
                    'ome_unknown`: an earlier purchase with this key ended with a server error o' .
                    'r an unexpected failure before its result was recorded, so it may or may no' .
                    't have charged the customer. Check the subscription\'s invoices before buyi' .
                    'ng again under a new key.',
                    WalletErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    "Validation or payment failure, or an `Idempotency-Key` reused with a diffe" .
                    "rent request (`idempotency_key_mismatch`). Validation failures include a mi" .
                    "ssing `purchase` root, a missing, malformed, non-positive, or out-of-range " .
                    "`quantity`, a `price_point_id` that doesn't belong to the wallet's billing " .
                    "product, an archived, custom, or otherwise unusable price point, no price p" .
                    "oint to purchase at (neither sent nor set on the wallet), a memo over 255 c" .
                    "haracters, an archived wallet, a price point with no price in the subscript" .
                    "ion's currency, a declined payment (message includes the gateway's own deta" .
                    "il), an invoice that couldn't be created at all, a payment that settled but" .
                    " whose units could not be credited (`purchase_paid_but_uncredited`, whose m" .
                    "essage ends with the paid invoice's uid so it can be reconciled), a decline" .
                    "d payment whose invoice could not be voided and is still open (`purchase_de" .
                    "clined_invoice_open`), a purchase that failed before payment and left its i" .
                    "nvoice open (`purchase_invoice_left_open`), and a wallet whose billing prod" .
                    "uct isn't a Wallet Product (only possible for a wallet created before Walle" .
                    "t Products became required).\n\n`purchase_paid_but_uncredited`, `purchase_d" .
                    "eclined_invoice_open` and `purchase_invoice_left_open` bodies also carry `i" .
                    "nvoice_uid` and `invoice_number`. With an `Idempotency-Key`, these three re" .
                    "sponses are stored and replayed like a success.",
                    WalletErrorResponseException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    '`purchase_payment_outcome_unknown`: the payment was attempted but the gate' .
                    'way did not confirm whether the card was charged. Nothing is credited by th' .
                    'is call; if the invoice turns out to be paid, the units are credited automa' .
                    'tically (see [Purchasing Units](page:introduction/basic-concepts/wallets#pu' .
                    'rchasing-units)). The body includes `invoice_uid` and `invoice_number` when' .
                    ' an invoice was created; check that invoice before buying again. Retrying w' .
                    'ith the same `Idempotency-Key` returns `409` (`idempotency_key_outcome_unkn' .
                    'own`) rather than charging again.',
                    WalletErrorResponseException::class
                )
            )
            ->type(WalletPurchaseResultResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Quotes the price for a purchase at the given quantity and price point, without charging the payment
     * method or writing to the wallet. Takes the same parameters as [Create Wallet
     * Purchase]($e/Wallet%20Purchases/createWalletPurchase).
     *
     * @param int $walletId The Advanced Billing id of the wallet.
     * @param CreateWalletPurchaseRequest|null $body
     *
     * @return WalletPurchasePreviewResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function previewWalletPurchase(
        int $walletId,
        ?CreateWalletPurchaseRequest $body = null
    ): WalletPurchasePreviewResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/wallets/{wallet_id}/purchases/preview.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('wallet_id', $walletId)->required(),
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
                    'Validation failure. Same cases as Create Wallet Purchase, minus the paymen' .
                    't-outcome cases, since nothing is charged.',
                    WalletErrorResponseException::class
                )
            )
            ->type(WalletPurchasePreviewResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
