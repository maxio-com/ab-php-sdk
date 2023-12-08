<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListCreditNotesResponse implements \JsonSerializable
{
    /**
     * @var CreditNote[]
     */
    private $creditNotes;

    /**
     * @param CreditNote[] $creditNotes
     */
    public function __construct(array $creditNotes)
    {
        $this->creditNotes = $creditNotes;
    }

    /**
     * Returns Credit Notes.
     *
     * @return CreditNote[]
     */
    public function getCreditNotes(): array
    {
        return $this->creditNotes;
    }

    /**
     * Sets Credit Notes.
     *
     * @required
     * @maps credit_notes
     *
     * @param CreditNote[] $creditNotes
     */
    public function setCreditNotes(array $creditNotes): void
    {
        $this->creditNotes = $creditNotes;
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
        $json['credit_notes'] = $this->creditNotes;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
