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

class ScheduledRenewalConfigurationRequestBody implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $startsAt;

    /**
     * @var \DateTime|null
     */
    private $endsAt;

    /**
     * @var \DateTime|null
     */
    private $lockInAt;

    /**
     * @var int|null
     */
    private $contractId;

    /**
     * @var bool|null
     */
    private $createNewContract;

    /**
     * Returns Starts At.
     * (Optional) Start of the renewal term.
     */
    public function getStartsAt(): ?\DateTime
    {
        return $this->startsAt;
    }

    /**
     * Sets Starts At.
     * (Optional) Start of the renewal term.
     *
     * @maps starts_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setStartsAt(?\DateTime $startsAt): void
    {
        $this->startsAt = $startsAt;
    }

    /**
     * Returns Ends At.
     * (Optional) End of the renewal term.
     */
    public function getEndsAt(): ?\DateTime
    {
        return $this->endsAt;
    }

    /**
     * Sets Ends At.
     * (Optional) End of the renewal term.
     *
     * @maps ends_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEndsAt(?\DateTime $endsAt): void
    {
        $this->endsAt = $endsAt;
    }

    /**
     * Returns Lock in At.
     * (Optional) Lock-in date for the renewal.
     */
    public function getLockInAt(): ?\DateTime
    {
        return $this->lockInAt;
    }

    /**
     * Sets Lock in At.
     * (Optional) Lock-in date for the renewal.
     *
     * @maps lock_in_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLockInAt(?\DateTime $lockInAt): void
    {
        $this->lockInAt = $lockInAt;
    }

    /**
     * Returns Contract Id.
     * (Optional) Existing contract to associate with the scheduled renewal. Contracts must be enabled for
     * your site.
     */
    public function getContractId(): ?int
    {
        return $this->contractId;
    }

    /**
     * Sets Contract Id.
     * (Optional) Existing contract to associate with the scheduled renewal. Contracts must be enabled for
     * your site.
     *
     * @maps contract_id
     */
    public function setContractId(?int $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * Returns Create New Contract.
     * (Optional) Set to true to create a new contract when contracts are enabled. Contracts must be
     * enabled for your site.
     */
    public function getCreateNewContract(): ?bool
    {
        return $this->createNewContract;
    }

    /**
     * Sets Create New Contract.
     * (Optional) Set to true to create a new contract when contracts are enabled. Contracts must be
     * enabled for your site.
     *
     * @maps create_new_contract
     */
    public function setCreateNewContract(?bool $createNewContract): void
    {
        $this->createNewContract = $createNewContract;
    }

    /**
     * Converts the ScheduledRenewalConfigurationRequestBody object to a human-readable string
     * representation.
     *
     * @return string The string representation of the ScheduledRenewalConfigurationRequestBody object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ScheduledRenewalConfigurationRequestBody',
            [
                'startsAt' => $this->startsAt,
                'endsAt' => $this->endsAt,
                'lockInAt' => $this->lockInAt,
                'contractId' => $this->contractId,
                'createNewContract' => $this->createNewContract,
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
        if (isset($this->startsAt)) {
            $json['starts_at']           = DateTimeHelper::toRfc3339DateTime($this->startsAt);
        }
        if (isset($this->endsAt)) {
            $json['ends_at']             = DateTimeHelper::toRfc3339DateTime($this->endsAt);
        }
        if (isset($this->lockInAt)) {
            $json['lock_in_at']          = DateTimeHelper::toRfc3339DateTime($this->lockInAt);
        }
        if (isset($this->contractId)) {
            $json['contract_id']         = $this->contractId;
        }
        if (isset($this->createNewContract)) {
            $json['create_new_contract'] = $this->createNewContract;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
