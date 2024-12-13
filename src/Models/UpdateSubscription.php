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

class UpdateSubscription implements \JsonSerializable
{
    /**
     * @var CreditCardAttributes|null
     */
    private $creditCardAttributes;

    /**
     * @var string|null
     */
    private $productHandle;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var bool|null
     */
    private $productChangeDelayed;

    /**
     * @var string|null
     */
    private $nextProductId;

    /**
     * @var string|null
     */
    private $nextProductPricePointId;

    /**
     * @var string|int|null
     */
    private $snapDay;

    /**
     * @var \DateTime|null
     */
    private $nextBillingAt;

    /**
     * @var string|null
     */
    private $paymentCollectionMethod;

    /**
     * @var bool|null
     */
    private $receivesInvoiceEmails;

    /**
     * @var string|int|null
     */
    private $netTerms;

    /**
     * @var int|null
     */
    private $storedCredentialTransactionId;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var SubscriptionCustomPrice|null
     */
    private $customPrice;

    /**
     * @var UpdateSubscriptionComponent[]|null
     */
    private $components;

    /**
     * @var bool|null
     */
    private $dunningCommunicationDelayEnabled;

    /**
     * @var array
     */
    private $dunningCommunicationDelayTimeZone = [];

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var string|null
     */
    private $productPricePointHandle;

    /**
     * Returns Credit Card Attributes.
     */
    public function getCreditCardAttributes(): ?CreditCardAttributes
    {
        return $this->creditCardAttributes;
    }

    /**
     * Sets Credit Card Attributes.
     *
     * @maps credit_card_attributes
     */
    public function setCreditCardAttributes(?CreditCardAttributes $creditCardAttributes): void
    {
        $this->creditCardAttributes = $creditCardAttributes;
    }

    /**
     * Returns Product Handle.
     * Set to the handle of a different product to change the subscription's product
     */
    public function getProductHandle(): ?string
    {
        return $this->productHandle;
    }

    /**
     * Sets Product Handle.
     * Set to the handle of a different product to change the subscription's product
     *
     * @maps product_handle
     */
    public function setProductHandle(?string $productHandle): void
    {
        $this->productHandle = $productHandle;
    }

    /**
     * Returns Product Id.
     * Set to the id of a different product to change the subscription's product
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * Set to the id of a different product to change the subscription's product
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Product Change Delayed.
     */
    public function getProductChangeDelayed(): ?bool
    {
        return $this->productChangeDelayed;
    }

    /**
     * Sets Product Change Delayed.
     *
     * @maps product_change_delayed
     */
    public function setProductChangeDelayed(?bool $productChangeDelayed): void
    {
        $this->productChangeDelayed = $productChangeDelayed;
    }

    /**
     * Returns Next Product Id.
     * Set to an empty string to cancel a delayed product change.
     */
    public function getNextProductId(): ?string
    {
        return $this->nextProductId;
    }

    /**
     * Sets Next Product Id.
     * Set to an empty string to cancel a delayed product change.
     *
     * @maps next_product_id
     */
    public function setNextProductId(?string $nextProductId): void
    {
        $this->nextProductId = $nextProductId;
    }

    /**
     * Returns Next Product Price Point Id.
     */
    public function getNextProductPricePointId(): ?string
    {
        return $this->nextProductPricePointId;
    }

    /**
     * Sets Next Product Price Point Id.
     *
     * @maps next_product_price_point_id
     */
    public function setNextProductPricePointId(?string $nextProductPricePointId): void
    {
        $this->nextProductPricePointId = $nextProductPricePointId;
    }

    /**
     * Returns Snap Day.
     * Use for subscriptions with product eligible for calendar billing only. Value can be 1-28 or 'end'.
     *
     * @return string|int|null
     */
    public function getSnapDay()
    {
        return $this->snapDay;
    }

    /**
     * Sets Snap Day.
     * Use for subscriptions with product eligible for calendar billing only. Value can be 1-28 or 'end'.
     *
     * @maps snap_day
     * @mapsBy anyOf(oneOf(SnapDay,int),null)
     * @factory \AdvancedBillingLib\Models\SnapDay::checkValue SnapDay
     *
     * @param string|int|null $snapDay
     */
    public function setSnapDay($snapDay): void
    {
        $this->snapDay = $snapDay;
    }

    /**
     * Returns Next Billing At.
     */
    public function getNextBillingAt(): ?\DateTime
    {
        return $this->nextBillingAt;
    }

    /**
     * Sets Next Billing At.
     *
     * @maps next_billing_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNextBillingAt(?\DateTime $nextBillingAt): void
    {
        $this->nextBillingAt = $nextBillingAt;
    }

    /**
     * Returns Payment Collection Method.
     */
    public function getPaymentCollectionMethod(): ?string
    {
        return $this->paymentCollectionMethod;
    }

    /**
     * Sets Payment Collection Method.
     *
     * @maps payment_collection_method
     */
    public function setPaymentCollectionMethod(?string $paymentCollectionMethod): void
    {
        $this->paymentCollectionMethod = $paymentCollectionMethod;
    }

    /**
     * Returns Receives Invoice Emails.
     */
    public function getReceivesInvoiceEmails(): ?bool
    {
        return $this->receivesInvoiceEmails;
    }

    /**
     * Sets Receives Invoice Emails.
     *
     * @maps receives_invoice_emails
     */
    public function setReceivesInvoiceEmails(?bool $receivesInvoiceEmails): void
    {
        $this->receivesInvoiceEmails = $receivesInvoiceEmails;
    }

    /**
     * Returns Net Terms.
     *
     * @return string|int|null
     */
    public function getNetTerms()
    {
        return $this->netTerms;
    }

    /**
     * Sets Net Terms.
     *
     * @maps net_terms
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $netTerms
     */
    public function setNetTerms($netTerms): void
    {
        $this->netTerms = $netTerms;
    }

    /**
     * Returns Stored Credential Transaction Id.
     */
    public function getStoredCredentialTransactionId(): ?int
    {
        return $this->storedCredentialTransactionId;
    }

    /**
     * Sets Stored Credential Transaction Id.
     *
     * @maps stored_credential_transaction_id
     */
    public function setStoredCredentialTransactionId(?int $storedCredentialTransactionId): void
    {
        $this->storedCredentialTransactionId = $storedCredentialTransactionId;
    }

    /**
     * Returns Reference.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Returns Custom Price.
     * (Optional) Used in place of `product_price_point_id` to define a custom price point unique to the
     * subscription
     */
    public function getCustomPrice(): ?SubscriptionCustomPrice
    {
        return $this->customPrice;
    }

    /**
     * Sets Custom Price.
     * (Optional) Used in place of `product_price_point_id` to define a custom price point unique to the
     * subscription
     *
     * @maps custom_price
     */
    public function setCustomPrice(?SubscriptionCustomPrice $customPrice): void
    {
        $this->customPrice = $customPrice;
    }

    /**
     * Returns Components.
     * (Optional) An array of component ids and custom prices to be added to the subscription.
     *
     * @return UpdateSubscriptionComponent[]|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Sets Components.
     * (Optional) An array of component ids and custom prices to be added to the subscription.
     *
     * @maps components
     *
     * @param UpdateSubscriptionComponent[]|null $components
     */
    public function setComponents(?array $components): void
    {
        $this->components = $components;
    }

    /**
     * Returns Dunning Communication Delay Enabled.
     * Enable Communication Delay feature, making sure no communication (email or SMS) is sent to the
     * Customer between 9PM and 8AM in time zone set by the `dunning_communication_delay_time_zone`
     * attribute.
     */
    public function getDunningCommunicationDelayEnabled(): ?bool
    {
        return $this->dunningCommunicationDelayEnabled;
    }

    /**
     * Sets Dunning Communication Delay Enabled.
     * Enable Communication Delay feature, making sure no communication (email or SMS) is sent to the
     * Customer between 9PM and 8AM in time zone set by the `dunning_communication_delay_time_zone`
     * attribute.
     *
     * @maps dunning_communication_delay_enabled
     */
    public function setDunningCommunicationDelayEnabled(?bool $dunningCommunicationDelayEnabled): void
    {
        $this->dunningCommunicationDelayEnabled = $dunningCommunicationDelayEnabled;
    }

    /**
     * Returns Dunning Communication Delay Time Zone.
     * Time zone for the Dunning Communication Delay feature.
     */
    public function getDunningCommunicationDelayTimeZone(): ?string
    {
        if (count($this->dunningCommunicationDelayTimeZone) == 0) {
            return null;
        }
        return $this->dunningCommunicationDelayTimeZone['value'];
    }

    /**
     * Sets Dunning Communication Delay Time Zone.
     * Time zone for the Dunning Communication Delay feature.
     *
     * @maps dunning_communication_delay_time_zone
     */
    public function setDunningCommunicationDelayTimeZone(?string $dunningCommunicationDelayTimeZone): void
    {
        $this->dunningCommunicationDelayTimeZone['value'] = $dunningCommunicationDelayTimeZone;
    }

    /**
     * Unsets Dunning Communication Delay Time Zone.
     * Time zone for the Dunning Communication Delay feature.
     */
    public function unsetDunningCommunicationDelayTimeZone(): void
    {
        $this->dunningCommunicationDelayTimeZone = [];
    }

    /**
     * Returns Product Price Point Id.
     * Set to change the current product's price point.
     */
    public function getProductPricePointId(): ?int
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     * Set to change the current product's price point.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Returns Product Price Point Handle.
     * Set to change the current product's price point.
     */
    public function getProductPricePointHandle(): ?string
    {
        return $this->productPricePointHandle;
    }

    /**
     * Sets Product Price Point Handle.
     * Set to change the current product's price point.
     *
     * @maps product_price_point_handle
     */
    public function setProductPricePointHandle(?string $productPricePointHandle): void
    {
        $this->productPricePointHandle = $productPricePointHandle;
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
        if (isset($this->creditCardAttributes)) {
            $json['credit_card_attributes']                = $this->creditCardAttributes;
        }
        if (isset($this->productHandle)) {
            $json['product_handle']                        = $this->productHandle;
        }
        if (isset($this->productId)) {
            $json['product_id']                            = $this->productId;
        }
        if (isset($this->productChangeDelayed)) {
            $json['product_change_delayed']                = $this->productChangeDelayed;
        }
        if (isset($this->nextProductId)) {
            $json['next_product_id']                       = $this->nextProductId;
        }
        if (isset($this->nextProductPricePointId)) {
            $json['next_product_price_point_id']           = $this->nextProductPricePointId;
        }
        if (isset($this->snapDay)) {
            $json['snap_day']                              =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->snapDay,
                    'anyOf(oneOf(SnapDay,int),null)',
                    [
                        '\AdvancedBillingLib\Models\SnapDay::checkValue SnapDay'
                    ]
                );
        }
        if (isset($this->nextBillingAt)) {
            $json['next_billing_at']                       = DateTimeHelper::toRfc3339DateTime($this->nextBillingAt);
        }
        if (isset($this->paymentCollectionMethod)) {
            $json['payment_collection_method']             = $this->paymentCollectionMethod;
        }
        if (isset($this->receivesInvoiceEmails)) {
            $json['receives_invoice_emails']               = $this->receivesInvoiceEmails;
        }
        if (isset($this->netTerms)) {
            $json['net_terms']                             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->netTerms,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->storedCredentialTransactionId)) {
            $json['stored_credential_transaction_id']      = $this->storedCredentialTransactionId;
        }
        if (isset($this->reference)) {
            $json['reference']                             = $this->reference;
        }
        if (isset($this->customPrice)) {
            $json['custom_price']                          = $this->customPrice;
        }
        if (isset($this->components)) {
            $json['components']                            = $this->components;
        }
        if (isset($this->dunningCommunicationDelayEnabled)) {
            $json['dunning_communication_delay_enabled']   = $this->dunningCommunicationDelayEnabled;
        }
        if (!empty($this->dunningCommunicationDelayTimeZone)) {
            $json['dunning_communication_delay_time_zone'] = $this->dunningCommunicationDelayTimeZone['value'];
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id']                = $this->productPricePointId;
        }
        if (isset($this->productPricePointHandle)) {
            $json['product_price_point_handle']            = $this->productPricePointHandle;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
