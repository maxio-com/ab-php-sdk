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

class ScheduledRenewalConfiguration implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $siteId;

    /**
     * @var int|null
     */
    private $subscriptionId;

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
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var ScheduledRenewalConfigurationItem[]|null
     */
    private $scheduledRenewalConfigurationItems;

    /**
     * @var Contract|null
     */
    private $contract;

    /**
     * Returns Id.
     * ID of the renewal.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * ID of the renewal.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Site Id.
     * ID of the site to which the renewal belongs.
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * Sets Site Id.
     * ID of the site to which the renewal belongs.
     *
     * @maps site_id
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * Returns Subscription Id.
     * The id of the subscription.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * The id of the subscription.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Starts At.
     */
    public function getStartsAt(): ?\DateTime
    {
        return $this->startsAt;
    }

    /**
     * Sets Starts At.
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
     */
    public function getEndsAt(): ?\DateTime
    {
        return $this->endsAt;
    }

    /**
     * Sets Ends At.
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
     */
    public function getLockInAt(): ?\DateTime
    {
        return $this->lockInAt;
    }

    /**
     * Sets Lock in At.
     *
     * @maps lock_in_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLockInAt(?\DateTime $lockInAt): void
    {
        $this->lockInAt = $lockInAt;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Scheduled Renewal Configuration Items.
     *
     * @return ScheduledRenewalConfigurationItem[]|null
     */
    public function getScheduledRenewalConfigurationItems(): ?array
    {
        return $this->scheduledRenewalConfigurationItems;
    }

    /**
     * Sets Scheduled Renewal Configuration Items.
     *
     * @maps scheduled_renewal_configuration_items
     *
     * @param ScheduledRenewalConfigurationItem[]|null $scheduledRenewalConfigurationItems
     */
    public function setScheduledRenewalConfigurationItems(?array $scheduledRenewalConfigurationItems): void
    {
        $this->scheduledRenewalConfigurationItems = $scheduledRenewalConfigurationItems;
    }

    /**
     * Returns Contract.
     * Contract linked to the scheduled renewal configuration.
     */
    public function getContract(): ?Contract
    {
        return $this->contract;
    }

    /**
     * Sets Contract.
     * Contract linked to the scheduled renewal configuration.
     *
     * @maps contract
     */
    public function setContract(?Contract $contract): void
    {
        $this->contract = $contract;
    }

    /**
     * Converts the ScheduledRenewalConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the ScheduledRenewalConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ScheduledRenewalConfiguration',
            [
                'id' => $this->id,
                'siteId' => $this->siteId,
                'subscriptionId' => $this->subscriptionId,
                'startsAt' => $this->startsAt,
                'endsAt' => $this->endsAt,
                'lockInAt' => $this->lockInAt,
                'createdAt' => $this->createdAt,
                'status' => $this->status,
                'scheduledRenewalConfigurationItems' => $this->scheduledRenewalConfigurationItems,
                'contract' => $this->contract,
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
            $json['id']                                    = $this->id;
        }
        if (isset($this->siteId)) {
            $json['site_id']                               = $this->siteId;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']                       = $this->subscriptionId;
        }
        if (isset($this->startsAt)) {
            $json['starts_at']                             = DateTimeHelper::toRfc3339DateTime($this->startsAt);
        }
        if (isset($this->endsAt)) {
            $json['ends_at']                               = DateTimeHelper::toRfc3339DateTime($this->endsAt);
        }
        if (isset($this->lockInAt)) {
            $json['lock_in_at']                            = DateTimeHelper::toRfc3339DateTime($this->lockInAt);
        }
        if (isset($this->createdAt)) {
            $json['created_at']                            = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->status)) {
            $json['status']                                = $this->status;
        }
        if (isset($this->scheduledRenewalConfigurationItems)) {
            $json['scheduled_renewal_configuration_items'] = $this->scheduledRenewalConfigurationItems;
        }
        if (isset($this->contract)) {
            $json['contract']                              = $this->contract;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
