<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AutoResume;
use Core\Utils\CoreHelper;

/**
 * Builder for model AutoResume
 *
 * @see AutoResume
 */
class AutoResumeBuilder
{
    /**
     * @var AutoResume
     */
    private $instance;

    private function __construct(AutoResume $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Auto Resume Builder object.
     */
    public static function init(): self
    {
        return new self(new AutoResume());
    }

    /**
     * Sets automatically resume at field.
     *
     * @param \DateTime|null $value
     */
    public function automaticallyResumeAt(?\DateTime $value): self
    {
        $this->instance->setAutomaticallyResumeAt($value);
        return $this;
    }

    /**
     * Unsets automatically resume at field.
     */
    public function unsetAutomaticallyResumeAt(): self
    {
        $this->instance->unsetAutomaticallyResumeAt();
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
     * Initializes a new Auto Resume object.
     */
    public function build(): AutoResume
    {
        return CoreHelper::clone($this->instance);
    }
}
