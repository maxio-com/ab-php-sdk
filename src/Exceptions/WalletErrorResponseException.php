<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

use AdvancedBillingLib\ApiHelper;

/**
 * The JSON error body returned by every wallet, transaction, adjustment, purchase, and Wallet Product
 * endpoint for `400`, `404`, `409`, `422`, `500`, and `503` responses. A `403` is not JSON; it is the
 * plain text `403 Forbidden`.
 */
class WalletErrorResponseException extends ApiException
{
    /**
     * @var string[]
     */
    private $errors;

    /**
     * @var string
     */
    private $codeProperty;

    /**
     * @var string|null
     */
    private $invoiceUid;

    /**
     * @var string|null
     */
    private $invoiceNumber;

    /**
     * @param string $reason
     * @param \AdvancedBillingLib\Http\HttpRequest $request
     * @param \AdvancedBillingLib\Http\HttpResponse $response
     * @param string[] $errors
     * @param string $codeProperty
     */
    public function __construct(
        string $reason,
        \AdvancedBillingLib\Http\HttpRequest $request,
        \AdvancedBillingLib\Http\HttpResponse $response,
        array $errors,
        string $codeProperty
    ) {
        parent::__construct($reason, $request, $response);
        $this->errors = $errors;
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Errors.
     * Human-readable messages. These may be reworded, so match on `code` instead.
     *
     * @return string[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Human-readable messages. These may be reworded, so match on `code` instead.
     *
     * @required
     * @maps errors
     *
     * @param string[] $errors
     */
    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Returns Code Property.
     * A stable, machine-readable reason, for example `wallet_depleted`, `wallet_not_found`,
     * `wallet_product_not_found`, `price_point_archived`, `kind_invalid`, or `parameter_missing`. Failures
     * that come from record validation, such as a field that fails a model rule, report
     * `validation_failed`.
     */
    public function getCodeProperty(): string
    {
        return $this->codeProperty;
    }

    /**
     * Sets Code Property.
     * A stable, machine-readable reason, for example `wallet_depleted`, `wallet_not_found`,
     * `wallet_product_not_found`, `price_point_archived`, `kind_invalid`, or `parameter_missing`. Failures
     * that come from record validation, such as a field that fails a model rule, report
     * `validation_failed`.
     *
     * @required
     * @maps code
     */
    public function setCodeProperty(string $codeProperty): void
    {
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Invoice Uid.
     * Returned only by Create Wallet Purchase with `purchase_paid_but_uncredited`,
     * `purchase_declined_invoice_open`, `purchase_invoice_left_open` and
     * `purchase_payment_outcome_unknown`: the uid of the invoice the purchase created. Check it before
     * buying again.
     */
    public function getInvoiceUid(): ?string
    {
        return $this->invoiceUid;
    }

    /**
     * Sets Invoice Uid.
     * Returned only by Create Wallet Purchase with `purchase_paid_but_uncredited`,
     * `purchase_declined_invoice_open`, `purchase_invoice_left_open` and
     * `purchase_payment_outcome_unknown`: the uid of the invoice the purchase created. Check it before
     * buying again.
     *
     * @maps invoice_uid
     */
    public function setInvoiceUid(?string $invoiceUid): void
    {
        $this->invoiceUid = $invoiceUid;
    }

    /**
     * Returns Invoice Number.
     * Returned alongside `invoice_uid`: the number of the invoice the purchase created.
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    /**
     * Sets Invoice Number.
     * Returned alongside `invoice_uid`: the number of the invoice the purchase created.
     *
     * @maps invoice_number
     */
    public function setInvoiceNumber(?string $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * Converts the WalletErrorResponseException object to a human-readable string representation.
     *
     * @return string The string representation of the WalletErrorResponseException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletErrorResponseException',
            [
                'errors' => $this->errors,
                'codeProperty' => $this->codeProperty,
                'invoiceUid' => $this->invoiceUid,
                'invoiceNumber' => $this->invoiceNumber,
                'additionalProperties' => $this->additionalProperties
            ],
            parent::__toString()
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }
}
