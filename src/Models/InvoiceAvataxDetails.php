<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class InvoiceAvataxDetails implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $documentCode = [];

    /**
     * @var array
     */
    private $commitDate = [];

    /**
     * @var array
     */
    private $modifyDate = [];

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Document Code.
     */
    public function getDocumentCode(): ?string
    {
        if (count($this->documentCode) == 0) {
            return null;
        }
        return $this->documentCode['value'];
    }

    /**
     * Sets Document Code.
     *
     * @maps document_code
     */
    public function setDocumentCode(?string $documentCode): void
    {
        $this->documentCode['value'] = $documentCode;
    }

    /**
     * Unsets Document Code.
     */
    public function unsetDocumentCode(): void
    {
        $this->documentCode = [];
    }

    /**
     * Returns Commit Date.
     */
    public function getCommitDate(): ?\DateTime
    {
        if (count($this->commitDate) == 0) {
            return null;
        }
        return $this->commitDate['value'];
    }

    /**
     * Sets Commit Date.
     *
     * @maps commit_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCommitDate(?\DateTime $commitDate): void
    {
        $this->commitDate['value'] = $commitDate;
    }

    /**
     * Unsets Commit Date.
     */
    public function unsetCommitDate(): void
    {
        $this->commitDate = [];
    }

    /**
     * Returns Modify Date.
     */
    public function getModifyDate(): ?\DateTime
    {
        if (count($this->modifyDate) == 0) {
            return null;
        }
        return $this->modifyDate['value'];
    }

    /**
     * Sets Modify Date.
     *
     * @maps modify_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setModifyDate(?\DateTime $modifyDate): void
    {
        $this->modifyDate['value'] = $modifyDate;
    }

    /**
     * Unsets Modify Date.
     */
    public function unsetModifyDate(): void
    {
        $this->modifyDate = [];
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
        if (!empty($this->id)) {
            $json['id']            = $this->id['value'];
        }
        if (!empty($this->status)) {
            $json['status']        = $this->status['value'];
        }
        if (!empty($this->documentCode)) {
            $json['document_code'] = $this->documentCode['value'];
        }
        if (!empty($this->commitDate)) {
            $json['commit_date']   = DateTimeHelper::toRfc3339DateTime($this->commitDate['value']);
        }
        if (!empty($this->modifyDate)) {
            $json['modify_date']   = DateTimeHelper::toRfc3339DateTime($this->modifyDate['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
