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
     * @var array
     */
    private $snapDay = [];

    /**
     * @var \DateTime|null
     */
    private $initialBillingAt;

    /**
     * @var bool|null
     */
    private $deferSignup = false;

    /**
     * @var \DateTime|null
     */
    private $nextBillingAt;

    /**
     * @var \DateTime|null
     */
    private $expiresAt;

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
     * @return int|string|null
     */
    public function getSnapDay()
    {
        if (count($this->snapDay) == 0) {
            return null;
        }
        return $this->snapDay['value'];
    }

    /**
     * Sets Snap Day.
     * Use for subscriptions with product eligible for calendar billing only. Value can be 1-28 or 'end'.
     *
     * @maps snap_day
     * @mapsBy anyOf(oneOf(int,SnapDay),null)
     * @factory \AdvancedBillingLib\Models\SnapDay::checkValue SnapDay
     *
     * @param int|string|null $snapDay
     */
    public function setSnapDay($snapDay): void
    {
        $this->snapDay['value'] = $snapDay;
    }

    /**
     * Unsets Snap Day.
     * Use for subscriptions with product eligible for calendar billing only. Value can be 1-28 or 'end'.
     */
    public function unsetSnapDay(): void
    {
        $this->snapDay = [];
    }

    /**
     * Returns Initial Billing At.
     * (Optional) Set this attribute to a future date/time to update a subscription in the Awaiting Signup
     * Date state, to Awaiting Signup. In the Awaiting Signup state, a subscription behaves like any other.
     * It can be canceled, allocated to, or have its billing date changed. etc. When the
     * `initial_billing_at` date hits, the subscription will transition to the expected state. If the
     * product has a trial, the subscription will enter a trial, otherwise it will go active. Setup fees
     * will be respected either before or after the trial, as configured on the price point. If the payment
     * is due at the initial_billing_at and it fails the subscription will be immediately canceled. You can
     * omit the initial_billing_at date to activate the subscription immediately. See the [subscription
     * import](https://maxio.zendesk.com/hc/en-us/articles/24251489107213-Advanced-Billing-Subscription-
     * Imports#date-format) documentation for more information about Date/Time formats.
     */
    public function getInitialBillingAt(): ?\DateTime
    {
        return $this->initialBillingAt;
    }

    /**
     * Sets Initial Billing At.
     * (Optional) Set this attribute to a future date/time to update a subscription in the Awaiting Signup
     * Date state, to Awaiting Signup. In the Awaiting Signup state, a subscription behaves like any other.
     * It can be canceled, allocated to, or have its billing date changed. etc. When the
     * `initial_billing_at` date hits, the subscription will transition to the expected state. If the
     * product has a trial, the subscription will enter a trial, otherwise it will go active. Setup fees
     * will be respected either before or after the trial, as configured on the price point. If the payment
     * is due at the initial_billing_at and it fails the subscription will be immediately canceled. You can
     * omit the initial_billing_at date to activate the subscription immediately. See the [subscription
     * import](https://maxio.zendesk.com/hc/en-us/articles/24251489107213-Advanced-Billing-Subscription-
     * Imports#date-format) documentation for more information about Date/Time formats.
     *
     * @maps initial_billing_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setInitialBillingAt(?\DateTime $initialBillingAt): void
    {
        $this->initialBillingAt = $initialBillingAt;
    }

    /**
     * Returns Defer Signup.
     * (Optional) Set this attribute to true to move the subscription from Awaiting Signup, to Awaiting
     * Signup Date. Use this when you want to update a subscription that has an unknown initial billing
     * date. When the first billing date is known, update a subscription to set the `initial_billing_at`
     * date. The subscription moves to the awaiting signup with a scheduled initial billing date. You can
     * omit the initial_billing_at date to activate the subscription immediately. See [Subscription
     * States](https://maxio-chargify.zendesk.com/hc/en-us/articles/5404222005773-Subscription-States) for
     * more information.
     */
    public function getDeferSignup(): ?bool
    {
        return $this->deferSignup;
    }

    /**
     * Sets Defer Signup.
     * (Optional) Set this attribute to true to move the subscription from Awaiting Signup, to Awaiting
     * Signup Date. Use this when you want to update a subscription that has an unknown initial billing
     * date. When the first billing date is known, update a subscription to set the `initial_billing_at`
     * date. The subscription moves to the awaiting signup with a scheduled initial billing date. You can
     * omit the initial_billing_at date to activate the subscription immediately. See [Subscription
     * States](https://maxio-chargify.zendesk.com/hc/en-us/articles/5404222005773-Subscription-States) for
     * more information.
     *
     * @maps defer_signup
     */
    public function setDeferSignup(?bool $deferSignup): void
    {
        $this->deferSignup = $deferSignup;
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
     * Returns Expires At.
     * Timestamp giving the expiration date of this subscription (if any). You may manually change the
     * expiration date at any point during a subscription period.
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     * Timestamp giving the expiration date of this subscription (if any). You may manually change the
     * expiration date at any point during a subscription period.
     *
     * @maps expires_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiresAt(?\DateTime $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
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

    /**
     * Converts the UpdateSubscription object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateSubscription object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateSubscription',
            [
                'creditCardAttributes' => $this->creditCardAttributes,
                'productHandle' => $this->productHandle,
                'productId' => $this->productId,
                'productChangeDelayed' => $this->productChangeDelayed,
                'nextProductId' => $this->nextProductId,
                'nextProductPricePointId' => $this->nextProductPricePointId,
                'snapDay' => $this->getSnapDay(),
                'initialBillingAt' => $this->initialBillingAt,
                'deferSignup' => $this->deferSignup,
                'nextBillingAt' => $this->nextBillingAt,
                'expiresAt' => $this->expiresAt,
                'paymentCollectionMethod' => $this->paymentCollectionMethod,
                'receivesInvoiceEmails' => $this->receivesInvoiceEmails,
                'netTerms' => $this->netTerms,
                'storedCredentialTransactionId' => $this->storedCredentialTransactionId,
                'reference' => $this->reference,
                'customPrice' => $this->customPrice,
                'components' => $this->components,
                'dunningCommunicationDelayEnabled' => $this->dunningCommunicationDelayEnabled,
                'dunningCommunicationDelayTimeZone' => $this->getDunningCommunicationDelayTimeZone(),
                'productPricePointId' => $this->productPricePointId,
                'productPricePointHandle' => $this->productPricePointHandle,
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
        if (!empty($this->snapDay)) {
            $json['snap_day']                              =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->snapDay['value'],
                    'anyOf(oneOf(int,SnapDay),null)',
                    [
                        '\AdvancedBillingLib\Models\SnapDay::checkValue SnapDay'
                    ]
                );
        }
        if (isset($this->initialBillingAt)) {
            $json['initial_billing_at']                    = DateTimeHelper::toRfc3339DateTime($this->initialBillingAt);
        }
        if (isset($this->deferSignup)) {
            $json['defer_signup']                          = $this->deferSignup;
        }
        if (isset($this->nextBillingAt)) {
            $json['next_billing_at']                       = DateTimeHelper::toRfc3339DateTime($this->nextBillingAt);
        }
        if (isset($this->expiresAt)) {
            $json['expires_at']                            = DateTimeHelper::toRfc3339DateTime($this->expiresAt);
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
