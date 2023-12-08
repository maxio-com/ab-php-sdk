<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BankAccountVerificationRequest implements \JsonSerializable
{
    /**
     * @var BankAccountVerification
     */
    private $bankAccountVerification;

    /**
     * @param BankAccountVerification $bankAccountVerification
     */
    public function __construct(BankAccountVerification $bankAccountVerification)
    {
        $this->bankAccountVerification = $bankAccountVerification;
    }

    /**
     * Returns Bank Account Verification.
     */
    public function getBankAccountVerification(): BankAccountVerification
    {
        return $this->bankAccountVerification;
    }

    /**
     * Sets Bank Account Verification.
     *
     * @required
     * @maps bank_account_verification
     */
    public function setBankAccountVerification(BankAccountVerification $bankAccountVerification): void
    {
        $this->bankAccountVerification = $bankAccountVerification;
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
        $json['bank_account_verification'] = $this->bankAccountVerification;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
