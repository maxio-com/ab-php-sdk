<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\DunningStepData;
use Core\Utils\CoreHelper;

/**
 * Builder for model DunningStepData
 *
 * @see DunningStepData
 */
class DunningStepDataBuilder
{
    /**
     * @var DunningStepData
     */
    private $instance;

    private function __construct(DunningStepData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new dunning step data Builder object.
     */
    public static function init(
        int $dayThreshold,
        string $action,
        bool $sendEmail,
        bool $sendBccEmail,
        bool $sendSms
    ): self {
        return new self(new DunningStepData($dayThreshold, $action, $sendEmail, $sendBccEmail, $sendSms));
    }

    /**
     * Sets email body field.
     */
    public function emailBody(?string $value): self
    {
        $this->instance->setEmailBody($value);
        return $this;
    }

    /**
     * Unsets email body field.
     */
    public function unsetEmailBody(): self
    {
        $this->instance->unsetEmailBody();
        return $this;
    }

    /**
     * Sets email subject field.
     */
    public function emailSubject(?string $value): self
    {
        $this->instance->setEmailSubject($value);
        return $this;
    }

    /**
     * Unsets email subject field.
     */
    public function unsetEmailSubject(): self
    {
        $this->instance->unsetEmailSubject();
        return $this;
    }

    /**
     * Sets sms body field.
     */
    public function smsBody(?string $value): self
    {
        $this->instance->setSmsBody($value);
        return $this;
    }

    /**
     * Unsets sms body field.
     */
    public function unsetSmsBody(): self
    {
        $this->instance->unsetSmsBody();
        return $this;
    }

    /**
     * Initializes a new dunning step data object.
     */
    public function build(): DunningStepData
    {
        return CoreHelper::clone($this->instance);
    }
}
