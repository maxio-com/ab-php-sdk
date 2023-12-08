<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BankAccountAttributes implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $chargifyToken;

    /**
     * @var string|null
     */
    private $bankName;

    /**
     * @var string|null
     */
    private $bankRoutingNumber;

    /**
     * @var string|null
     */
    private $bankAccountNumber;

    /**
     * @var string|null
     */
    private $bankAccountType;

    /**
     * @var string|null
     */
    private $bankBranchCode;

    /**
     * @var string|null
     */
    private $bankIban;

    /**
     * @var string|null
     */
    private $bankAccountHolderType;

    /**
     * @var string|null
     */
    private $paymentType;

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
     * Returns Chargify Token.
     */
    public function getChargifyToken(): ?string
    {
        return $this->chargifyToken;
    }

    /**
     * Sets Chargify Token.
     *
     * @maps chargify_token
     */
    public function setChargifyToken(?string $chargifyToken): void
    {
        $this->chargifyToken = $chargifyToken;
    }

    /**
     * Returns Bank Name.
     * (Required when creating a subscription with ACH or GoCardless) The name of the bank where the
     * customer’s account resides
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Sets Bank Name.
     * (Required when creating a subscription with ACH or GoCardless) The name of the bank where the
     * customer’s account resides
     *
     * @maps bank_name
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * Returns Bank Routing Number.
     * (Required when creating a subscription with ACH. Optional when creating a subscription with
     * GoCardless). The routing number of the bank. It becomes bank_code while passing via GoCardless API
     */
    public function getBankRoutingNumber(): ?string
    {
        return $this->bankRoutingNumber;
    }

    /**
     * Sets Bank Routing Number.
     * (Required when creating a subscription with ACH. Optional when creating a subscription with
     * GoCardless). The routing number of the bank. It becomes bank_code while passing via GoCardless API
     *
     * @maps bank_routing_number
     */
    public function setBankRoutingNumber(?string $bankRoutingNumber): void
    {
        $this->bankRoutingNumber = $bankRoutingNumber;
    }

    /**
     * Returns Bank Account Number.
     * (Required when creating a subscription with ACH. Required when creating a subscription with
     * GoCardless and bank_iban is blank) The customerʼs bank account number
     */
    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }

    /**
     * Sets Bank Account Number.
     * (Required when creating a subscription with ACH. Required when creating a subscription with
     * GoCardless and bank_iban is blank) The customerʼs bank account number
     *
     * @maps bank_account_number
     */
    public function setBankAccountNumber(?string $bankAccountNumber): void
    {
        $this->bankAccountNumber = $bankAccountNumber;
    }

    /**
     * Returns Bank Account Type.
     */
    public function getBankAccountType(): ?string
    {
        return $this->bankAccountType;
    }

    /**
     * Sets Bank Account Type.
     *
     * @maps bank_account_type
     */
    public function setBankAccountType(?string $bankAccountType): void
    {
        $this->bankAccountType = $bankAccountType;
    }

    /**
     * Returns Bank Branch Code.
     * (Optional when creating a subscription with GoCardless) Branch code. Alternatively, an IBAN can be
     * provided
     */
    public function getBankBranchCode(): ?string
    {
        return $this->bankBranchCode;
    }

    /**
     * Sets Bank Branch Code.
     * (Optional when creating a subscription with GoCardless) Branch code. Alternatively, an IBAN can be
     * provided
     *
     * @maps bank_branch_code
     */
    public function setBankBranchCode(?string $bankBranchCode): void
    {
        $this->bankBranchCode = $bankBranchCode;
    }

    /**
     * Returns Bank Iban.
     * (Optional when creating a subscription with GoCardless). International Bank Account Number.
     * Alternatively, local bank details can be provided
     */
    public function getBankIban(): ?string
    {
        return $this->bankIban;
    }

    /**
     * Sets Bank Iban.
     * (Optional when creating a subscription with GoCardless). International Bank Account Number.
     * Alternatively, local bank details can be provided
     *
     * @maps bank_iban
     */
    public function setBankIban(?string $bankIban): void
    {
        $this->bankIban = $bankIban;
    }

    /**
     * Returns Bank Account Holder Type.
     */
    public function getBankAccountHolderType(): ?string
    {
        return $this->bankAccountHolderType;
    }

    /**
     * Sets Bank Account Holder Type.
     *
     * @maps bank_account_holder_type
     */
    public function setBankAccountHolderType(?string $bankAccountHolderType): void
    {
        $this->bankAccountHolderType = $bankAccountHolderType;
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
     * Returns Current Vault.
     * The vault that stores the payment profile with the provided vault_token.
     */
    public function getCurrentVault(): ?string
    {
        return $this->currentVault;
    }

    /**
     * Sets Current Vault.
     * The vault that stores the payment profile with the provided vault_token.
     *
     * @maps current_vault
     * @factory \AdvancedBillingLib\Models\BankAccountVault::checkValue
     */
    public function setCurrentVault(?string $currentVault): void
    {
        $this->currentVault = $currentVault;
    }

    /**
     * Returns Vault Token.
     */
    public function getVaultToken(): ?string
    {
        return $this->vaultToken;
    }

    /**
     * Sets Vault Token.
     *
     * @maps vault_token
     */
    public function setVaultToken(?string $vaultToken): void
    {
        $this->vaultToken = $vaultToken;
    }

    /**
     * Returns Customer Vault Token.
     * (only for Authorize.Net CIM storage or Square) The customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token
     */
    public function getCustomerVaultToken(): ?string
    {
        return $this->customerVaultToken;
    }

    /**
     * Sets Customer Vault Token.
     * (only for Authorize.Net CIM storage or Square) The customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token
     *
     * @maps customer_vault_token
     */
    public function setCustomerVaultToken(?string $customerVaultToken): void
    {
        $this->customerVaultToken = $customerVaultToken;
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
            $json['chargify_token']           = $this->chargifyToken;
        }
        if (isset($this->bankName)) {
            $json['bank_name']                = $this->bankName;
        }
        if (isset($this->bankRoutingNumber)) {
            $json['bank_routing_number']      = $this->bankRoutingNumber;
        }
        if (isset($this->bankAccountNumber)) {
            $json['bank_account_number']      = $this->bankAccountNumber;
        }
        if (isset($this->bankAccountType)) {
            $json['bank_account_type']        = $this->bankAccountType;
        }
        if (isset($this->bankBranchCode)) {
            $json['bank_branch_code']         = $this->bankBranchCode;
        }
        if (isset($this->bankIban)) {
            $json['bank_iban']                = $this->bankIban;
        }
        if (isset($this->bankAccountHolderType)) {
            $json['bank_account_holder_type'] = $this->bankAccountHolderType;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']             = $this->paymentType;
        }
        if (isset($this->currentVault)) {
            $json['current_vault']            = BankAccountVault::checkValue($this->currentVault);
        }
        if (isset($this->vaultToken)) {
            $json['vault_token']              = $this->vaultToken;
        }
        if (isset($this->customerVaultToken)) {
            $json['customer_vault_token']     = $this->customerVaultToken;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
