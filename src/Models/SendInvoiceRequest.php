<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
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
     * Converts the SendInvoiceRequest object to a human-readable string representation.
     *
     * @return string The string representation of the SendInvoiceRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SendInvoiceRequest',
            [
                'recipientEmails' => $this->recipientEmails,
                'ccRecipientEmails' => $this->ccRecipientEmails,
                'bccRecipientEmails' => $this->bccRecipientEmails,
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
        if (isset($this->recipientEmails)) {
            $json['recipient_emails']     = $this->recipientEmails;
        }
        if (isset($this->ccRecipientEmails)) {
            $json['cc_recipient_emails']  = $this->ccRecipientEmails;
        }
        if (isset($this->bccRecipientEmails)) {
            $json['bcc_recipient_emails'] = $this->bccRecipientEmails;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
