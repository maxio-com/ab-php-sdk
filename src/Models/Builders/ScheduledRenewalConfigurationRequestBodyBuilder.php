<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalConfigurationRequestBody;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalConfigurationRequestBody
 *
 * @see ScheduledRenewalConfigurationRequestBody
 */
class ScheduledRenewalConfigurationRequestBodyBuilder
{
    /**
     * @var ScheduledRenewalConfigurationRequestBody
     */
    private $instance;

    private function __construct(ScheduledRenewalConfigurationRequestBody $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Configuration Request Body Builder object.
     */
    public static function init(): self
    {
        return new self(new ScheduledRenewalConfigurationRequestBody());
    }

    /**
     * Sets starts at field.
     *
     * @param \DateTime|null $value
     */
    public function startsAt(?\DateTime $value): self
    {
        $this->instance->setStartsAt($value);
        return $this;
    }

    /**
     * Sets ends at field.
     *
     * @param \DateTime|null $value
     */
    public function endsAt(?\DateTime $value): self
    {
        $this->instance->setEndsAt($value);
        return $this;
    }

    /**
     * Sets lock in at field.
     *
     * @param \DateTime|null $value
     */
    public function lockInAt(?\DateTime $value): self
    {
        $this->instance->setLockInAt($value);
        return $this;
    }

    /**
     * Sets contract id field.
     *
     * @param int|null $value
     */
    public function contractId(?int $value): self
    {
        $this->instance->setContractId($value);
        return $this;
    }

    /**
     * Sets create new contract field.
     *
     * @param bool|null $value
     */
    public function createNewContract(?bool $value): self
    {
        $this->instance->setCreateNewContract($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Scheduled Renewal Configuration Request Body object.
     */
    public function build(): ScheduledRenewalConfigurationRequestBody
    {
        return CoreHelper::clone($this->instance);
    }
}
