<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PaymentMethodBankAccountType implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $maskedAccountNumber;

    /**
     * @var string|null
     */
    private $maskedRoutingNumber;

    /**
     * @var string|null
     */
    private $type = 'bank_account';

    /**
     * Returns Masked Account Number.
     */
    public function getMaskedAccountNumber(): ?string
    {
        return $this->maskedAccountNumber;
    }

    /**
     * Sets Masked Account Number.
     *
     * @maps masked_account_number
     */
    public function setMaskedAccountNumber(?string $maskedAccountNumber): void
    {
        $this->maskedAccountNumber = $maskedAccountNumber;
    }

    /**
     * Returns Masked Routing Number.
     */
    public function getMaskedRoutingNumber(): ?string
    {
        return $this->maskedRoutingNumber;
    }

    /**
     * Sets Masked Routing Number.
     *
     * @maps masked_routing_number
     */
    public function setMaskedRoutingNumber(?string $maskedRoutingNumber): void
    {
        $this->maskedRoutingNumber = $maskedRoutingNumber;
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
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
        if (isset($this->maskedAccountNumber)) {
            $json['masked_account_number'] = $this->maskedAccountNumber;
        }
        if (isset($this->maskedRoutingNumber)) {
            $json['masked_routing_number'] = $this->maskedRoutingNumber;
        }
        if (isset($this->type)) {
            $json['type']                  = $this->type;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
