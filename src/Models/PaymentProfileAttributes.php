<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

/**
 * alias to credit_card_attributes
 */
class PaymentProfileAttributes implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $chargifyToken;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $maskedCardNumber;

    /**
     * @var string|null
     */
    private $fullNumber;

    /**
     * @var string|null
     */
    private $cardType;

    /**
     * @var int|string|null
     */
    private $expirationMonth;

    /**
     * @var int|string|null
     */
    private $expirationYear;

    /**
     * @var string|null
     */
    private $billingAddress;

    /**
     * @var array
     */
    private $billingAddress2 = [];

    /**
     * @var string|null
     */
    private $billingCity;

    /**
     * @var string|null
     */
    private $billingState;

    /**
     * @var string|null
     */
    private $billingCountry;

    /**
     * @var string|null
     */
    private $billingZip;

    /**
     * @var string|null
     */
    private $currentVault;

    /**
     * @var string|null
     */
    private $vaultToken;

    /**
     * @var string|null
     */
    private $customerVaultToken;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var string|null
     */
    private $paypalEmail;

    /**
     * @var string|null
     */
    private $paymentMethodNonce;

    /**
     * @var string|null
     */
    private $gatewayHandle;

    /**
     * @var string|null
     */
    private $cvv;

    /**
     * @var string|null
     */
    private $lastFour;

    /**
     * Returns Chargify Token.
     * (Optional) Token received after sending billing informations using chargify.js. This token must be
     * passed as a sole attribute of `payment_profile_attributes` (i.e. tok_9g6hw85pnpt6knmskpwp4ttt)
     */
    public function getChargifyToken(): ?string
    {
        return $this->chargifyToken;
    }

    /**
     * Sets Chargify Token.
     * (Optional) Token received after sending billing informations using chargify.js. This token must be
     * passed as a sole attribute of `payment_profile_attributes` (i.e. tok_9g6hw85pnpt6knmskpwp4ttt)
     *
     * @maps chargify_token
     */
    public function setChargifyToken(?string $chargifyToken): void
    {
        $this->chargifyToken = $chargifyToken;
    }

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Payment Type.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     *
     * @maps payment_type
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns First Name.
     * (Optional) First name on card or bank account. If omitted, the first_name from customer attributes
     * will be used.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * (Optional) First name on card or bank account. If omitted, the first_name from customer attributes
     * will be used.
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * (Optional) Last name on card or bank account. If omitted, the last_name from customer attributes
     * will be used.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * (Optional) Last name on card or bank account. If omitted, the last_name from customer attributes
     * will be used.
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Masked Card Number.
     */
    public function getMaskedCardNumber(): ?string
    {
        return $this->maskedCardNumber;
    }

    /**
     * Sets Masked Card Number.
     *
     * @maps masked_card_number
     */
    public function setMaskedCardNumber(?string $maskedCardNumber): void
    {
        $this->maskedCardNumber = $maskedCardNumber;
    }

    /**
     * Returns Full Number.
     * The full credit card number (string representation, i.e. 5424000000000015)
     */
    public function getFullNumber(): ?string
    {
        return $this->fullNumber;
    }

    /**
     * Sets Full Number.
     * The full credit card number (string representation, i.e. 5424000000000015)
     *
     * @maps full_number
     */
    public function setFullNumber(?string $fullNumber): void
    {
        $this->fullNumber = $fullNumber;
    }

    /**
     * Returns Card Type.
     * (Optional, used only for Subscription Import) If you know the card type (i.e. Visa, MC, etc) you may
     * supply it here so that we may display the card type in the UI.
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * Sets Card Type.
     * (Optional, used only for Subscription Import) If you know the card type (i.e. Visa, MC, etc) you may
     * supply it here so that we may display the card type in the UI.
     *
     * @maps card_type
     * @factory \AdvancedBillingLib\Models\CardType::checkValue
     */
    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * Returns Expiration Month.
     * (Optional when performing a Subscription Import via vault_token, required otherwise) The 1- or 2-
     * digit credit card expiration month, as an integer or string, i.e. 5
     *
     * @return int|string|null
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * Sets Expiration Month.
     * (Optional when performing a Subscription Import via vault_token, required otherwise) The 1- or 2-
     * digit credit card expiration month, as an integer or string, i.e. 5
     *
     * @maps expiration_month
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $expirationMonth
     */
    public function setExpirationMonth($expirationMonth): void
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * Returns Expiration Year.
     * (Optional when performing a Subscription Import via vault_token, required otherwise) The 4-digit
     * credit card expiration year, as an integer or string, i.e. 2012
     *
     * @return int|string|null
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * Sets Expiration Year.
     * (Optional when performing a Subscription Import via vault_token, required otherwise) The 4-digit
     * credit card expiration year, as an integer or string, i.e. 2012
     *
     * @maps expiration_year
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $expirationYear
     */
    public function setExpirationYear($expirationYear): void
    {
        $this->expirationYear = $expirationYear;
    }

    /**
     * Returns Billing Address.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing street address (i.e. 123 Main St.). This value is merely passed through to the
     * payment gateway.
     */
    public function getBillingAddress(): ?string
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing street address (i.e. 123 Main St.). This value is merely passed through to the
     * payment gateway.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?string $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Billing Address 2.
     * (Optional) Second line of the customer’s billing address i.e. Apt. 100
     */
    public function getBillingAddress2(): ?string
    {
        if (count($this->billingAddress2) == 0) {
            return null;
        }
        return $this->billingAddress2['value'];
    }

    /**
     * Sets Billing Address 2.
     * (Optional) Second line of the customer’s billing address i.e. Apt. 100
     *
     * @maps billing_address_2
     */
    public function setBillingAddress2(?string $billingAddress2): void
    {
        $this->billingAddress2['value'] = $billingAddress2;
    }

    /**
     * Unsets Billing Address 2.
     * (Optional) Second line of the customer’s billing address i.e. Apt. 100
     */
    public function unsetBillingAddress2(): void
    {
        $this->billingAddress2 = [];
    }

    /**
     * Returns Billing City.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing address city (i.e. “Boston”). This value is merely passed through to the
     * payment gateway.
     */
    public function getBillingCity(): ?string
    {
        return $this->billingCity;
    }

    /**
     * Sets Billing City.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing address city (i.e. “Boston”). This value is merely passed through to the
     * payment gateway.
     *
     * @maps billing_city
     */
    public function setBillingCity(?string $billingCity): void
    {
        $this->billingCity = $billingCity;
    }

    /**
     * Returns Billing State.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing address state (i.e. MA). This value is merely passed through to the payment
     * gateway. This must conform to the [ISO_3166-1](https://en.wikipedia.org/wiki/ISO_3166-
     * 1#Current_codes) in order to be valid for tax locale purposes.
     */
    public function getBillingState(): ?string
    {
        return $this->billingState;
    }

    /**
     * Sets Billing State.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing address state (i.e. MA). This value is merely passed through to the payment
     * gateway. This must conform to the [ISO_3166-1](https://en.wikipedia.org/wiki/ISO_3166-
     * 1#Current_codes) in order to be valid for tax locale purposes.
     *
     * @maps billing_state
     */
    public function setBillingState(?string $billingState): void
    {
        $this->billingState = $billingState;
    }

    /**
     * Returns Billing Country.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing address country, required in [ISO_3166-1 alpha-2](https://en.wikipedia.
     * org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”). This value is merely passed through to the payment
     * gateway. Some gateways require country codes in a specific format. Please check your gateway’s
     * documentation. If creating an ACH subscription, only US is supported at this time.
     */
    public function getBillingCountry(): ?string
    {
        return $this->billingCountry;
    }

    /**
     * Sets Billing Country.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing address country, required in [ISO_3166-1 alpha-2](https://en.wikipedia.
     * org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”). This value is merely passed through to the payment
     * gateway. Some gateways require country codes in a specific format. Please check your gateway’s
     * documentation. If creating an ACH subscription, only US is supported at this time.
     *
     * @maps billing_country
     */
    public function setBillingCountry(?string $billingCountry): void
    {
        $this->billingCountry = $billingCountry;
    }

    /**
     * Returns Billing Zip.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing address zip code (i.e. 12345). This value is merely passed through to the
     * payment gateway.
     */
    public function getBillingZip(): ?string
    {
        return $this->billingZip;
    }

    /**
     * Sets Billing Zip.
     * (Optional, may be required by your product configuration or gateway settings) The credit card or
     * bank account billing address zip code (i.e. 12345). This value is merely passed through to the
     * payment gateway.
     *
     * @maps billing_zip
     */
    public function setBillingZip(?string $billingZip): void
    {
        $this->billingZip = $billingZip;
    }

    /**
     * Returns Current Vault.
     * (Optional, used only for Subscription Import) The vault that stores the payment profile with the
     * provided vault_token.
     */
    public function getCurrentVault(): ?string
    {
        return $this->currentVault;
    }

    /**
     * Sets Current Vault.
     * (Optional, used only for Subscription Import) The vault that stores the payment profile with the
     * provided vault_token.
     *
     * @maps current_vault
     * @factory \AdvancedBillingLib\Models\CurrentVault::checkValue
     */
    public function setCurrentVault(?string $currentVault): void
    {
        $this->currentVault = $currentVault;
    }

    /**
     * Returns Vault Token.
     * (Optional, used only for Subscription Import) The “token” provided by your vault storage for an
     * already stored payment profile
     */
    public function getVaultToken(): ?string
    {
        return $this->vaultToken;
    }

    /**
     * Sets Vault Token.
     * (Optional, used only for Subscription Import) The “token” provided by your vault storage for an
     * already stored payment profile
     *
     * @maps vault_token
     */
    public function setVaultToken(?string $vaultToken): void
    {
        $this->vaultToken = $vaultToken;
    }

    /**
     * Returns Customer Vault Token.
     * (Optional, used only for Subscription Import) (only for Authorize.Net CIM storage or Square) The
     * customerProfileId for the owner of the customerPaymentProfileId provided as the vault_token
     */
    public function getCustomerVaultToken(): ?string
    {
        return $this->customerVaultToken;
    }

    /**
     * Sets Customer Vault Token.
     * (Optional, used only for Subscription Import) (only for Authorize.Net CIM storage or Square) The
     * customerProfileId for the owner of the customerPaymentProfileId provided as the vault_token
     *
     * @maps customer_vault_token
     */
    public function setCustomerVaultToken(?string $customerVaultToken): void
    {
        $this->customerVaultToken = $customerVaultToken;
    }

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Paypal Email.
     */
    public function getPaypalEmail(): ?string
    {
        return $this->paypalEmail;
    }

    /**
     * Sets Paypal Email.
     *
     * @maps paypal_email
     */
    public function setPaypalEmail(?string $paypalEmail): void
    {
        $this->paypalEmail = $paypalEmail;
    }

    /**
     * Returns Payment Method Nonce.
     * (Required for Square unless importing with vault_token and customer_vault_token) The nonce generated
     * by the Square Javascript library (SqPaymentForm)
     */
    public function getPaymentMethodNonce(): ?string
    {
        return $this->paymentMethodNonce;
    }

    /**
     * Sets Payment Method Nonce.
     * (Required for Square unless importing with vault_token and customer_vault_token) The nonce generated
     * by the Square Javascript library (SqPaymentForm)
     *
     * @maps payment_method_nonce
     */
    public function setPaymentMethodNonce(?string $paymentMethodNonce): void
    {
        $this->paymentMethodNonce = $paymentMethodNonce;
    }

    /**
     * Returns Gateway Handle.
     * (Optional) This attribute is only available if MultiGateway feature is enabled for your Site. This
     * feature is in the Private Beta currently. gateway_handle is used to directly select a gateway where
     * a payment profile will be stored in. Every connected gateway must have a unique gateway handle
     * specified. Read [Multigateway description](https://chargify.zendesk.com/hc/en-
     * us/articles/4407761759643#connecting-with-multiple-gateways) to learn more about new concepts that
     * MultiGateway introduces and the default behavior when this attribute is not passed.
     */
    public function getGatewayHandle(): ?string
    {
        return $this->gatewayHandle;
    }

    /**
     * Sets Gateway Handle.
     * (Optional) This attribute is only available if MultiGateway feature is enabled for your Site. This
     * feature is in the Private Beta currently. gateway_handle is used to directly select a gateway where
     * a payment profile will be stored in. Every connected gateway must have a unique gateway handle
     * specified. Read [Multigateway description](https://chargify.zendesk.com/hc/en-
     * us/articles/4407761759643#connecting-with-multiple-gateways) to learn more about new concepts that
     * MultiGateway introduces and the default behavior when this attribute is not passed.
     *
     * @maps gateway_handle
     */
    public function setGatewayHandle(?string $gatewayHandle): void
    {
        $this->gatewayHandle = $gatewayHandle;
    }

    /**
     * Returns Cvv.
     * (Optional, may be required by your gateway settings) The 3- or 4-digit Card Verification Value. This
     * value is merely passed through to the payment gateway.
     */
    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    /**
     * Sets Cvv.
     * (Optional, may be required by your gateway settings) The 3- or 4-digit Card Verification Value. This
     * value is merely passed through to the payment gateway.
     *
     * @maps cvv
     */
    public function setCvv(?string $cvv): void
    {
        $this->cvv = $cvv;
    }

    /**
     * Returns Last Four.
     * (Optional, used only for Subscription Import) If you have the last 4 digits of the credit card
     * number, you may supply them here so that we may create a masked card number (i.e. XXXX-XXXX-XXXX-
     * 1234) for display in the UI. Last 4 digits are required for refunds in Auth.Net.
     */
    public function getLastFour(): ?string
    {
        return $this->lastFour;
    }

    /**
     * Sets Last Four.
     * (Optional, used only for Subscription Import) If you have the last 4 digits of the credit card
     * number, you may supply them here so that we may create a masked card number (i.e. XXXX-XXXX-XXXX-
     * 1234) for display in the UI. Last 4 digits are required for refunds in Auth.Net.
     *
     * @maps last_four
     */
    public function setLastFour(?string $lastFour): void
    {
        $this->lastFour = $lastFour;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->chargifyToken)) {
            $json['chargify_token']       = $this->chargifyToken;
        }
        if (isset($this->id)) {
            $json['id']                   = $this->id;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']         = $this->paymentType;
        }
        if (isset($this->firstName)) {
            $json['first_name']           = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']            = $this->lastName;
        }
        if (isset($this->maskedCardNumber)) {
            $json['masked_card_number']   = $this->maskedCardNumber;
        }
        if (isset($this->fullNumber)) {
            $json['full_number']          = $this->fullNumber;
        }
        if (isset($this->cardType)) {
            $json['card_type']            = CardType::checkValue($this->cardType);
        }
        if (isset($this->expirationMonth)) {
            $json['expiration_month']     =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->expirationMonth,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (isset($this->expirationYear)) {
            $json['expiration_year']      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->expirationYear,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']      = $this->billingAddress;
        }
        if (!empty($this->billingAddress2)) {
            $json['billing_address_2']    = $this->billingAddress2['value'];
        }
        if (isset($this->billingCity)) {
            $json['billing_city']         = $this->billingCity;
        }
        if (isset($this->billingState)) {
            $json['billing_state']        = $this->billingState;
        }
        if (isset($this->billingCountry)) {
            $json['billing_country']      = $this->billingCountry;
        }
        if (isset($this->billingZip)) {
            $json['billing_zip']          = $this->billingZip;
        }
        if (isset($this->currentVault)) {
            $json['current_vault']        = CurrentVault::checkValue($this->currentVault);
        }
        if (isset($this->vaultToken)) {
            $json['vault_token']          = $this->vaultToken;
        }
        if (isset($this->customerVaultToken)) {
            $json['customer_vault_token'] = $this->customerVaultToken;
        }
        if (isset($this->customerId)) {
            $json['customer_id']          = $this->customerId;
        }
        if (isset($this->paypalEmail)) {
            $json['paypal_email']         = $this->paypalEmail;
        }
        if (isset($this->paymentMethodNonce)) {
            $json['payment_method_nonce'] = $this->paymentMethodNonce;
        }
        if (isset($this->gatewayHandle)) {
            $json['gateway_handle']       = $this->gatewayHandle;
        }
        if (isset($this->cvv)) {
            $json['cvv']                  = $this->cvv;
        }
        if (isset($this->lastFour)) {
            $json['last_four']            = $this->lastFour;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
