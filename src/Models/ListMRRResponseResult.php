<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListMRRResponseResult implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $page;

    /**
     * @var int|null
     */
    private $perPage;

    /**
     * @var int|null
     */
    private $totalPages;

    /**
     * @var int|null
     */
    private $totalEntries;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $currencySymbol;

    /**
     * @var Movement[]|null
     */
    private $movements;

    /**
     * Returns Page.
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * Sets Page.
     *
     * @maps page
     */
    public function setPage(?int $page): void
    {
        $this->page = $page;
    }

    /**
     * Returns Per Page.
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * Sets Per Page.
     *
     * @maps per_page
     */
    public function setPerPage(?int $perPage): void
    {
        $this->perPage = $perPage;
    }

    /**
     * Returns Total Pages.
     */
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }

    /**
     * Sets Total Pages.
     *
     * @maps total_pages
     */
    public function setTotalPages(?int $totalPages): void
    {
        $this->totalPages = $totalPages;
    }

    /**
     * Returns Total Entries.
     */
    public function getTotalEntries(): ?int
    {
        return $this->totalEntries;
    }

    /**
     * Sets Total Entries.
     *
     * @maps total_entries
     */
    public function setTotalEntries(?int $totalEntries): void
    {
        $this->totalEntries = $totalEntries;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Currency Symbol.
     */
    public function getCurrencySymbol(): ?string
    {
        return $this->currencySymbol;
    }

    /**
     * Sets Currency Symbol.
     *
     * @maps currency_symbol
     */
    public function setCurrencySymbol(?string $currencySymbol): void
    {
        $this->currencySymbol = $currencySymbol;
    }

    /**
     * Returns Movements.
     *
     * @return Movement[]|null
     */
    public function getMovements(): ?array
    {
        return $this->movements;
    }

    /**
     * Sets Movements.
     *
     * @maps movements
     *
     * @param Movement[]|null $movements
     */
    public function setMovements(?array $movements): void
    {
        $this->movements = $movements;
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
        if (isset($this->page)) {
            $json['page']            = $this->page;
        }
        if (isset($this->perPage)) {
            $json['per_page']        = $this->perPage;
        }
        if (isset($this->totalPages)) {
            $json['total_pages']     = $this->totalPages;
        }
        if (isset($this->totalEntries)) {
            $json['total_entries']   = $this->totalEntries;
        }
        if (isset($this->currency)) {
            $json['currency']        = $this->currency;
        }
        if (isset($this->currencySymbol)) {
            $json['currency_symbol'] = $this->currencySymbol;
        }
        if (isset($this->movements)) {
            $json['movements']       = $this->movements;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
