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

class DebitNote implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var int|null
     */
    private $siteId;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var int|null
     */
    private $number;

    /**
     * @var int|null
     */
    private $sequenceNumber;

    /**
     * @var string|null
     */
    private $originCreditNoteUid;

    /**
     * @var string|null
     */
    private $originCreditNoteNumber;

    /**
     * @var \DateTime|null
     */
    private $issueDate;

    /**
     * @var \DateTime|null
     */
    private $appliedDate;

    /**
     * @var \DateTime|null
     */
    private $dueDate;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $role;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var InvoiceSeller|null
     */
    private $seller;

    /**
     * @var InvoiceCustomer|null
     */
    private $customer;

    /**
     * @var InvoiceAddress|null
     */
    private $billingAddress;

    /**
     * @var InvoiceAddress|null
     */
    private $shippingAddress;

    /**
     * @var CreditNoteLineItem[]|null
     */
    private $lineItems;

    /**
     * @var InvoiceDiscount[]|null
     */
    private $discounts;

    /**
     * @var InvoiceTax[]|null
     */
    private $taxes;

    /**
     * @var InvoiceRefund[]|null
     */
    private $refunds;

    /**
     * Returns Uid.
     * Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix
     * "db_" followed by alphanumeric characters.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix
     * "db_" followed by alphanumeric characters.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Site Id.
     * ID of the site to which the debit note belongs.
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * Sets Site Id.
     * ID of the site to which the debit note belongs.
     *
     * @maps site_id
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * Returns Customer Id.
     * ID of the customer to which the debit note belongs.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * ID of the customer to which the debit note belongs.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Subscription Id.
     * ID of the subscription that generated the debit note.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * ID of the subscription that generated the debit note.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Number.
     * A unique, identifier that appears on the debit note and in places it is referenced.
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Sets Number.
     * A unique, identifier that appears on the debit note and in places it is referenced.
     *
     * @maps number
     */
    public function setNumber(?int $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns Sequence Number.
     * A monotonically increasing number assigned to debit notes as they are created.
     */
    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets Sequence Number.
     * A monotonically increasing number assigned to debit notes as they are created.
     *
     * @maps sequence_number
     */
    public function setSequenceNumber(?int $sequenceNumber): void
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * Returns Origin Credit Note Uid.
     * Unique identifier for the connected credit note. It is generated automatically by Chargify and has
     * the prefix "cn_" followed by alphanumeric characters.
     *
     * While the UID is long and not appropriate to show to customers, the number is usually shorter and
     * consumable by the customer and the merchant alike.
     */
    public function getOriginCreditNoteUid(): ?string
    {
        return $this->originCreditNoteUid;
    }

    /**
     * Sets Origin Credit Note Uid.
     * Unique identifier for the connected credit note. It is generated automatically by Chargify and has
     * the prefix "cn_" followed by alphanumeric characters.
     *
     * While the UID is long and not appropriate to show to customers, the number is usually shorter and
     * consumable by the customer and the merchant alike.
     *
     * @maps origin_credit_note_uid
     */
    public function setOriginCreditNoteUid(?string $originCreditNoteUid): void
    {
        $this->originCreditNoteUid = $originCreditNoteUid;
    }

    /**
     * Returns Origin Credit Note Number.
     * A unique, identifying string of the connected credit note.
     */
    public function getOriginCreditNoteNumber(): ?string
    {
        return $this->originCreditNoteNumber;
    }

    /**
     * Sets Origin Credit Note Number.
     * A unique, identifying string of the connected credit note.
     *
     * @maps origin_credit_note_number
     */
    public function setOriginCreditNoteNumber(?string $originCreditNoteNumber): void
    {
        $this->originCreditNoteNumber = $originCreditNoteNumber;
    }

    /**
     * Returns Issue Date.
     * Date the document was issued to the customer. This is the date that the document was made available
     * for payment.
     *
     * The format is "YYYY-MM-DD".
     */
    public function getIssueDate(): ?\DateTime
    {
        return $this->issueDate;
    }

    /**
     * Sets Issue Date.
     * Date the document was issued to the customer. This is the date that the document was made available
     * for payment.
     *
     * The format is "YYYY-MM-DD".
     *
     * @maps issue_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setIssueDate(?\DateTime $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    /**
     * Returns Applied Date.
     * Debit notes are applied to invoices to offset invoiced amounts - they adjust the amount due. This
     * field is the date the debit note document became fully applied to the invoice.
     *
     * The format is "YYYY-MM-DD".
     */
    public function getAppliedDate(): ?\DateTime
    {
        return $this->appliedDate;
    }

    /**
     * Sets Applied Date.
     * Debit notes are applied to invoices to offset invoiced amounts - they adjust the amount due. This
     * field is the date the debit note document became fully applied to the invoice.
     *
     * The format is "YYYY-MM-DD".
     *
     * @maps applied_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setAppliedDate(?\DateTime $appliedDate): void
    {
        $this->appliedDate = $appliedDate;
    }

    /**
     * Returns Due Date.
     * Date the document is due for payment. The format is "YYYY-MM-DD".
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * Sets Due Date.
     * Date the document is due for payment. The format is "YYYY-MM-DD".
     *
     * @maps due_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDueDate(?\DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Returns Status.
     * Current status of the debit note.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current status of the debit note.
     *
     * @maps status
     * @factory \AdvancedBillingLib\Models\DebitNoteStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Memo.
     * The memo printed on debit note, which is a description of the reason for the debit.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The memo printed on debit note, which is a description of the reason for the debit.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Role.
     * The role of the debit note.
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Sets Role.
     * The role of the debit note.
     *
     * @maps role
     * @factory \AdvancedBillingLib\Models\DebitNoteRole::checkValue
     */
    public function setRole(?string $role): void
    {
        $this->role = $role;
    }

    /**
     * Returns Currency.
     * The ISO 4217 currency code (3 character string) representing the currency of the credit note amount
     * fields.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * The ISO 4217 currency code (3 character string) representing the currency of the credit note amount
     * fields.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Seller.
     * Information about the seller (merchant) listed on the masthead of the debit note.
     */
    public function getSeller(): ?InvoiceSeller
    {
        return $this->seller;
    }

    /**
     * Sets Seller.
     * Information about the seller (merchant) listed on the masthead of the debit note.
     *
     * @maps seller
     */
    public function setSeller(?InvoiceSeller $seller): void
    {
        $this->seller = $seller;
    }

    /**
     * Returns Customer.
     * Information about the customer who is owner or recipient the debited subscription.
     */
    public function getCustomer(): ?InvoiceCustomer
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     * Information about the customer who is owner or recipient the debited subscription.
     *
     * @maps customer
     */
    public function setCustomer(?InvoiceCustomer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Billing Address.
     * The billing address of the debited subscription.
     */
    public function getBillingAddress(): ?InvoiceAddress
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * The billing address of the debited subscription.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?InvoiceAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Shipping Address.
     * The shipping address of the debited subscription.
     */
    public function getShippingAddress(): ?InvoiceAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     * The shipping address of the debited subscription.
     *
     * @maps shipping_address
     */
    public function setShippingAddress(?InvoiceAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Returns Line Items.
     * Line items on the debit note.
     *
     * @return CreditNoteLineItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Sets Line Items.
     * Line items on the debit note.
     *
     * @maps line_items
     *
     * @param CreditNoteLineItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    /**
     * Returns Discounts.
     *
     * @return InvoiceDiscount[]|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * Sets Discounts.
     *
     * @maps discounts
     *
     * @param InvoiceDiscount[]|null $discounts
     */
    public function setDiscounts(?array $discounts): void
    {
        $this->discounts = $discounts;
    }

    /**
     * Returns Taxes.
     *
     * @return InvoiceTax[]|null
     */
    public function getTaxes(): ?array
    {
        return $this->taxes;
    }

    /**
     * Sets Taxes.
     *
     * @maps taxes
     *
     * @param InvoiceTax[]|null $taxes
     */
    public function setTaxes(?array $taxes): void
    {
        $this->taxes = $taxes;
    }

    /**
     * Returns Refunds.
     *
     * @return InvoiceRefund[]|null
     */
    public function getRefunds(): ?array
    {
        return $this->refunds;
    }

    /**
     * Sets Refunds.
     *
     * @maps refunds
     *
     * @param InvoiceRefund[]|null $refunds
     */
    public function setRefunds(?array $refunds): void
    {
        $this->refunds = $refunds;
    }

    /**
     * Converts the DebitNote object to a human-readable string representation.
     *
     * @return string The string representation of the DebitNote object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DebitNote',
            [
                'uid' => $this->uid,
                'siteId' => $this->siteId,
                'customerId' => $this->customerId,
                'subscriptionId' => $this->subscriptionId,
                'number' => $this->number,
                'sequenceNumber' => $this->sequenceNumber,
                'originCreditNoteUid' => $this->originCreditNoteUid,
                'originCreditNoteNumber' => $this->originCreditNoteNumber,
                'issueDate' => $this->issueDate,
                'appliedDate' => $this->appliedDate,
                'dueDate' => $this->dueDate,
                'status' => $this->status,
                'memo' => $this->memo,
                'role' => $this->role,
                'currency' => $this->currency,
                'seller' => $this->seller,
                'customer' => $this->customer,
                'billingAddress' => $this->billingAddress,
                'shippingAddress' => $this->shippingAddress,
                'lineItems' => $this->lineItems,
                'discounts' => $this->discounts,
                'taxes' => $this->taxes,
                'refunds' => $this->refunds,
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
        if (isset($this->uid)) {
            $json['uid']                       = $this->uid;
        }
        if (isset($this->siteId)) {
            $json['site_id']                   = $this->siteId;
        }
        if (isset($this->customerId)) {
            $json['customer_id']               = $this->customerId;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']           = $this->subscriptionId;
        }
        if (isset($this->number)) {
            $json['number']                    = $this->number;
        }
        if (isset($this->sequenceNumber)) {
            $json['sequence_number']           = $this->sequenceNumber;
        }
        if (isset($this->originCreditNoteUid)) {
            $json['origin_credit_note_uid']    = $this->originCreditNoteUid;
        }
        if (isset($this->originCreditNoteNumber)) {
            $json['origin_credit_note_number'] = $this->originCreditNoteNumber;
        }
        if (isset($this->issueDate)) {
            $json['issue_date']                = DateTimeHelper::toSimpleDate($this->issueDate);
        }
        if (isset($this->appliedDate)) {
            $json['applied_date']              = DateTimeHelper::toSimpleDate($this->appliedDate);
        }
        if (isset($this->dueDate)) {
            $json['due_date']                  = DateTimeHelper::toSimpleDate($this->dueDate);
        }
        if (isset($this->status)) {
            $json['status']                    = DebitNoteStatus::checkValue($this->status);
        }
        if (isset($this->memo)) {
            $json['memo']                      = $this->memo;
        }
        if (isset($this->role)) {
            $json['role']                      = DebitNoteRole::checkValue($this->role);
        }
        if (isset($this->currency)) {
            $json['currency']                  = $this->currency;
        }
        if (isset($this->seller)) {
            $json['seller']                    = $this->seller;
        }
        if (isset($this->customer)) {
            $json['customer']                  = $this->customer;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']           = $this->billingAddress;
        }
        if (isset($this->shippingAddress)) {
            $json['shipping_address']          = $this->shippingAddress;
        }
        if (isset($this->lineItems)) {
            $json['line_items']                = $this->lineItems;
        }
        if (isset($this->discounts)) {
            $json['discounts']                 = $this->discounts;
        }
        if (isset($this->taxes)) {
            $json['taxes']                     = $this->taxes;
        }
        if (isset($this->refunds)) {
            $json['refunds']                   = $this->refunds;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
