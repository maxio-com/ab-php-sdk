<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SendInvoiceRequest implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $recipientEmails;

    /**
     * @var string[]|null
     */
    private $ccRecipientEmails;

    /**
     * @var string[]|null
     */
    private $bccRecipientEmails;

    /**
     * Returns Recipient Emails.
     *
     * @return string[]|null
     */
    public function getRecipientEmails(): ?array
    {
        return $this->recipientEmails;
    }

    /**
     * Sets Recipient Emails.
     *
     * @maps recipient_emails
     *
     * @param string[]|null $recipientEmails
     */
    public function setRecipientEmails(?array $recipientEmails): void
    {
        $this->recipientEmails = $recipientEmails;
    }

    /**
     * Returns Cc Recipient Emails.
     *
     * @return string[]|null
     */
    public function getCcRecipientEmails(): ?array
    {
        return $this->ccRecipientEmails;
    }

    /**
     * Sets Cc Recipient Emails.
     *
     * @maps cc_recipient_emails
     *
     * @param string[]|null $ccRecipientEmails
     */
    public function setCcRecipientEmails(?array $ccRecipientEmails): void
    {
        $this->ccRecipientEmails = $ccRecipientEmails;
    }

    /**
     * Returns Bcc Recipient Emails.
     *
     * @return string[]|null
     */
    public function getBccRecipientEmails(): ?array
    {
        return $this->bccRecipientEmails;
    }

    /**
     * Sets Bcc Recipient Emails.
     *
     * @maps bcc_recipient_emails
     *
     * @param string[]|null $bccRecipientEmails
     */
    public function setBccRecipientEmails(?array $bccRecipientEmails): void
    {
        $this->bccRecipientEmails = $bccRecipientEmails;
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
        if (isset($this->recipientEmails)) {
            $json['recipient_emails']     = $this->recipientEmails;
        }
        if (isset($this->ccRecipientEmails)) {
            $json['cc_recipient_emails']  = $this->ccRecipientEmails;
        }
        if (isset($this->bccRecipientEmails)) {
            $json['bcc_recipient_emails'] = $this->bccRecipientEmails;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
