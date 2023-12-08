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
     * Initializes a new auto resume Builder object.
     */
    public static function init(): self
    {
        return new self(new AutoResume());
    }

    /**
     * Sets automatically resume at field.
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
     * Initializes a new auto resume object.
     */
    public function build(): AutoResume
    {
        return CoreHelper::clone($this->instance);
    }
}
