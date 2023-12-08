<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BatchJob implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var array
     */
    private $finishedAt = [];

    /**
     * @var array
     */
    private $rowCount = [];

    /**
     * @var array
     */
    private $createdAt = [];

    /**
     * @var string|null
     */
    private $completed;

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
     * Returns Finished At.
     */
    public function getFinishedAt(): ?string
    {
        if (count($this->finishedAt) == 0) {
            return null;
        }
        return $this->finishedAt['value'];
    }

    /**
     * Sets Finished At.
     *
     * @maps finished_at
     */
    public function setFinishedAt(?string $finishedAt): void
    {
        $this->finishedAt['value'] = $finishedAt;
    }

    /**
     * Unsets Finished At.
     */
    public function unsetFinishedAt(): void
    {
        $this->finishedAt = [];
    }

    /**
     * Returns Row Count.
     */
    public function getRowCount(): ?int
    {
        if (count($this->rowCount) == 0) {
            return null;
        }
        return $this->rowCount['value'];
    }

    /**
     * Sets Row Count.
     *
     * @maps row_count
     */
    public function setRowCount(?int $rowCount): void
    {
        $this->rowCount['value'] = $rowCount;
    }

    /**
     * Unsets Row Count.
     */
    public function unsetRowCount(): void
    {
        $this->rowCount = [];
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        if (count($this->createdAt) == 0) {
            return null;
        }
        return $this->createdAt['value'];
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt['value'] = $createdAt;
    }

    /**
     * Unsets Created At.
     */
    public function unsetCreatedAt(): void
    {
        $this->createdAt = [];
    }

    /**
     * Returns Completed.
     */
    public function getCompleted(): ?string
    {
        return $this->completed;
    }

    /**
     * Sets Completed.
     *
     * @maps completed
     */
    public function setCompleted(?string $completed): void
    {
        $this->completed = $completed;
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
            $json['id']          = $this->id;
        }
        if (!empty($this->finishedAt)) {
            $json['finished_at'] = $this->finishedAt['value'];
        }
        if (!empty($this->rowCount)) {
            $json['row_count']   = $this->rowCount['value'];
        }
        if (!empty($this->createdAt)) {
            $json['created_at']  = $this->createdAt['value'];
        }
        if (isset($this->completed)) {
            $json['completed']   = $this->completed;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
