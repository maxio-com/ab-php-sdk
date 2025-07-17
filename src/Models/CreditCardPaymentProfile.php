<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class CreditCardPaymentProfile implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

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
    private $cardType;

    /**
     * @var int|null
     */
    private $expirationMonth;

    /**
     * @var int|null
     */
    private $expirationYear;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var string|null
     */
    private $currentVault;

    /**
     * @var array
     */
    private $vaultToken = [];

    /**
     * @var array
     */
    private $billingAddress = [];

    /**
     * @var array
     */
    private $billingCity = [];

    /**
     * @var array
     */
    private $billingState = [];

    /**
     * @var array
     */
    private $billingZip = [];

    /**
     * @var array
     */
    private $billingCountry = [];

    /**
     * @var array
     */
    private $customerVaultToken = [];

    /**
     * @var array
     */
    private $billingAddress2 = [];

    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var bool|null
     */
    private $disabled;

    /**
     * @var string|null
     */
    private $chargifyToken;

    /**
     * @var array
     */
    private $siteGatewaySettingId = [];

    /**
     * @var array
     */
    private $gatewayHandle = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @param string $paymentType
     */
    public function __construct(string $paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Id.
     * The Chargify-assigned ID of the stored card. This value can be used as an input to
     * payment_profile_id when creating a subscription, in order to re-use a stored payment profile for the
     * same customer.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Chargify-assigned ID of the stored card. This value can be used as an input to
     * payment_profile_id when creating a subscription, in order to re-use a stored payment profile for the
     * same customer.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns First Name.
     * The first name of the card holder.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * The first name of the card holder.
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * The last name of the card holder.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * The last name of the card holder.
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Masked Card Number.
     * A string representation of the credit card number with all but the last 4 digits masked with X’s (i.
     * e. ‘XXXX-XXXX-XXXX-1234’).
     */
    public function getMaskedCardNumber(): ?string
    {
        return $this->maskedCardNumber;
    }

    /**
     * Sets Masked Card Number.
     * A string representation of the credit card number with all but the last 4 digits masked with X’s (i.
     * e. ‘XXXX-XXXX-XXXX-1234’).
     *
     * @maps masked_card_number
     */
    public function setMaskedCardNumber(?string $maskedCardNumber): void
    {
        $this->maskedCardNumber = $maskedCardNumber;
    }

    /**
     * Returns Card Type.
     * The type of card used.
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * Sets Card Type.
     * The type of card used.
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
     * An integer representing the expiration month of the card(1 – 12).
     */
    public function getExpirationMonth(): ?int
    {
        return $this->expirationMonth;
    }

    /**
     * Sets Expiration Month.
     * An integer representing the expiration month of the card(1 – 12).
     *
     * @maps expiration_month
     */
    public function setExpirationMonth(?int $expirationMonth): void
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * Returns Expiration Year.
     * An integer representing the 4-digit expiration year of the card(i.e. ‘2012’).
     */
    public function getExpirationYear(): ?int
    {
        return $this->expirationYear;
    }

    /**
     * Sets Expiration Year.
     * An integer representing the 4-digit expiration year of the card(i.e. ‘2012’).
     *
     * @maps expiration_year
     */
    public function setExpirationYear(?int $expirationYear): void
    {
        $this->expirationYear = $expirationYear;
    }

    /**
     * Returns Customer Id.
     * The Chargify-assigned id for the customer record to which the card belongs.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * The Chargify-assigned id for the customer record to which the card belongs.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Current Vault.
     * The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing.
     */
    public function getCurrentVault(): ?string
    {
        return $this->currentVault;
    }

    /**
     * Sets Current Vault.
     * The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing.
     *
     * @maps current_vault
     * @factory \AdvancedBillingLib\Models\CreditCardVault::checkValue
     */
    public function setCurrentVault(?string $currentVault): void
    {
        $this->currentVault = $currentVault;
    }

    /**
     * Returns Vault Token.
     * The “token” provided by your vault storage for an already stored payment profile.
     */
    public function getVaultToken(): ?string
    {
        if (count($this->vaultToken) == 0) {
            return null;
        }
        return $this->vaultToken['value'];
    }

    /**
     * Sets Vault Token.
     * The “token” provided by your vault storage for an already stored payment profile.
     *
     * @maps vault_token
     */
    public function setVaultToken(?string $vaultToken): void
    {
        $this->vaultToken['value'] = $vaultToken;
    }

    /**
     * Unsets Vault Token.
     * The “token” provided by your vault storage for an already stored payment profile.
     */
    public function unsetVaultToken(): void
    {
        $this->vaultToken = [];
    }

    /**
     * Returns Billing Address.
     * The current billing street address for the card.
     */
    public function getBillingAddress(): ?string
    {
        if (count($this->billingAddress) == 0) {
            return null;
        }
        return $this->billingAddress['value'];
    }

    /**
     * Sets Billing Address.
     * The current billing street address for the card.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?string $billingAddress): void
    {
        $this->billingAddress['value'] = $billingAddress;
    }

    /**
     * Unsets Billing Address.
     * The current billing street address for the card.
     */
    public function unsetBillingAddress(): void
    {
        $this->billingAddress = [];
    }

    /**
     * Returns Billing City.
     * The current billing address city for the card.
     */
    public function getBillingCity(): ?string
    {
        if (count($this->billingCity) == 0) {
            return null;
        }
        return $this->billingCity['value'];
    }

    /**
     * Sets Billing City.
     * The current billing address city for the card.
     *
     * @maps billing_city
     */
    public function setBillingCity(?string $billingCity): void
    {
        $this->billingCity['value'] = $billingCity;
    }

    /**
     * Unsets Billing City.
     * The current billing address city for the card.
     */
    public function unsetBillingCity(): void
    {
        $this->billingCity = [];
    }

    /**
     * Returns Billing State.
     * The current billing address state for the card.
     */
    public function getBillingState(): ?string
    {
        if (count($this->billingState) == 0) {
            return null;
        }
        return $this->billingState['value'];
    }

    /**
     * Sets Billing State.
     * The current billing address state for the card.
     *
     * @maps billing_state
     */
    public function setBillingState(?string $billingState): void
    {
        $this->billingState['value'] = $billingState;
    }

    /**
     * Unsets Billing State.
     * The current billing address state for the card.
     */
    public function unsetBillingState(): void
    {
        $this->billingState = [];
    }

    /**
     * Returns Billing Zip.
     * The current billing address zip code for the card.
     */
    public function getBillingZip(): ?string
    {
        if (count($this->billingZip) == 0) {
            return null;
        }
        return $this->billingZip['value'];
    }

    /**
     * Sets Billing Zip.
     * The current billing address zip code for the card.
     *
     * @maps billing_zip
     */
    public function setBillingZip(?string $billingZip): void
    {
        $this->billingZip['value'] = $billingZip;
    }

    /**
     * Unsets Billing Zip.
     * The current billing address zip code for the card.
     */
    public function unsetBillingZip(): void
    {
        $this->billingZip = [];
    }

    /**
     * Returns Billing Country.
     * The current billing address country for the card.
     */
    public function getBillingCountry(): ?string
    {
        if (count($this->billingCountry) == 0) {
            return null;
        }
        return $this->billingCountry['value'];
    }

    /**
     * Sets Billing Country.
     * The current billing address country for the card.
     *
     * @maps billing_country
     */
    public function setBillingCountry(?string $billingCountry): void
    {
        $this->billingCountry['value'] = $billingCountry;
    }

    /**
     * Unsets Billing Country.
     * The current billing address country for the card.
     */
    public function unsetBillingCountry(): void
    {
        $this->billingCountry = [];
    }

    /**
     * Returns Customer Vault Token.
     * (only for Authorize.Net CIM storage): the customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token.
     */
    public function getCustomerVaultToken(): ?string
    {
        if (count($this->customerVaultToken) == 0) {
            return null;
        }
        return $this->customerVaultToken['value'];
    }

    /**
     * Sets Customer Vault Token.
     * (only for Authorize.Net CIM storage): the customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token.
     *
     * @maps customer_vault_token
     */
    public function setCustomerVaultToken(?string $customerVaultToken): void
    {
        $this->customerVaultToken['value'] = $customerVaultToken;
    }

    /**
     * Unsets Customer Vault Token.
     * (only for Authorize.Net CIM storage): the customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token.
     */
    public function unsetCustomerVaultToken(): void
    {
        $this->customerVaultToken = [];
    }

    /**
     * Returns Billing Address 2.
     * The current billing street address, second line, for the card.
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
     * The current billing street address, second line, for the card.
     *
     * @maps billing_address_2
     */
    public function setBillingAddress2(?string $billingAddress2): void
    {
        $this->billingAddress2['value'] = $billingAddress2;
    }

    /**
     * Unsets Billing Address 2.
     * The current billing street address, second line, for the card.
     */
    public function unsetBillingAddress2(): void
    {
        $this->billingAddress2 = [];
    }

    /**
     * Returns Payment Type.
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     *
     * @required
     * @maps payment_type
     * @factory \AdvancedBillingLib\Models\PaymentType::checkValue
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Disabled.
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    /**
     * Sets Disabled.
     *
     * @maps disabled
     */
    public function setDisabled(?bool $disabled): void
    {
        $this->disabled = $disabled;
    }

    /**
     * Returns Chargify Token.
     * Token received after sending billing information using chargify.js. This token will only be received
     * if passed as a sole attribute of credit_card_attributes (i.e. tok_9g6hw85pnpt6knmskpwp4ttt)
     */
    public function getChargifyToken(): ?string
    {
        return $this->chargifyToken;
    }

    /**
     * Sets Chargify Token.
     * Token received after sending billing information using chargify.js. This token will only be received
     * if passed as a sole attribute of credit_card_attributes (i.e. tok_9g6hw85pnpt6knmskpwp4ttt)
     *
     * @maps chargify_token
     */
    public function setChargifyToken(?string $chargifyToken): void
    {
        $this->chargifyToken = $chargifyToken;
    }

    /**
     * Returns Site Gateway Setting Id.
     */
    public function getSiteGatewaySettingId(): ?int
    {
        if (count($this->siteGatewaySettingId) == 0) {
            return null;
        }
        return $this->siteGatewaySettingId['value'];
    }

    /**
     * Sets Site Gateway Setting Id.
     *
     * @maps site_gateway_setting_id
     */
    public function setSiteGatewaySettingId(?int $siteGatewaySettingId): void
    {
        $this->siteGatewaySettingId['value'] = $siteGatewaySettingId;
    }

    /**
     * Unsets Site Gateway Setting Id.
     */
    public function unsetSiteGatewaySettingId(): void
    {
        $this->siteGatewaySettingId = [];
    }

    /**
     * Returns Gateway Handle.
     * An identifier of connected gateway.
     */
    public function getGatewayHandle(): ?string
    {
        if (count($this->gatewayHandle) == 0) {
            return null;
        }
        return $this->gatewayHandle['value'];
    }

    /**
     * Sets Gateway Handle.
     * An identifier of connected gateway.
     *
     * @maps gateway_handle
     */
    public function setGatewayHandle(?string $gatewayHandle): void
    {
        $this->gatewayHandle['value'] = $gatewayHandle;
    }

    /**
     * Unsets Gateway Handle.
     * An identifier of connected gateway.
     */
    public function unsetGatewayHandle(): void
    {
        $this->gatewayHandle = [];
    }

    /**
     * Returns Created At.
     * A timestamp indicating when this payment profile was created
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * A timestamp indicating when this payment profile was created
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * A timestamp indicating when this payment profile was last updated
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * A timestamp indicating when this payment profile was last updated
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Converts the CreditCardPaymentProfile object to a human-readable string representation.
     *
     * @return string The string representation of the CreditCardPaymentProfile object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreditCardPaymentProfile',
            [
                'id' => $this->id,
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'maskedCardNumber' => $this->maskedCardNumber,
                'cardType' => $this->cardType,
                'expirationMonth' => $this->expirationMonth,
                'expirationYear' => $this->expirationYear,
                'customerId' => $this->customerId,
                'currentVault' => $this->currentVault,
                'vaultToken' => $this->getVaultToken(),
                'billingAddress' => $this->getBillingAddress(),
                'billingCity' => $this->getBillingCity(),
                'billingState' => $this->getBillingState(),
                'billingZip' => $this->getBillingZip(),
                'billingCountry' => $this->getBillingCountry(),
                'customerVaultToken' => $this->getCustomerVaultToken(),
                'billingAddress2' => $this->getBillingAddress2(),
                'paymentType' => $this->paymentType,
                'disabled' => $this->disabled,
                'chargifyToken' => $this->chargifyToken,
                'siteGatewaySettingId' => $this->getSiteGatewaySettingId(),
                'gatewayHandle' => $this->getGatewayHandle(),
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt,
                'additionalProperties' => $this->additionalProperties
            ]
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
        if (isset($this->id)) {
            $json['id']                      = $this->id;
        }
        if (isset($this->firstName)) {
            $json['first_name']              = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']               = $this->lastName;
        }
        if (isset($this->maskedCardNumber)) {
            $json['masked_card_number']      = $this->maskedCardNumber;
        }
        if (isset($this->cardType)) {
            $json['card_type']               = CardType::checkValue($this->cardType);
        }
        if (isset($this->expirationMonth)) {
            $json['expiration_month']        = $this->expirationMonth;
        }
        if (isset($this->expirationYear)) {
            $json['expiration_year']         = $this->expirationYear;
        }
        if (isset($this->customerId)) {
            $json['customer_id']             = $this->customerId;
        }
        if (isset($this->currentVault)) {
            $json['current_vault']           = CreditCardVault::checkValue($this->currentVault);
        }
        if (!empty($this->vaultToken)) {
            $json['vault_token']             = $this->vaultToken['value'];
        }
        if (!empty($this->billingAddress)) {
            $json['billing_address']         = $this->billingAddress['value'];
        }
        if (!empty($this->billingCity)) {
            $json['billing_city']            = $this->billingCity['value'];
        }
        if (!empty($this->billingState)) {
            $json['billing_state']           = $this->billingState['value'];
        }
        if (!empty($this->billingZip)) {
            $json['billing_zip']             = $this->billingZip['value'];
        }
        if (!empty($this->billingCountry)) {
            $json['billing_country']         = $this->billingCountry['value'];
        }
        if (!empty($this->customerVaultToken)) {
            $json['customer_vault_token']    = $this->customerVaultToken['value'];
        }
        if (!empty($this->billingAddress2)) {
            $json['billing_address_2']       = $this->billingAddress2['value'];
        }
        $json['payment_type']                = PaymentType::checkValue($this->paymentType);
        if (isset($this->disabled)) {
            $json['disabled']                = $this->disabled;
        }
        if (isset($this->chargifyToken)) {
            $json['chargify_token']          = $this->chargifyToken;
        }
        if (!empty($this->siteGatewaySettingId)) {
            $json['site_gateway_setting_id'] = $this->siteGatewaySettingId['value'];
        }
        if (!empty($this->gatewayHandle)) {
            $json['gateway_handle']          = $this->gatewayHandle['value'];
        }
        if (isset($this->createdAt)) {
            $json['created_at']              = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']              = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
