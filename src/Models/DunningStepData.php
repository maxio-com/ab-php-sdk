<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class DunningStepData implements \JsonSerializable
{
    /**
     * @var int
     */
    private $dayThreshold;

    /**
     * @var string
     */
    private $action;

    /**
     * @var array
     */
    private $emailBody = [];

    /**
     * @var array
     */
    private $emailSubject = [];

    /**
     * @var bool
     */
    private $sendEmail;

    /**
     * @var bool
     */
    private $sendBccEmail;

    /**
     * @var bool
     */
    private $sendSms;

    /**
     * @var array
     */
    private $smsBody = [];

    /**
     * @param int $dayThreshold
     * @param string $action
     * @param bool $sendEmail
     * @param bool $sendBccEmail
     * @param bool $sendSms
     */
    public function __construct(int $dayThreshold, string $action, bool $sendEmail, bool $sendBccEmail, bool $sendSms)
    {
        $this->dayThreshold = $dayThreshold;
        $this->action = $action;
        $this->sendEmail = $sendEmail;
        $this->sendBccEmail = $sendBccEmail;
        $this->sendSms = $sendSms;
    }

    /**
     * Returns Day Threshold.
     */
    public function getDayThreshold(): int
    {
        return $this->dayThreshold;
    }

    /**
     * Sets Day Threshold.
     *
     * @required
     * @maps day_threshold
     */
    public function setDayThreshold(int $dayThreshold): void
    {
        $this->dayThreshold = $dayThreshold;
    }

    /**
     * Returns Action.
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Sets Action.
     *
     * @required
     * @maps action
     */
    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    /**
     * Returns Email Body.
     */
    public function getEmailBody(): ?string
    {
        if (count($this->emailBody) == 0) {
            return null;
        }
        return $this->emailBody['value'];
    }

    /**
     * Sets Email Body.
     *
     * @maps email_body
     */
    public function setEmailBody(?string $emailBody): void
    {
        $this->emailBody['value'] = $emailBody;
    }

    /**
     * Unsets Email Body.
     */
    public function unsetEmailBody(): void
    {
        $this->emailBody = [];
    }

    /**
     * Returns Email Subject.
     */
    public function getEmailSubject(): ?string
    {
        if (count($this->emailSubject) == 0) {
            return null;
        }
        return $this->emailSubject['value'];
    }

    /**
     * Sets Email Subject.
     *
     * @maps email_subject
     */
    public function setEmailSubject(?string $emailSubject): void
    {
        $this->emailSubject['value'] = $emailSubject;
    }

    /**
     * Unsets Email Subject.
     */
    public function unsetEmailSubject(): void
    {
        $this->emailSubject = [];
    }

    /**
     * Returns Send Email.
     */
    public function getSendEmail(): bool
    {
        return $this->sendEmail;
    }

    /**
     * Sets Send Email.
     *
     * @required
     * @maps send_email
     */
    public function setSendEmail(bool $sendEmail): void
    {
        $this->sendEmail = $sendEmail;
    }

    /**
     * Returns Send Bcc Email.
     */
    public function getSendBccEmail(): bool
    {
        return $this->sendBccEmail;
    }

    /**
     * Sets Send Bcc Email.
     *
     * @required
     * @maps send_bcc_email
     */
    public function setSendBccEmail(bool $sendBccEmail): void
    {
        $this->sendBccEmail = $sendBccEmail;
    }

    /**
     * Returns Send Sms.
     */
    public function getSendSms(): bool
    {
        return $this->sendSms;
    }

    /**
     * Sets Send Sms.
     *
     * @required
     * @maps send_sms
     */
    public function setSendSms(bool $sendSms): void
    {
        $this->sendSms = $sendSms;
    }

    /**
     * Returns Sms Body.
     */
    public function getSmsBody(): ?string
    {
        if (count($this->smsBody) == 0) {
            return null;
        }
        return $this->smsBody['value'];
    }

    /**
     * Sets Sms Body.
     *
     * @maps sms_body
     */
    public function setSmsBody(?string $smsBody): void
    {
        $this->smsBody['value'] = $smsBody;
    }

    /**
     * Unsets Sms Body.
     */
    public function unsetSmsBody(): void
    {
        $this->smsBody = [];
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
        $json['day_threshold']     = $this->dayThreshold;
        $json['action']            = $this->action;
        if (!empty($this->emailBody)) {
            $json['email_body']    = $this->emailBody['value'];
        }
        if (!empty($this->emailSubject)) {
            $json['email_subject'] = $this->emailSubject['value'];
        }
        $json['send_email']        = $this->sendEmail;
        $json['send_bcc_email']    = $this->sendBccEmail;
        $json['send_sms']          = $this->sendSms;
        if (!empty($this->smsBody)) {
            $json['sms_body']      = $this->smsBody['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
