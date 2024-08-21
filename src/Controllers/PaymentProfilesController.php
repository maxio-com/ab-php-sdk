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
use AdvancedBillingLib\Exceptions\ErrorStringMapResponseException;
use AdvancedBillingLib\Models\BankAccountResponse;
use AdvancedBillingLib\Models\BankAccountVerificationRequest;
use AdvancedBillingLib\Models\CreatePaymentProfileRequest;
use AdvancedBillingLib\Models\GetOneTimeTokenRequest;
use AdvancedBillingLib\Models\PaymentProfileResponse;
use AdvancedBillingLib\Models\UpdatePaymentProfileRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class PaymentProfilesController extends BaseController
{
    /**
     * Use this endpoint to create a payment profile for a customer.
     *
     * Payment Profiles house the credit card, ACH (Authorize.Net or Stripe only,) or PayPal (Braintree
     * only,) data for a customer. The payment information is attached to the customer within Advanced
     * Billing, as opposed to the Subscription itself.
     *
     * You must include a customer_id so that Advanced Billing will attach it to the customer entry. If no
     * customer_id is included the API will return a 404.
     *
     * ## Create a Payment Profile for ACH usage
     *
     * If you would like to create a payment method that is a Bank Account applicable for ACH payments use
     * the following:
     * ```json
     * {
     * "payment_profile": {
     * "customer_id": [Valid-Customer-ID],
     * "bank_name": "Best Bank",
     * "bank_routing_number": "021000089",
     * "bank_account_number": "111111111111",
     * "bank_account_type": "checking",
     * "bank_account_holder_type": "business",
     * "payment_type": "bank_account"
     * }
     * }
     * ```
     *
     * ## Taxable Subscriptions
     *
     * If your subscriber pays taxes on their purchased product, and you are attempting to create or update
     * the `payment_profile`, complete address information is required. For information on required address
     * formatting to allow your subscriber to be taxed, please see our documentation [here](https:
     * //developers.chargify.com/docs/developer-docs/d2e9e34db740e-signups#taxes)
     *
     * ## Payment Profile Documentation
     *
     * Full documentation on how Payment Profiles operate within Advanced Billing can be located under the
     * following links:
     *
     * + [Subscriber Payment Details](https://maxio.zendesk.com/hc/en-us/articles/24251599929613-
     * Subscription-Summary-Payment-Details-Tab)
     * + [Self Service Pages](https://maxio.zendesk.com/hc/en-us/articles/24261425318541-Self-Service-
     * Pages) (Allows credit card updates by Subscriber)
     * + [Public Signup Pages payment settings](https://maxio.zendesk.com/hc/en-us/articles/24261368332557-
     * Individual-Page-Settings)
     *
     * ## Create a Payment Profile with a Chargify.js token
     *
     * ```json
     * {
     * "payment_profile": {
     * "customer_id": 1036,
     * "chargify_token": "tok_w68qcpnftyv53jk33jv6wk3w"
     * }
     * }
     * ```
     *
     * ## Active Payment Methods
     *
     * Creating a new payment profile for a Customer via the API will not make that Payment Profile current
     * for any of the Customer’s Subscriptions. In order to utilize the payment profile as the default, it
     * must be set as the default payment profile for the subscription or subscription group.
     *
     * ## Requirements
     *
     * Either the full_number, expiration_month, and expiration_year or if you have an existing vault_token
     * from your gateway, that vault_token and the current_vault are required.
     * Passing in the vault_token and current_vault are only allowed when creating a new payment profile.
     *
     * ### Taxable Subscriptions
     *
     * If your subscriber pays taxes on their purchased product, and you are attempting to create or update
     * the `payment_profile`, complete address information is required. For information on required address
     * formatting to allow your subscriber to be taxed, please see our documentation [here](https:
     * //developers.chargify.com/docs/developer-docs/d2e9e34db740e-signups#taxes)
     *
     * ## BraintreeBlue
     * Some merchants use Braintree JavaScript libraries directly and then pass `payment_method_nonce`
     * and/or `paypal_email` to create a payment profile. This implementation is deprecated and does not
     * handle 3D Secure.  Instead, we have provided [Chargify.js](https://developers.chargify.
     * com/docs/developer-docs/ZG9jOjE0NjAzNDI0-overview) which is continuously improved and supports
     * Credit Cards (along with 3D Secure), PayPal and ApplePay payment types.
     *
     * ## GoCardless
     *
     * For more information on GoCardless, please view the following resources:
     *
     * + [Full documentation on GoCardless](https://maxio.zendesk.com/hc/en-us/articles/24176159136909-
     * GoCardless)
     *
     * + [Using Chargify.js with GoCardless - minimal example](https://developers.chargify.
     * com/docs/developer-docs/ZG9jOjE0NjAzNDIy-examples#minimal-example-with-direct-debit-gocardless-
     * gateway)
     *
     * + [Using Chargify.js with GoCardless - full example](https://developers.chargify.com/docs/developer-
     * docs/ZG9jOjE0NjAzNDIy-examples#full-example-with-direct-debit-gocardless-gateway)
     *
     * ### GoCardless with Local Bank Details
     *
     * Following examples create customer, bank account and mandate in GoCardless:
     *
     * ```json
     * {
     * "payment_profile": {
     * "customer_id": "Valid-Customer-ID",
     * "bank_name": "Royal Bank of France",
     * "bank_account_number": "0000000",
     * "bank_routing_number": "0003",
     * "bank_branch_code": "00006",
     * "payment_type": "bank_account",
     * "billing_address": "20 Place de la Gare",
     * "billing_city": "Colombes",
     * "billing_state": "Île-de-France",
     * "billing_zip": "92700",
     * "billing_country": "FR"
     * }
     * }
     * ```
     *
     * ### GoCardless with IBAN
     *
     * ```json
     * {
     * "payment_profile": {
     * "customer_id": "24907598",
     * "bank_name": "French Bank",
     * "bank_iban": "FR1420041010050500013M02606",
     * "payment_type": "bank_account",
     * "billing_address": "20 Place de la Gare",
     * "billing_city": "Colombes",
     * "billing_state": "Île-de-France",
     * "billing_zip": "92700",
     * "billing_country": "FR"
     * }
     * }
     * ```
     *
     * ### Importing GoCardless
     *
     * If the customer, bank account, and mandate already exist in GoCardless, a payment profile can be
     * created by using the IDs. In order to create masked versions of `bank_account_number` and
     * `bank_routing_number` that are used to display within Advanced Billing Admin UI, you can pass the
     * last four digits for this fields which then will be saved in this form `XXXX[four-provided-digits]`.
     *
     * ```json
     * {
     * "payment_profile": {
     * "customer_id": "24907598",
     * "customer_vault_token": [Existing GoCardless Customer ID]
     * "vault_token": [Existing GoCardless Mandate ID],
     * "current_vault": "gocardless",
     * "bank_name": "French Bank",
     * "bank_account_number": [Last Four Of The Existing Account Number or IBAN if applicable],
     * "bank_routing_number": [Last Four Of The Existing Routing Number],
     * "payment_type": "bank_account",
     * "billing_address": "20 Place de la Gare",
     * "billing_city": "Colombes",
     * "billing_state": "Île-de-France",
     * "billing_zip": "92700",
     * "billing_country": "FR"
     * }
     * }
     * ```
     *
     * ## SEPA Direct Debit
     *
     * For more information on Stripe SEPA Direct Debit, please view the following resources:
     *
     * + [Full documentation on Stripe SEPA Direct Debit](https://maxio.zendesk.com/hc/en-
     * us/articles/24176170430093-Stripe-SEPA-and-BECS-Direct-Debit)
     *
     * + [Using Chargify.js with Stripe Direct Debit - minimal example](https://developers.chargify.
     * com/docs/developer-docs/ZG9jOjE0NjAzNDIy-examples#minimal-example-with-sepa-or-becs-direct-debit-
     * stripe-gateway)
     *
     * + [Using Chargify.js with Stripe Direct Debit - full example](https://developers.chargify.
     * com/docs/developer-docs/ZG9jOjE0NjAzNDIy-examples#full-example-with-sepa-direct-debit-stripe-
     * gateway)
     *
     * ### Stripe SEPA Direct Debit Payment Profiles
     *
     * The following example creates a customer, bank account and mandate in Stripe:
     *
     *
     * ```json
     * {
     * "payment_profile": {
     * "customer_id": "24907598",
     * "bank_name": "Deutsche bank",
     * "bank_iban": "DE89370400440532013000",
     * "payment_type": "bank_account",
     * "billing_address": "Test",
     * "billing_city": "Berlin",
     * "billing_state": "Brandenburg",
     * "billing_zip": "12345",
     * "billing_country": "DE"
     * }
     * }
     * ```
     *
     * ## Stripe BECS Direct Debit
     *
     * For more information on Stripe BECS Direct Debit, please view the following resources:
     *
     * + [Full documentation on Stripe BECS Direct Debit](https://maxio.zendesk.com/hc/en-
     * us/articles/24176170430093-Stripe-SEPA-and-BECS-Direct-Debit)
     *
     * + [Using Chargify.js with Stripe BECS Direct Debit - minimal example](https://developers.chargify.
     * com/docs/developer-docs/ZG9jOjE0NjAzNDIy-examples#minimal-example-with-sepa-or-becs-direct-debit-
     * stripe-gateway)
     *
     * + [Using Chargify.js with Stripe BECS Direct Debit - full example](https://developers.chargify.
     * com/docs/developer-docs/ZG9jOjE0NjAzNDIy-examples#full-example-with-sepa-direct-debit-stripe-
     * gateway)
     *
     * ### Stripe BECS Direct Debit Payment Profiles
     *
     * The following example creates a customer, bank account and mandate in Stripe:
     *
     *
     * ```json
     * {
     * "payment_profile": {
     * "customer_id": "24907598",
     * "bank_name": "Australian bank",
     * "bank_branch_code": "000000",
     * "bank_account_number": "000123456"
     * "payment_type": "bank_account",
     * "billing_address": "Test",
     * "billing_city": "Stony Rise",
     * "billing_state": "Tasmania",
     * "billing_zip": "12345",
     * "billing_country": "AU"
     * }
     * }
     * ```
     *
     * ## Stripe BACS Direct Debit
     *
     * Contact the support team to enable this payment method.
     * For more information on Stripe BACS Direct Debit, please view the following resources:
     *
     * + [Full documentation on Stripe BACS Direct Debit](https://maxio.zendesk.com/hc/en-
     * us/articles/24176170430093-Stripe-SEPA-and-BECS-Direct-Debit)
     *
     * ### Stripe BACS Direct Debit Payment Profiles
     *
     * The following example creates a customer, bank account and mandate in Stripe:
     *
     *
     * ```json
     * {
     * "payment_profile": {
     * "customer_id": "24907598",
     * "bank_name": "British bank",
     * "bank_branch_code": "108800",
     * "bank_account_number": "00012345"
     * "payment_type": "bank_account",
     * "billing_address": "Test",
     * "billing_city": "London",
     * "billing_state": "LND",
     * "billing_zip": "12345",
     * "billing_country": "GB"
     * }
     * }
     * ```
     *
     * ## 3D Secure - Checkout
     *
     * It may happen that a payment needs 3D Secure Authentication when the payment profile is created;
     * this is referred to in our help docs as a [post-authentication flow](https://maxio.zendesk.com/hc/en-
     * us/articles/24176278996493-Testing-Implementing-3D-Secure#psd2-flows-pre-authentication-and-post-
     * authentication). The server returns `422 Unprocessable Entity` in this case with the following
     * response:
     *
     * ```json
     * {
     * "jsonapi": {
     * "version": "1.0"
     * },
     * "errors": [
     * {
     * "title": "This card requires 3DSecure verification.",
     * "detail": "This card requires 3D secure authentication. Redirect the customer to the URL
     * from the action_link attribute to authenticate. Attach callback_url param to this URL if you want to
     * be notified about the result of 3D Secure authentication. Attach redirect_url param to this URL if
     * you want to redirect a customer back to your page after 3D Secure authentication. Example: https:
     * //checkout-test.chargifypay.test/3d-secure/checkout/pay_uerzhsxd5uhkbodx5jhvkg6yeu?
     * one_time_token_id=93&callback_url=http://localhost:4000&redirect_url=https://yourpage.com will do a
     * POST request to https://localhost:4000 after credit card is authenticated and will redirect a
     * customer to https://yourpage.com after 3DS authentication.",
     * "links": {
     * "action_link": "https://checkout-test.chargifypay.test/3d-
     * secure/checkout/pay_uerzhsxd5uhkbodx5jhvkg6yeu?one_time_token_id=93"
     * }
     * }
     * ]
     * }
     * ```
     *
     * To let the customer go through 3D Secure Authentication, they need to be redirected to the URL
     * specified in `action_link`.
     * Optionally, you can specify `callback_url` parameter in the `action_link` URL if you’d like to be
     * notified about the result of 3D Secure Authentication. The `callback_url` will return the following
     * information:
     *
     * - whether the authentication was successful (`success`)
     * - the payment profile ID (`payment_profile_id`)
     *
     * Lastly, you can also specify a `redirect_url` parameter within the `action_link` URL if you’d like
     * to redirect a customer back to your site.
     *
     * It is not possible to use `action_link` in an iframe inside a custom application. You have to
     * redirect the customer directly to the `action_link`, then, to be notified about the result, use
     * `redirect_url` or `callback_url`.
     *
     * The final URL that you send a customer to complete 3D Secure may resemble the following, where the
     * first half is the `action_link` and the second half contains a `redirect_url` and `callback_url`:
     * `https://checkout-test.chargifypay.test/3d-secure/checkout/pay_uerzhsxd5uhkbodx5jhvkg6yeu?
     * one_time_token_id=93&callback_url=http://localhost:4000&redirect_url=https://yourpage.com`
     *
     * ### Example Redirect Flow
     *
     * You may wish to redirect customers to different pages depending on whether their SCA was performed
     * successfully. Here's an example flow to use as a reference:
     *
     * 1. Create a payment profile via API; it requires 3DS
     * 2. You receive a `action_link` in the response.
     * 3. Use this `action_link` to, for example, connect with your internal resources or generate a
     * session_id
     * 4. Include 1 of those attributes inside the `callback_url` and `redirect_url` to be aware which
     * “session” this applies to
     * 5. Redirect the customer to the `action_link` with `callback_url` and `redirect_url` applied
     * 6. After the customer finishes 3DS authentication, we let you know the result by making a request to
     * applied `callback_url`.
     * 7. After that, we redirect the customer to the `redirect_url`; at this point the result of
     * authentication is known
     * 8. Optionally, you can use the applied "msg" param in the `redirect_url` to determine whether it was
     * successful or not
     *
     * @param CreatePaymentProfileRequest|null $body When following the IBAN or the Local Bank
     *        details examples, a customer, bank account and mandate will be created in your
     *        current vault. If the customer, bank account, and mandate already exist in your
     *        vault, follow the Import example to link the payment profile into Advanced Billing.
     *
     * @return PaymentProfileResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createPaymentProfile(?CreatePaymentProfileRequest $body = null): PaymentProfileResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/payment_profiles.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(PaymentProfileResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method will return all of the active `payment_profiles` for a Site, or for one Customer within
     * a site.  If no payment profiles are found, this endpoint will return an empty array, not a 404.
     *
     * @param array $options Array with all options for search
     *
     * @return PaymentProfileResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listPaymentProfiles(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/payment_profiles.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('customer_id', $options)->commaSeparated()->extract('customerId')
            );

        $_resHandler = $this->responseHandler()->type(PaymentProfileResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Using the GET method you can retrieve a Payment Profile identified by its unique ID.
     *
     * Please note that a different JSON object will be returned if the card method on file is a bank
     * account.
     *
     * ### Response for Bank Account
     *
     * Example response for Bank Account:
     *
     * ```
     * {
     * "payment_profile": {
     * "id": 10089892,
     * "first_name": "Chester",
     * "last_name": "Tester",
     * "customer_id": 14543792,
     * "current_vault": "bogus",
     * "vault_token": "0011223344",
     * "billing_address": "456 Juniper Court",
     * "billing_city": "Boulder",
     * "billing_state": "CO",
     * "billing_zip": "80302",
     * "billing_country": "US",
     * "customer_vault_token": null,
     * "billing_address_2": "",
     * "bank_name": "Bank of Kansas City",
     * "masked_bank_routing_number": "XXXX6789",
     * "masked_bank_account_number": "XXXX3344",
     * "bank_account_type": "checking",
     * "bank_account_holder_type": "personal",
     * "payment_type": "bank_account",
     * "site_gateway_setting_id": 1,
     * "gateway_handle": null
     * }
     * }
     * ```
     *
     * @param int $paymentProfileId The Chargify id of the payment profile
     *
     * @return PaymentProfileResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readPaymentProfile(int $paymentProfileId): PaymentProfileResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/payment_profiles/{payment_profile_id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('payment_profile_id', $paymentProfileId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->type(PaymentProfileResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * ## Partial Card Updates
     *
     * In the event that you are using the Authorize.net, Stripe, Cybersource, Forte or Braintree Blue
     * payment gateways, you can update just the billing and contact information for a payment method. Note
     * the lack of credit-card related data contained in the JSON payload.
     *
     * In this case, the following JSON is acceptable:
     *
     * ```
     * {
     * "payment_profile": {
     * "first_name": "Kelly",
     * "last_name": "Test",
     * "billing_address": "789 Juniper Court",
     * "billing_city": "Boulder",
     * "billing_state": "CO",
     * "billing_zip": "80302",
     * "billing_country": "US",
     * "billing_address_2": null
     * }
     * }
     * ```
     *
     * The result will be that you have updated the billing information for the card, yet retained the
     * original card number data.
     *
     * ## Specific notes on updating payment profiles
     *
     * - Merchants with **Authorize.net**, **Cybersource**, **Forte**, **Braintree Blue** or **Stripe** as
     * their payment gateway can update their Customer’s credit cards without passing in the full credit
     * card number and CVV.
     *
     * - If you are using **Authorize.net**, **Cybersource**, **Forte**, **Braintree Blue** or **Stripe**,
     * Advanced Billing will ignore the credit card number and CVV when processing an update via the API,
     * and attempt a partial update instead. If you wish to change the card number on a payment profile,
     * you will need to create a new payment profile for the given customer.
     *
     * - A Payment Profile cannot be updated with the attributes of another type of Payment Profile. For
     * example, if the payment profile you are attempting to update is a credit card, you cannot pass in
     * bank account attributes (like `bank_account_number`), and vice versa.
     *
     * - Updating a payment profile directly will not trigger an attempt to capture a past-due balance. If
     * this is the intent, update the card details via the Subscription instead.
     *
     * - If you are using Authorize.net or Stripe, you may elect to manually trigger a retry for a past due
     * subscription after a partial update.
     *
     * @param int $paymentProfileId The Chargify id of the payment profile
     * @param UpdatePaymentProfileRequest|null $body
     *
     * @return PaymentProfileResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePaymentProfile(
        int $paymentProfileId,
        ?UpdatePaymentProfileRequest $body = null
    ): PaymentProfileResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/payment_profiles/{payment_profile_id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('payment_profile_id', $paymentProfileId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorStringMapResponseException::class
                )
            )
            ->type(PaymentProfileResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes an unused payment profile.
     *
     * If the payment profile is in use by one or more subscriptions or groups, a 422 and error message
     * will be returned.
     *
     * @param int $paymentProfileId The Chargify id of the payment profile
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteUnusedPaymentProfile(int $paymentProfileId): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/payment_profiles/{payment_profile_id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('payment_profile_id', $paymentProfileId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            );

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This will delete a payment profile belonging to the customer on the subscription.
     *
     * + If the customer has multiple subscriptions, the payment profile will be removed from all of them.
     *
     * + If you delete the default payment profile for a subscription, you will need to specify another
     * payment profile to be the default through the api, or either prompt the user to enter a card in the
     * billing portal or on the self-service page, or visit the Payment Details tab on the subscription in
     * the Admin UI and use the “Add New Credit Card” or “Make Active Payment Method” link, (depending on
     * whether there are other cards present).
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $paymentProfileId The Chargify id of the payment profile
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteSubscriptionsPaymentProfile(int $subscriptionId, int $paymentProfileId): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/subscriptions/{subscription_id}/payment_profiles/{payment_profile_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('payment_profile_id', $paymentProfileId)->required()
            );

        $this->execute($_reqBuilder);
    }

    /**
     * Submit the two small deposit amounts the customer received in their bank account in order to verify
     * the bank account. (Stripe only)
     *
     * @param int $bankAccountId Identifier of the bank account in the system.
     * @param BankAccountVerificationRequest|null $body
     *
     * @return BankAccountResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function verifyBankAccount(
        int $bankAccountId,
        ?BankAccountVerificationRequest $body = null
    ): BankAccountResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/bank_accounts/{bank_account_id}/verification.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('bank_account_id', $bankAccountId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(BankAccountResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This will delete a Payment Profile belonging to a Subscription Group.
     *
     * **Note**: If the Payment Profile belongs to multiple Subscription Groups and/or Subscriptions, it
     * will be removed from all of them.
     *
     * @param string $uid The uid of the subscription group
     * @param int $paymentProfileId The Chargify id of the payment profile
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteSubscriptionGroupPaymentProfile(string $uid, int $paymentProfileId): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/subscription_groups/{uid}/payment_profiles/{payment_profile_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('uid', $uid)->required(),
                TemplateParam::init('payment_profile_id', $paymentProfileId)->required()
            );

        $this->execute($_reqBuilder);
    }

    /**
     * This will change the default payment profile on the subscription to the existing payment profile
     * with the id specified.
     *
     * You must elect to change the existing payment profile to a new payment profile ID in order to
     * receive a satisfactory response from this endpoint.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     * @param int $paymentProfileId The Chargify id of the payment profile
     *
     * @return PaymentProfileResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function changeSubscriptionDefaultPaymentProfile(
        int $subscriptionId,
        int $paymentProfileId
    ): PaymentProfileResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/payment_profiles/{payment_profile_id}/change_paym' .
            'ent_profile.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('subscription_id', $subscriptionId)->required(),
                TemplateParam::init('payment_profile_id', $paymentProfileId)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(PaymentProfileResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This will change the default payment profile on the subscription group to the existing payment
     * profile with the id specified.
     *
     * You must elect to change the existing payment profile to a new payment profile ID in order to
     * receive a satisfactory response from this endpoint.
     *
     * The new payment profile must belong to the subscription group's customer, otherwise you will receive
     * an error.
     *
     * @param string $uid The uid of the subscription group
     * @param int $paymentProfileId The Chargify id of the payment profile
     *
     * @return PaymentProfileResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function changeSubscriptionGroupDefaultPaymentProfile(
        string $uid,
        int $paymentProfileId
    ): PaymentProfileResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscription_groups/{uid}/payment_profiles/{payment_profile_id}/change_payment_profile.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('uid', $uid)->required(),
                TemplateParam::init('payment_profile_id', $paymentProfileId)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(PaymentProfileResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * One Time Tokens aka Advanced Billing Tokens house the credit card or ACH (Authorize.Net or Stripe
     * only) data for a customer.
     *
     * You can use One Time Tokens while creating a subscription or payment profile instead of passing all
     * bank account or credit card data directly to a given API endpoint.
     *
     * To obtain a One Time Token you have to use [Chargify.js](https://developers.chargify.
     * com/docs/developer-docs/ZG9jOjE0NjAzNDI0-overview).
     *
     * @param string $chargifyToken Advanced Billing Token
     *
     * @return GetOneTimeTokenRequest Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readOneTimeToken(string $chargifyToken): GetOneTimeTokenRequest
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/one_time_tokens/{chargify_token}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('chargify_token', $chargifyToken)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'Not Found:\'{$response.body}\'',
                    ErrorListResponseException::class
                )
            )
            ->type(GetOneTimeTokenRequest::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * You can send a "request payment update" email to the customer associated with the subscription.
     *
     * If you attempt to send a "request payment update" email more than five times within a 30-minute
     * period, you will receive a `422` response with an error message in the body. This error message will
     * indicate that the request has been rejected due to excessive attempts, and will provide instructions
     * on how to resubmit the request.
     *
     * Additionally, if you attempt to send a "request payment update" email for a subscription that does
     * not exist, you will receive a `404` error response. This error message will indicate that the
     * subscription could not be found, and will provide instructions on how to correct the error and
     * resubmit the request.
     *
     * These error responses are designed to prevent excessive or invalid requests, and to provide clear
     * and helpful information to users who encounter errors during the request process.
     *
     * @param int $subscriptionId The Chargify id of the subscription
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendRequestUpdatePaymentEmail(int $subscriptionId): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/subscriptions/{subscription_id}/request_payment_profiles_update.json'
        )->auth('BasicAuth')->parameters(TemplateParam::init('subscription_id', $subscriptionId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            );

        $this->execute($_reqBuilder, $_resHandler);
    }
}
