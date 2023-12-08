<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ServiceCredit implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var int|null
     */
    private $endingBalanceInCents;

    /**
     * @var string|null
     */
    private $entryType;

    /**
     * @var string|null
     */
    private $memo;

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
     * Returns Amount in Cents.
     * The amount in cents of the entry
     */
    public function getAmountInCents(): ?int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     * The amount in cents of the entry
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Ending Balance in Cents.
     * The new balance for the credit account
     */
    public function getEndingBalanceInCents(): ?int
    {
        return $this->endingBalanceInCents;
    }

    /**
     * Sets Ending Balance in Cents.
     * The new balance for the credit account
     *
     * @maps ending_balance_in_cents
     */
    public function setEndingBalanceInCents(?int $endingBalanceInCents): void
    {
        $this->endingBalanceInCents = $endingBalanceInCents;
    }

    /**
     * Returns Entry Type.
     * The type of entry
     */
    public function getEntryType(): ?string
    {
        return $this->entryType;
    }

    /**
     * Sets Entry Type.
     * The type of entry
     *
     * @maps entry_type
     * @factory \AdvancedBillingLib\Models\ServiceCreditType::checkValue
     */
    public function setEntryType(?string $entryType): void
    {
        $this->entryType = $entryType;
    }

    /**
     * Returns Memo.
     * The memo attached to the entry
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The memo attached to the entry
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
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
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']         = $this->amountInCents;
        }
        if (isset($this->endingBalanceInCents)) {
            $json['ending_balance_in_cents'] = $this->endingBalanceInCents;
        }
        if (isset($this->entryType)) {
            $json['entry_type']              = ServiceCreditType::checkValue($this->entryType);
        }
        if (isset($this->memo)) {
            $json['memo']                    = $this->memo;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
