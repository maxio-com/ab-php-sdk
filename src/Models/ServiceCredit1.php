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

class ServiceCredit1 implements \JsonSerializable
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
     * @var array
     */
    private $invoiceUid = [];

    /**
     * @var int|null
     */
    private $remainingBalanceInCents;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

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
     * Returns Invoice Uid.
     * The invoice uid associated with the entry. Only present for debit entries
     */
    public function getInvoiceUid(): ?string
    {
        if (count($this->invoiceUid) == 0) {
            return null;
        }
        return $this->invoiceUid['value'];
    }

    /**
     * Sets Invoice Uid.
     * The invoice uid associated with the entry. Only present for debit entries
     *
     * @maps invoice_uid
     */
    public function setInvoiceUid(?string $invoiceUid): void
    {
        $this->invoiceUid['value'] = $invoiceUid;
    }

    /**
     * Unsets Invoice Uid.
     * The invoice uid associated with the entry. Only present for debit entries
     */
    public function unsetInvoiceUid(): void
    {
        $this->invoiceUid = [];
    }

    /**
     * Returns Remaining Balance in Cents.
     * The remaining balance for the entry
     */
    public function getRemainingBalanceInCents(): ?int
    {
        return $this->remainingBalanceInCents;
    }

    /**
     * Sets Remaining Balance in Cents.
     * The remaining balance for the entry
     *
     * @maps remaining_balance_in_cents
     */
    public function setRemainingBalanceInCents(?int $remainingBalanceInCents): void
    {
        $this->remainingBalanceInCents = $remainingBalanceInCents;
    }

    /**
     * Returns Created At.
     * The date and time the entry was created
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * The date and time the entry was created
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Converts the ServiceCredit1 object to a human-readable string representation.
     *
     * @return string The string representation of the ServiceCredit1 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ServiceCredit1',
            [
                'id' => $this->id,
                'amountInCents' => $this->amountInCents,
                'endingBalanceInCents' => $this->endingBalanceInCents,
                'entryType' => $this->entryType,
                'memo' => $this->memo,
                'invoiceUid' => $this->getInvoiceUid(),
                'remainingBalanceInCents' => $this->remainingBalanceInCents,
                'createdAt' => $this->createdAt,
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
            $json['id']                         = $this->id;
        }
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']            = $this->amountInCents;
        }
        if (isset($this->endingBalanceInCents)) {
            $json['ending_balance_in_cents']    = $this->endingBalanceInCents;
        }
        if (isset($this->entryType)) {
            $json['entry_type']                 = ServiceCreditType::checkValue($this->entryType);
        }
        if (isset($this->memo)) {
            $json['memo']                       = $this->memo;
        }
        if (!empty($this->invoiceUid)) {
            $json['invoice_uid']                = $this->invoiceUid['value'];
        }
        if (isset($this->remainingBalanceInCents)) {
            $json['remaining_balance_in_cents'] = $this->remainingBalanceInCents;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                 = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
