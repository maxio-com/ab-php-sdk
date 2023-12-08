<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially
 * complete scope attributes will override the existing settings.
 */
class MetafieldScope implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $csv;

    /**
     * @var string|null
     */
    private $invoices;

    /**
     * @var string|null
     */
    private $statements;

    /**
     * @var string|null
     */
    private $portal;

    /**
     * @var string|null
     */
    private $publicShow;

    /**
     * @var string|null
     */
    private $publicEdit;

    /**
     * @var string[]|null
     */
    private $hosted;

    /**
     * Returns Csv.
     * Include (1) or exclude (0) metafields from the csv export.
     */
    public function getCsv(): ?string
    {
        return $this->csv;
    }

    /**
     * Sets Csv.
     * Include (1) or exclude (0) metafields from the csv export.
     *
     * @maps csv
     * @factory \AdvancedBillingLib\Models\IncludeOption::checkValue
     */
    public function setCsv(?string $csv): void
    {
        $this->csv = $csv;
    }

    /**
     * Returns Invoices.
     * Include (1) or exclude (0) metafields from invoices.
     */
    public function getInvoices(): ?string
    {
        return $this->invoices;
    }

    /**
     * Sets Invoices.
     * Include (1) or exclude (0) metafields from invoices.
     *
     * @maps invoices
     * @factory \AdvancedBillingLib\Models\IncludeOption::checkValue
     */
    public function setInvoices(?string $invoices): void
    {
        $this->invoices = $invoices;
    }

    /**
     * Returns Statements.
     * Include (1) or exclude (0) metafields from statements.
     */
    public function getStatements(): ?string
    {
        return $this->statements;
    }

    /**
     * Sets Statements.
     * Include (1) or exclude (0) metafields from statements.
     *
     * @maps statements
     * @factory \AdvancedBillingLib\Models\IncludeOption::checkValue
     */
    public function setStatements(?string $statements): void
    {
        $this->statements = $statements;
    }

    /**
     * Returns Portal.
     * Include (1) or exclude (0) metafields from the portal.
     */
    public function getPortal(): ?string
    {
        return $this->portal;
    }

    /**
     * Sets Portal.
     * Include (1) or exclude (0) metafields from the portal.
     *
     * @maps portal
     * @factory \AdvancedBillingLib\Models\IncludeOption::checkValue
     */
    public function setPortal(?string $portal): void
    {
        $this->portal = $portal;
    }

    /**
     * Returns Public Show.
     * Include (1) or exclude (0) metafields from being viewable by your ecosystem.
     */
    public function getPublicShow(): ?string
    {
        return $this->publicShow;
    }

    /**
     * Sets Public Show.
     * Include (1) or exclude (0) metafields from being viewable by your ecosystem.
     *
     * @maps public_show
     * @factory \AdvancedBillingLib\Models\IncludeOption::checkValue
     */
    public function setPublicShow(?string $publicShow): void
    {
        $this->publicShow = $publicShow;
    }

    /**
     * Returns Public Edit.
     * Include (1) or exclude (0) metafields from being edited by your ecosystem.
     */
    public function getPublicEdit(): ?string
    {
        return $this->publicEdit;
    }

    /**
     * Sets Public Edit.
     * Include (1) or exclude (0) metafields from being edited by your ecosystem.
     *
     * @maps public_edit
     * @factory \AdvancedBillingLib\Models\IncludeOption::checkValue
     */
    public function setPublicEdit(?string $publicEdit): void
    {
        $this->publicEdit = $publicEdit;
    }

    /**
     * Returns Hosted.
     *
     * @return string[]|null
     */
    public function getHosted(): ?array
    {
        return $this->hosted;
    }

    /**
     * Sets Hosted.
     *
     * @maps hosted
     *
     * @param string[]|null $hosted
     */
    public function setHosted(?array $hosted): void
    {
        $this->hosted = $hosted;
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
        if (isset($this->csv)) {
            $json['csv']         = IncludeOption::checkValue($this->csv);
        }
        if (isset($this->invoices)) {
            $json['invoices']    = IncludeOption::checkValue($this->invoices);
        }
        if (isset($this->statements)) {
            $json['statements']  = IncludeOption::checkValue($this->statements);
        }
        if (isset($this->portal)) {
            $json['portal']      = IncludeOption::checkValue($this->portal);
        }
        if (isset($this->publicShow)) {
            $json['public_show'] = IncludeOption::checkValue($this->publicShow);
        }
        if (isset($this->publicEdit)) {
            $json['public_edit'] = IncludeOption::checkValue($this->publicEdit);
        }
        if (isset($this->hosted)) {
            $json['hosted']      = $this->hosted;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
