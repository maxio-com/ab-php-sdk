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

class CreateSubscription implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $productHandle;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var string|null
     */
    private $productPricePointHandle;

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var SubscriptionCustomPrice|null
     */
    private $customPrice;

    /**
     * @var string|null
     */
    private $couponCode;

    /**
     * @var string[]|null
     */
    private $couponCodes;

    /**
     * @var string|null
     */
    private $paymentCollectionMethod;

    /**
     * @var string|null
     */
    private $receivesInvoiceEmails;

    /**
     * @var string|null
     */
    private $netTerms;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var \DateTime|null
     */
    private $nextBillingAt;

    /**
     * @var \DateTime|null
     */
    private $initialBillingAt;

    /**
     * @var int|null
     */
    private $storedCredentialTransactionId;

    /**
     * @var int|null
     */
    private $salesRepId;

    /**
     * @var int|null
     */
    private $paymentProfileId;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var CustomerAttributes|null
     */
    private $customerAttributes;

    /**
     * @var PaymentProfileAttributes|null
     */
    private $paymentProfileAttributes;

    /**
     * @var PaymentProfileAttributes|null
     */
    private $creditCardAttributes;

    /**
     * @var BankAccountAttributes|null
     */
    private $bankAccountAttributes;

    /**
     * @var CreateSubscriptionComponent[]|null
     */
    private $components;

    /**
     * @var CalendarBilling|null
     */
    private $calendarBilling;

    /**
     * @var array<string,string>|null
     */
    private $metafields;

    /**
     * @var string|null
     */
    private $customerReference;

    /**
     * @var GroupSettings|null
     */
    private $group;

    /**
     * @var string|null
     */
    private $ref;

    /**
     * @var string|null
     */
    private $cancellationMessage;

    /**
     * @var string|null
     */
    private $cancellationMethod;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var \DateTime|null
     */
    private $expiresAt;

    /**
     * @var string|null
     */
    private $expirationTracksNextBillingChange;

    /**
     * @var string|null
     */
    private $agreementTerms;

    /**
     * @var string|null
     */
    private $authorizerFirstName;

    /**
     * @var string|null
     */
    private $authorizerLastName;

    /**
     * @var string|null
     */
    private $calendarBillingFirstCharge;

    /**
     * @var string|null
     */
    private $reasonCode;

    /**
     * @var bool|null
     */
    private $productChangeDelayed;

    /**
     * @var string|int|null
     */
    private $offerId;

    /**
     * @var UpsertPrepaidConfiguration|null
     */
    private $prepaidConfiguration;

    /**
     * @var \DateTime|null
     */
    private $previousBillingAt;

    /**
     * @var bool|null
     */
    private $importMrr;

    /**
     * @var \DateTime|null
     */
    private $canceledAt;

    /**
     * @var \DateTime|null
     */
    private $activatedAt;

    /**
     * @var AgreementAcceptance|null
     */
    private $agreementAcceptance;

    /**
     * @var ACHAgreement|null
     */
    private $achAgreement;

    /**
     * @var array
     */
    private $dunningCommunicationDelayEnabled = ['value' => false];

    /**
     * @var array
     */
    private $dunningCommunicationDelayTimeZone = [];

    /**
     * @var bool|null
     */
    private $skipBillingManifestTaxes = false;

    /**
     * Returns Product Handle.
     * The API Handle of the product for which you are creating a subscription. Required, unless a
     * `product_id` is given instead.
     */
    public function getProductHandle(): ?string
    {
        return $this->productHandle;
    }

    /**
     * Sets Product Handle.
     * The API Handle of the product for which you are creating a subscription. Required, unless a
     * `product_id` is given instead.
     *
     * @maps product_handle
     */
    public function setProductHandle(?string $productHandle): void
    {
        $this->productHandle = $productHandle;
    }

    /**
     * Returns Product Id.
     * The Product ID of the product for which you are creating a subscription. The product ID is not
     * currently published, so we recommend using the API Handle instead.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * The Product ID of the product for which you are creating a subscription. The product ID is not
     * currently published, so we recommend using the API Handle instead.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Product Price Point Handle.
     * The user-friendly API handle of a product's particular price point.
     */
    public function getProductPricePointHandle(): ?string
    {
        return $this->productPricePointHandle;
    }

    /**
     * Sets Product Price Point Handle.
     * The user-friendly API handle of a product's particular price point.
     *
     * @maps product_price_point_handle
     */
    public function setProductPricePointHandle(?string $productPricePointHandle): void
    {
        $this->productPricePointHandle = $productPricePointHandle;
    }

    /**
     * Returns Product Price Point Id.
     * The ID of the particular price point on the product.
     */
    public function getProductPricePointId(): ?int
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     * The ID of the particular price point on the product.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
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
     * Returns Coupon Code.
     * (deprecated) The coupon code of the single coupon currently applied to the subscription. See
     * coupon_codes instead as subscriptions can now have more than one coupon.
     */
    public function getCouponCode(): ?string
    {
        return $this->couponCode;
    }

    /**
     * Sets Coupon Code.
     * (deprecated) The coupon code of the single coupon currently applied to the subscription. See
     * coupon_codes instead as subscriptions can now have more than one coupon.
     *
     * @maps coupon_code
     */
    public function setCouponCode(?string $couponCode): void
    {
        $this->couponCode = $couponCode;
    }

    /**
     * Returns Coupon Codes.
     * An array for all the coupons attached to the subscription.
     *
     * @return string[]|null
     */
    public function getCouponCodes(): ?array
    {
        return $this->couponCodes;
    }

    /**
     * Sets Coupon Codes.
     * An array for all the coupons attached to the subscription.
     *
     * @maps coupon_codes
     *
     * @param string[]|null $couponCodes
     */
    public function setCouponCodes(?array $couponCodes): void
    {
        $this->couponCodes = $couponCodes;
    }

    /**
     * Returns Payment Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     */
    public function getPaymentCollectionMethod(): ?string
    {
        return $this->paymentCollectionMethod;
    }

    /**
     * Sets Payment Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     *
     * @maps payment_collection_method
     * @factory \AdvancedBillingLib\Models\CollectionMethod::checkValue
     */
    public function setPaymentCollectionMethod(?string $paymentCollectionMethod): void
    {
        $this->paymentCollectionMethod = $paymentCollectionMethod;
    }

    /**
     * Returns Receives Invoice Emails.
     * (Optional) Default: True - Whether or not this subscription is set to receive emails related to this
     * subscription.
     */
    public function getReceivesInvoiceEmails(): ?string
    {
        return $this->receivesInvoiceEmails;
    }

    /**
     * Sets Receives Invoice Emails.
     * (Optional) Default: True - Whether or not this subscription is set to receive emails related to this
     * subscription.
     *
     * @maps receives_invoice_emails
     */
    public function setReceivesInvoiceEmails(?string $receivesInvoiceEmails): void
    {
        $this->receivesInvoiceEmails = $receivesInvoiceEmails;
    }

    /**
     * Returns Net Terms.
     * (Optional) Default: null The number of days after renewal (on invoice billing) that a subscription
     * is due. A value between 0 (due immediately) and 180.
     */
    public function getNetTerms(): ?string
    {
        return $this->netTerms;
    }

    /**
     * Sets Net Terms.
     * (Optional) Default: null The number of days after renewal (on invoice billing) that a subscription
     * is due. A value between 0 (due immediately) and 180.
     *
     * @maps net_terms
     */
    public function setNetTerms(?string $netTerms): void
    {
        $this->netTerms = $netTerms;
    }

    /**
     * Returns Customer Id.
     * The ID of an existing customer within Chargify. Required, unless a `customer_reference` or a set of
     * `customer_attributes` is given.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * The ID of an existing customer within Chargify. Required, unless a `customer_reference` or a set of
     * `customer_attributes` is given.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Next Billing At.
     * (Optional) Set this attribute to a future date/time to sync imported subscriptions to your existing
     * renewal schedule. See the notes on “Date/Time Format” in our [subscription import
     * documentation](https://maxio.zendesk.com/hc/en-us/articles/24251489107213-Advanced-Billing-
     * Subscription-Imports#date-format). If you provide a next_billing_at timestamp that is in the future,
     * no trial or initial charges will be applied when you create the subscription. In fact, no payment
     * will be captured at all. The first payment will be captured, according to the prices defined by the
     * product, near the time specified by next_billing_at. If you do not provide a value for
     * next_billing_at, any trial and/or initial charges will be assessed and charged at the time of
     * subscription creation. If the card cannot be successfully charged, the subscription will not be
     * created. See further notes in the section on Importing Subscriptions.
     */
    public function getNextBillingAt(): ?\DateTime
    {
        return $this->nextBillingAt;
    }

    /**
     * Sets Next Billing At.
     * (Optional) Set this attribute to a future date/time to sync imported subscriptions to your existing
     * renewal schedule. See the notes on “Date/Time Format” in our [subscription import
     * documentation](https://maxio.zendesk.com/hc/en-us/articles/24251489107213-Advanced-Billing-
     * Subscription-Imports#date-format). If you provide a next_billing_at timestamp that is in the future,
     * no trial or initial charges will be applied when you create the subscription. In fact, no payment
     * will be captured at all. The first payment will be captured, according to the prices defined by the
     * product, near the time specified by next_billing_at. If you do not provide a value for
     * next_billing_at, any trial and/or initial charges will be assessed and charged at the time of
     * subscription creation. If the card cannot be successfully charged, the subscription will not be
     * created. See further notes in the section on Importing Subscriptions.
     *
     * @maps next_billing_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNextBillingAt(?\DateTime $nextBillingAt): void
    {
        $this->nextBillingAt = $nextBillingAt;
    }

    /**
     * Returns Initial Billing At.
     * (Optional) Set this attribute to a future date/time to create a subscription in the "Awaiting
     * Signup" state, rather than "Active" or "Trialing". See the notes on “Date/Time Format” in our
     * [subscription import documentation](https://maxio.zendesk.com/hc/en-us/articles/24251489107213-
     * Advanced-Billing-Subscription-Imports#date-format). In the "Awaiting Signup" state, a subscription
     * behaves like any other. It can be canceled, allocated to, had its billing date changed. etc. When
     * the initial_billing_at date hits, the subscription will transition to the expected state. If the
     * product has a trial, the subscription will enter a trial, otherwise it will go active. Setup fees
     * will be respected either before or after the trial, as configured on the price point. If the payment
     * is due at the initial_billing_at and it fails the subscription will be immediately canceled. See
     * further notes in the section on Delayed Signups.
     */
    public function getInitialBillingAt(): ?\DateTime
    {
        return $this->initialBillingAt;
    }

    /**
     * Sets Initial Billing At.
     * (Optional) Set this attribute to a future date/time to create a subscription in the "Awaiting
     * Signup" state, rather than "Active" or "Trialing". See the notes on “Date/Time Format” in our
     * [subscription import documentation](https://maxio.zendesk.com/hc/en-us/articles/24251489107213-
     * Advanced-Billing-Subscription-Imports#date-format). In the "Awaiting Signup" state, a subscription
     * behaves like any other. It can be canceled, allocated to, had its billing date changed. etc. When
     * the initial_billing_at date hits, the subscription will transition to the expected state. If the
     * product has a trial, the subscription will enter a trial, otherwise it will go active. Setup fees
     * will be respected either before or after the trial, as configured on the price point. If the payment
     * is due at the initial_billing_at and it fails the subscription will be immediately canceled. See
     * further notes in the section on Delayed Signups.
     *
     * @maps initial_billing_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setInitialBillingAt(?\DateTime $initialBillingAt): void
    {
        $this->initialBillingAt = $initialBillingAt;
    }

    /**
     * Returns Stored Credential Transaction Id.
     * For European sites subject to PSD2 and using 3D Secure, this can be used to reference a previous
     * transaction for the customer. This will ensure the card will be charged successfully at renewal.
     */
    public function getStoredCredentialTransactionId(): ?int
    {
        return $this->storedCredentialTransactionId;
    }

    /**
     * Sets Stored Credential Transaction Id.
     * For European sites subject to PSD2 and using 3D Secure, this can be used to reference a previous
     * transaction for the customer. This will ensure the card will be charged successfully at renewal.
     *
     * @maps stored_credential_transaction_id
     */
    public function setStoredCredentialTransactionId(?int $storedCredentialTransactionId): void
    {
        $this->storedCredentialTransactionId = $storedCredentialTransactionId;
    }

    /**
     * Returns Sales Rep Id.
     */
    public function getSalesRepId(): ?int
    {
        return $this->salesRepId;
    }

    /**
     * Sets Sales Rep Id.
     *
     * @maps sales_rep_id
     */
    public function setSalesRepId(?int $salesRepId): void
    {
        $this->salesRepId = $salesRepId;
    }

    /**
     * Returns Payment Profile Id.
     * The Payment Profile ID of an existing card or bank account, which belongs to an existing customer to
     * use for payment for this subscription. If the card, bank account, or customer does not exist already,
     * or if you want to use a new (unstored) card or bank account for the subscription, use
     * `payment_profile_attributes` instead to create a new payment profile along with the subscription.
     * (This value is available on an existing subscription via the API as `credit_card` > id or
     * `bank_account` > id)
     */
    public function getPaymentProfileId(): ?int
    {
        return $this->paymentProfileId;
    }

    /**
     * Sets Payment Profile Id.
     * The Payment Profile ID of an existing card or bank account, which belongs to an existing customer to
     * use for payment for this subscription. If the card, bank account, or customer does not exist already,
     * or if you want to use a new (unstored) card or bank account for the subscription, use
     * `payment_profile_attributes` instead to create a new payment profile along with the subscription.
     * (This value is available on an existing subscription via the API as `credit_card` > id or
     * `bank_account` > id)
     *
     * @maps payment_profile_id
     */
    public function setPaymentProfileId(?int $paymentProfileId): void
    {
        $this->paymentProfileId = $paymentProfileId;
    }

    /**
     * Returns Reference.
     * The reference value (provided by your app) for the subscription itelf.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     * The reference value (provided by your app) for the subscription itelf.
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Returns Customer Attributes.
     */
    public function getCustomerAttributes(): ?CustomerAttributes
    {
        return $this->customerAttributes;
    }

    /**
     * Sets Customer Attributes.
     *
     * @maps customer_attributes
     */
    public function setCustomerAttributes(?CustomerAttributes $customerAttributes): void
    {
        $this->customerAttributes = $customerAttributes;
    }

    /**
     * Returns Payment Profile Attributes.
     * alias to credit_card_attributes
     */
    public function getPaymentProfileAttributes(): ?PaymentProfileAttributes
    {
        return $this->paymentProfileAttributes;
    }

    /**
     * Sets Payment Profile Attributes.
     * alias to credit_card_attributes
     *
     * @maps payment_profile_attributes
     */
    public function setPaymentProfileAttributes(?PaymentProfileAttributes $paymentProfileAttributes): void
    {
        $this->paymentProfileAttributes = $paymentProfileAttributes;
    }

    /**
     * Returns Credit Card Attributes.
     * Credit Card data to create a new Subscription. Interchangeable with `payment_profile_attributes`
     * property.
     */
    public function getCreditCardAttributes(): ?PaymentProfileAttributes
    {
        return $this->creditCardAttributes;
    }

    /**
     * Sets Credit Card Attributes.
     * Credit Card data to create a new Subscription. Interchangeable with `payment_profile_attributes`
     * property.
     *
     * @maps credit_card_attributes
     */
    public function setCreditCardAttributes(?PaymentProfileAttributes $creditCardAttributes): void
    {
        $this->creditCardAttributes = $creditCardAttributes;
    }

    /**
     * Returns Bank Account Attributes.
     */
    public function getBankAccountAttributes(): ?BankAccountAttributes
    {
        return $this->bankAccountAttributes;
    }

    /**
     * Sets Bank Account Attributes.
     *
     * @maps bank_account_attributes
     */
    public function setBankAccountAttributes(?BankAccountAttributes $bankAccountAttributes): void
    {
        $this->bankAccountAttributes = $bankAccountAttributes;
    }

    /**
     * Returns Components.
     * (Optional) An array of component ids and quantities to be added to the subscription. See
     * [Components](https://maxio.zendesk.com/hc/en-us/articles/24261141522189-Components-Overview) for
     * more information.
     *
     * @return CreateSubscriptionComponent[]|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Sets Components.
     * (Optional) An array of component ids and quantities to be added to the subscription. See
     * [Components](https://maxio.zendesk.com/hc/en-us/articles/24261141522189-Components-Overview) for
     * more information.
     *
     * @maps components
     *
     * @param CreateSubscriptionComponent[]|null $components
     */
    public function setComponents(?array $components): void
    {
        $this->components = $components;
    }

    /**
     * Returns Calendar Billing.
     * (Optional). Cannot be used when also specifying next_billing_at
     */
    public function getCalendarBilling(): ?CalendarBilling
    {
        return $this->calendarBilling;
    }

    /**
     * Sets Calendar Billing.
     * (Optional). Cannot be used when also specifying next_billing_at
     *
     * @maps calendar_billing
     */
    public function setCalendarBilling(?CalendarBilling $calendarBilling): void
    {
        $this->calendarBilling = $calendarBilling;
    }

    /**
     * Returns Metafields.
     * (Optional) A set of key/value pairs representing custom fields and their values. Metafields will be
     * created “on-the-fly” in your site for a given key, if they have not been created yet.
     *
     * @return array<string,string>|null
     */
    public function getMetafields(): ?array
    {
        return $this->metafields;
    }

    /**
     * Sets Metafields.
     * (Optional) A set of key/value pairs representing custom fields and their values. Metafields will be
     * created “on-the-fly” in your site for a given key, if they have not been created yet.
     *
     * @maps metafields
     *
     * @param array<string,string>|null $metafields
     */
    public function setMetafields(?array $metafields): void
    {
        $this->metafields = $metafields;
    }

    /**
     * Returns Customer Reference.
     * The reference value (provided by your app) of an existing customer within Chargify. Required, unless
     * a `customer_id` or a set of `customer_attributes` is given.
     */
    public function getCustomerReference(): ?string
    {
        return $this->customerReference;
    }

    /**
     * Sets Customer Reference.
     * The reference value (provided by your app) of an existing customer within Chargify. Required, unless
     * a `customer_id` or a set of `customer_attributes` is given.
     *
     * @maps customer_reference
     */
    public function setCustomerReference(?string $customerReference): void
    {
        $this->customerReference = $customerReference;
    }

    /**
     * Returns Group.
     */
    public function getGroup(): ?GroupSettings
    {
        return $this->group;
    }

    /**
     * Sets Group.
     *
     * @maps group
     */
    public function setGroup(?GroupSettings $group): void
    {
        $this->group = $group;
    }

    /**
     * Returns Ref.
     * A valid referral code. (optional, see [Referrals](https://maxio.zendesk.com/hc/en-
     * us/articles/24286981223693-Referrals-Reference#how-to-obtain-referral-codes) for more details). If
     * supplied, must be valid, or else subscription creation will fail.
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * Sets Ref.
     * A valid referral code. (optional, see [Referrals](https://maxio.zendesk.com/hc/en-
     * us/articles/24286981223693-Referrals-Reference#how-to-obtain-referral-codes) for more details). If
     * supplied, must be valid, or else subscription creation will fail.
     *
     * @maps ref
     */
    public function setRef(?string $ref): void
    {
        $this->ref = $ref;
    }

    /**
     * Returns Cancellation Message.
     * (Optional) Can be used when canceling a subscription (via the HTTP DELETE method) to make a note
     * about the reason for cancellation.
     */
    public function getCancellationMessage(): ?string
    {
        return $this->cancellationMessage;
    }

    /**
     * Sets Cancellation Message.
     * (Optional) Can be used when canceling a subscription (via the HTTP DELETE method) to make a note
     * about the reason for cancellation.
     *
     * @maps cancellation_message
     */
    public function setCancellationMessage(?string $cancellationMessage): void
    {
        $this->cancellationMessage = $cancellationMessage;
    }

    /**
     * Returns Cancellation Method.
     * (Optional) Can be used when canceling a subscription (via the HTTP DELETE method) to make a note
     * about how the subscription was canceled.
     */
    public function getCancellationMethod(): ?string
    {
        return $this->cancellationMethod;
    }

    /**
     * Sets Cancellation Method.
     * (Optional) Can be used when canceling a subscription (via the HTTP DELETE method) to make a note
     * about how the subscription was canceled.
     *
     * @maps cancellation_method
     */
    public function setCancellationMethod(?string $cancellationMethod): void
    {
        $this->cancellationMethod = $cancellationMethod;
    }

    /**
     * Returns Currency.
     * (Optional) If Multi-Currency is enabled and the currency is configured in Chargify, pass it at
     * signup to create a subscription on a non-default currency. Note that you cannot update the currency
     * of an existing subscription.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * (Optional) If Multi-Currency is enabled and the currency is configured in Chargify, pass it at
     * signup to create a subscription on a non-default currency. Note that you cannot update the currency
     * of an existing subscription.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
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
     * Returns Expiration Tracks Next Billing Change.
     * (Optional, default false) When set to true, and when next_billing_at is present, if the subscription
     * expires, the expires_at will be shifted by the same amount of time as the difference between the old
     * and new “next billing” dates.
     */
    public function getExpirationTracksNextBillingChange(): ?string
    {
        return $this->expirationTracksNextBillingChange;
    }

    /**
     * Sets Expiration Tracks Next Billing Change.
     * (Optional, default false) When set to true, and when next_billing_at is present, if the subscription
     * expires, the expires_at will be shifted by the same amount of time as the difference between the old
     * and new “next billing” dates.
     *
     * @maps expiration_tracks_next_billing_change
     */
    public function setExpirationTracksNextBillingChange(?string $expirationTracksNextBillingChange): void
    {
        $this->expirationTracksNextBillingChange = $expirationTracksNextBillingChange;
    }

    /**
     * Returns Agreement Terms.
     * (Optional) The ACH authorization agreement terms. If enabled, an email will be sent to the customer
     * with a copy of the terms.
     */
    public function getAgreementTerms(): ?string
    {
        return $this->agreementTerms;
    }

    /**
     * Sets Agreement Terms.
     * (Optional) The ACH authorization agreement terms. If enabled, an email will be sent to the customer
     * with a copy of the terms.
     *
     * @maps agreement_terms
     */
    public function setAgreementTerms(?string $agreementTerms): void
    {
        $this->agreementTerms = $agreementTerms;
    }

    /**
     * Returns Authorizer First Name.
     * (Optional) The first name of the person authorizing the ACH agreement.
     */
    public function getAuthorizerFirstName(): ?string
    {
        return $this->authorizerFirstName;
    }

    /**
     * Sets Authorizer First Name.
     * (Optional) The first name of the person authorizing the ACH agreement.
     *
     * @maps authorizer_first_name
     */
    public function setAuthorizerFirstName(?string $authorizerFirstName): void
    {
        $this->authorizerFirstName = $authorizerFirstName;
    }

    /**
     * Returns Authorizer Last Name.
     * (Optional) The last name of the person authorizing the ACH agreement.
     */
    public function getAuthorizerLastName(): ?string
    {
        return $this->authorizerLastName;
    }

    /**
     * Sets Authorizer Last Name.
     * (Optional) The last name of the person authorizing the ACH agreement.
     *
     * @maps authorizer_last_name
     */
    public function setAuthorizerLastName(?string $authorizerLastName): void
    {
        $this->authorizerLastName = $authorizerLastName;
    }

    /**
     * Returns Calendar Billing First Charge.
     * (Optional) One of “prorated” (the default – the prorated product price will be charged immediately),
     * “immediate” (the full product price will be charged immediately), or “delayed” (the full product
     * price will be charged with the first scheduled renewal).
     */
    public function getCalendarBillingFirstCharge(): ?string
    {
        return $this->calendarBillingFirstCharge;
    }

    /**
     * Sets Calendar Billing First Charge.
     * (Optional) One of “prorated” (the default – the prorated product price will be charged immediately),
     * “immediate” (the full product price will be charged immediately), or “delayed” (the full product
     * price will be charged with the first scheduled renewal).
     *
     * @maps calendar_billing_first_charge
     */
    public function setCalendarBillingFirstCharge(?string $calendarBillingFirstCharge): void
    {
        $this->calendarBillingFirstCharge = $calendarBillingFirstCharge;
    }

    /**
     * Returns Reason Code.
     * (Optional) Can be used when canceling a subscription (via the HTTP DELETE method) to indicate why a
     * subscription was canceled.
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     * (Optional) Can be used when canceling a subscription (via the HTTP DELETE method) to indicate why a
     * subscription was canceled.
     *
     * @maps reason_code
     */
    public function setReasonCode(?string $reasonCode): void
    {
        $this->reasonCode = $reasonCode;
    }

    /**
     * Returns Product Change Delayed.
     * (Optional, used only for Delayed Product Change When set to true, indicates that a changed value for
     * product_handle should schedule the product change to the next subscription renewal.
     */
    public function getProductChangeDelayed(): ?bool
    {
        return $this->productChangeDelayed;
    }

    /**
     * Sets Product Change Delayed.
     * (Optional, used only for Delayed Product Change When set to true, indicates that a changed value for
     * product_handle should schedule the product change to the next subscription renewal.
     *
     * @maps product_change_delayed
     */
    public function setProductChangeDelayed(?bool $productChangeDelayed): void
    {
        $this->productChangeDelayed = $productChangeDelayed;
    }

    /**
     * Returns Offer Id.
     * Use in place of passing product and component information to set up the subscription with an
     * existing offer. May be either the Chargify id of the offer or its handle prefixed with `handle:`.er
     *
     * @return string|int|null
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * Sets Offer Id.
     * Use in place of passing product and component information to set up the subscription with an
     * existing offer. May be either the Chargify id of the offer or its handle prefixed with `handle:`.er
     *
     * @maps offer_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $offerId
     */
    public function setOfferId($offerId): void
    {
        $this->offerId = $offerId;
    }

    /**
     * Returns Prepaid Configuration.
     */
    public function getPrepaidConfiguration(): ?UpsertPrepaidConfiguration
    {
        return $this->prepaidConfiguration;
    }

    /**
     * Sets Prepaid Configuration.
     *
     * @maps prepaid_configuration
     */
    public function setPrepaidConfiguration(?UpsertPrepaidConfiguration $prepaidConfiguration): void
    {
        $this->prepaidConfiguration = $prepaidConfiguration;
    }

    /**
     * Returns Previous Billing At.
     * Providing a previous_billing_at that is in the past will set the current_period_starts_at when the
     * subscription is created. It will also set activated_at if not explicitly passed during the
     * subscription import. Can only be used if next_billing_at is also passed. Using this option will
     * allow you to set the period start for the subscription so mid period component allocations have the
     * correct prorated amount.
     */
    public function getPreviousBillingAt(): ?\DateTime
    {
        return $this->previousBillingAt;
    }

    /**
     * Sets Previous Billing At.
     * Providing a previous_billing_at that is in the past will set the current_period_starts_at when the
     * subscription is created. It will also set activated_at if not explicitly passed during the
     * subscription import. Can only be used if next_billing_at is also passed. Using this option will
     * allow you to set the period start for the subscription so mid period component allocations have the
     * correct prorated amount.
     *
     * @maps previous_billing_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setPreviousBillingAt(?\DateTime $previousBillingAt): void
    {
        $this->previousBillingAt = $previousBillingAt;
    }

    /**
     * Returns Import Mrr.
     * Setting this attribute to true will cause the subscription's MRR to be added to your MRR analytics
     * immediately. For this value to be honored, a next_billing_at must be present and set to a future
     * date. This key/value will not be returned in the subscription response body.
     */
    public function getImportMrr(): ?bool
    {
        return $this->importMrr;
    }

    /**
     * Sets Import Mrr.
     * Setting this attribute to true will cause the subscription's MRR to be added to your MRR analytics
     * immediately. For this value to be honored, a next_billing_at must be present and set to a future
     * date. This key/value will not be returned in the subscription response body.
     *
     * @maps import_mrr
     */
    public function setImportMrr(?bool $importMrr): void
    {
        $this->importMrr = $importMrr;
    }

    /**
     * Returns Canceled At.
     */
    public function getCanceledAt(): ?\DateTime
    {
        return $this->canceledAt;
    }

    /**
     * Sets Canceled At.
     *
     * @maps canceled_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCanceledAt(?\DateTime $canceledAt): void
    {
        $this->canceledAt = $canceledAt;
    }

    /**
     * Returns Activated At.
     */
    public function getActivatedAt(): ?\DateTime
    {
        return $this->activatedAt;
    }

    /**
     * Sets Activated At.
     *
     * @maps activated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setActivatedAt(?\DateTime $activatedAt): void
    {
        $this->activatedAt = $activatedAt;
    }

    /**
     * Returns Agreement Acceptance.
     * Required when creating a subscription with Maxio Payments.
     */
    public function getAgreementAcceptance(): ?AgreementAcceptance
    {
        return $this->agreementAcceptance;
    }

    /**
     * Sets Agreement Acceptance.
     * Required when creating a subscription with Maxio Payments.
     *
     * @maps agreement_acceptance
     */
    public function setAgreementAcceptance(?AgreementAcceptance $agreementAcceptance): void
    {
        $this->agreementAcceptance = $agreementAcceptance;
    }

    /**
     * Returns Ach Agreement.
     * (Optional) If passed, the proof of the authorized ACH agreement terms will be persisted.
     */
    public function getAchAgreement(): ?ACHAgreement
    {
        return $this->achAgreement;
    }

    /**
     * Sets Ach Agreement.
     * (Optional) If passed, the proof of the authorized ACH agreement terms will be persisted.
     *
     * @maps ach_agreement
     */
    public function setAchAgreement(?ACHAgreement $achAgreement): void
    {
        $this->achAgreement = $achAgreement;
    }

    /**
     * Returns Dunning Communication Delay Enabled.
     * Enable Communication Delay feature, making sure no communication (email or SMS) is sent to the
     * Customer between 9PM and 8AM in time zone set by the `dunning_communication_delay_time_zone`
     * attribute.
     */
    public function getDunningCommunicationDelayEnabled(): ?bool
    {
        if (count($this->dunningCommunicationDelayEnabled) == 0) {
            return null;
        }
        return $this->dunningCommunicationDelayEnabled['value'];
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
        $this->dunningCommunicationDelayEnabled['value'] = $dunningCommunicationDelayEnabled;
    }

    /**
     * Unsets Dunning Communication Delay Enabled.
     * Enable Communication Delay feature, making sure no communication (email or SMS) is sent to the
     * Customer between 9PM and 8AM in time zone set by the `dunning_communication_delay_time_zone`
     * attribute.
     */
    public function unsetDunningCommunicationDelayEnabled(): void
    {
        $this->dunningCommunicationDelayEnabled = [];
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
     * Returns Skip Billing Manifest Taxes.
     * Valid only for the Subscription Preview endpoint. When set to `true` it skips calculating taxes for
     * the current and next billing manifests.
     */
    public function getSkipBillingManifestTaxes(): ?bool
    {
        return $this->skipBillingManifestTaxes;
    }

    /**
     * Sets Skip Billing Manifest Taxes.
     * Valid only for the Subscription Preview endpoint. When set to `true` it skips calculating taxes for
     * the current and next billing manifests.
     *
     * @maps skip_billing_manifest_taxes
     */
    public function setSkipBillingManifestTaxes(?bool $skipBillingManifestTaxes): void
    {
        $this->skipBillingManifestTaxes = $skipBillingManifestTaxes;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->productHandle)) {
            $json['product_handle']                        = $this->productHandle;
        }
        if (isset($this->productId)) {
            $json['product_id']                            = $this->productId;
        }
        if (isset($this->productPricePointHandle)) {
            $json['product_price_point_handle']            = $this->productPricePointHandle;
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id']                = $this->productPricePointId;
        }
        if (isset($this->customPrice)) {
            $json['custom_price']                          = $this->customPrice;
        }
        if (isset($this->couponCode)) {
            $json['coupon_code']                           = $this->couponCode;
        }
        if (isset($this->couponCodes)) {
            $json['coupon_codes']                          = $this->couponCodes;
        }
        if (isset($this->paymentCollectionMethod)) {
            $json['payment_collection_method']             =
                CollectionMethod::checkValue(
                    $this->paymentCollectionMethod
                );
        }
        if (isset($this->receivesInvoiceEmails)) {
            $json['receives_invoice_emails']               = $this->receivesInvoiceEmails;
        }
        if (isset($this->netTerms)) {
            $json['net_terms']                             = $this->netTerms;
        }
        if (isset($this->customerId)) {
            $json['customer_id']                           = $this->customerId;
        }
        if (isset($this->nextBillingAt)) {
            $json['next_billing_at']                       = DateTimeHelper::toRfc3339DateTime($this->nextBillingAt);
        }
        if (isset($this->initialBillingAt)) {
            $json['initial_billing_at']                    = DateTimeHelper::toRfc3339DateTime($this->initialBillingAt);
        }
        if (isset($this->storedCredentialTransactionId)) {
            $json['stored_credential_transaction_id']      = $this->storedCredentialTransactionId;
        }
        if (isset($this->salesRepId)) {
            $json['sales_rep_id']                          = $this->salesRepId;
        }
        if (isset($this->paymentProfileId)) {
            $json['payment_profile_id']                    = $this->paymentProfileId;
        }
        if (isset($this->reference)) {
            $json['reference']                             = $this->reference;
        }
        if (isset($this->customerAttributes)) {
            $json['customer_attributes']                   = $this->customerAttributes;
        }
        if (isset($this->paymentProfileAttributes)) {
            $json['payment_profile_attributes']            = $this->paymentProfileAttributes;
        }
        if (isset($this->creditCardAttributes)) {
            $json['credit_card_attributes']                = $this->creditCardAttributes;
        }
        if (isset($this->bankAccountAttributes)) {
            $json['bank_account_attributes']               = $this->bankAccountAttributes;
        }
        if (isset($this->components)) {
            $json['components']                            = $this->components;
        }
        if (isset($this->calendarBilling)) {
            $json['calendar_billing']                      = $this->calendarBilling;
        }
        if (isset($this->metafields)) {
            $json['metafields']                            = $this->metafields;
        }
        if (isset($this->customerReference)) {
            $json['customer_reference']                    = $this->customerReference;
        }
        if (isset($this->group)) {
            $json['group']                                 = $this->group;
        }
        if (isset($this->ref)) {
            $json['ref']                                   = $this->ref;
        }
        if (isset($this->cancellationMessage)) {
            $json['cancellation_message']                  = $this->cancellationMessage;
        }
        if (isset($this->cancellationMethod)) {
            $json['cancellation_method']                   = $this->cancellationMethod;
        }
        if (isset($this->currency)) {
            $json['currency']                              = $this->currency;
        }
        if (isset($this->expiresAt)) {
            $json['expires_at']                            = DateTimeHelper::toRfc3339DateTime($this->expiresAt);
        }
        if (isset($this->expirationTracksNextBillingChange)) {
            $json['expiration_tracks_next_billing_change'] = $this->expirationTracksNextBillingChange;
        }
        if (isset($this->agreementTerms)) {
            $json['agreement_terms']                       = $this->agreementTerms;
        }
        if (isset($this->authorizerFirstName)) {
            $json['authorizer_first_name']                 = $this->authorizerFirstName;
        }
        if (isset($this->authorizerLastName)) {
            $json['authorizer_last_name']                  = $this->authorizerLastName;
        }
        if (isset($this->calendarBillingFirstCharge)) {
            $json['calendar_billing_first_charge']         = $this->calendarBillingFirstCharge;
        }
        if (isset($this->reasonCode)) {
            $json['reason_code']                           = $this->reasonCode;
        }
        if (isset($this->productChangeDelayed)) {
            $json['product_change_delayed']                = $this->productChangeDelayed;
        }
        if (isset($this->offerId)) {
            $json['offer_id']                              =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->offerId,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->prepaidConfiguration)) {
            $json['prepaid_configuration']                 = $this->prepaidConfiguration;
        }
        if (isset($this->previousBillingAt)) {
            $json['previous_billing_at']                   =
                DateTimeHelper::toRfc3339DateTime(
                    $this->previousBillingAt
                );
        }
        if (isset($this->importMrr)) {
            $json['import_mrr']                            = $this->importMrr;
        }
        if (isset($this->canceledAt)) {
            $json['canceled_at']                           = DateTimeHelper::toRfc3339DateTime($this->canceledAt);
        }
        if (isset($this->activatedAt)) {
            $json['activated_at']                          = DateTimeHelper::toRfc3339DateTime($this->activatedAt);
        }
        if (isset($this->agreementAcceptance)) {
            $json['agreement_acceptance']                  = $this->agreementAcceptance;
        }
        if (isset($this->achAgreement)) {
            $json['ach_agreement']                         = $this->achAgreement;
        }
        if (!empty($this->dunningCommunicationDelayEnabled)) {
            $json['dunning_communication_delay_enabled']   = $this->dunningCommunicationDelayEnabled['value'];
        }
        if (!empty($this->dunningCommunicationDelayTimeZone)) {
            $json['dunning_communication_delay_time_zone'] = $this->dunningCommunicationDelayTimeZone['value'];
        }
        if (isset($this->skipBillingManifestTaxes)) {
            $json['skip_billing_manifest_taxes']           = $this->skipBillingManifestTaxes;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
