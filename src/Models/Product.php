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

class Product implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $handle = [];

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array
     */
    private $accountingCode = [];

    /**
     * @var bool|null
     */
    private $requestCreditCard;

    /**
     * @var array
     */
    private $expirationInterval = [];

    /**
     * @var array
     */
    private $expirationIntervalUnit = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var int|null
     */
    private $priceInCents;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalUnit;

    /**
     * @var array
     */
    private $initialChargeInCents = [];

    /**
     * @var array
     */
    private $trialPriceInCents = [];

    /**
     * @var array
     */
    private $trialInterval = [];

    /**
     * @var array
     */
    private $trialIntervalUnit = [];

    /**
     * @var array
     */
    private $archivedAt = [];

    /**
     * @var bool|null
     */
    private $requireCreditCard;

    /**
     * @var array
     */
    private $returnParams = [];

    /**
     * @var bool|null
     */
    private $taxable;

    /**
     * @var array
     */
    private $updateReturnUrl = [];

    /**
     * @var bool|null
     */
    private $initialChargeAfterTrial;

    /**
     * @var int|null
     */
    private $versionNumber;

    /**
     * @var array
     */
    private $updateReturnParams = [];

    /**
     * @var ProductFamily|null
     */
    private $productFamily;

    /**
     * @var PublicSignupPage[]|null
     */
    private $publicSignupPages;

    /**
     * @var string|null
     */
    private $productPricePointName;

    /**
     * @var bool|null
     */
    private $requestBillingAddress;

    /**
     * @var bool|null
     */
    private $requireBillingAddress;

    /**
     * @var bool|null
     */
    private $requireShippingAddress;

    /**
     * @var array
     */
    private $taxCode = [];

    /**
     * @var int|null
     */
    private $defaultProductPricePointId;

    /**
     * @var array
     */
    private $useSiteExchangeRate = [];

    /**
     * @var array
     */
    private $itemCategory = [];

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var array
     */
    private $productPricePointHandle = [];

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     * The product name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The product name
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     * The product API handle
     */
    public function getHandle(): ?string
    {
        if (count($this->handle) == 0) {
            return null;
        }
        return $this->handle['value'];
    }

    /**
     * Sets Handle.
     * The product API handle
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle['value'] = $handle;
    }

    /**
     * Unsets Handle.
     * The product API handle
     */
    public function unsetHandle(): void
    {
        $this->handle = [];
    }

    /**
     * Returns Description.
     * The product description
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     * The product description
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * The product description
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Accounting Code.
     * E.g. Internal ID or SKU Number
     */
    public function getAccountingCode(): ?string
    {
        if (count($this->accountingCode) == 0) {
            return null;
        }
        return $this->accountingCode['value'];
    }

    /**
     * Sets Accounting Code.
     * E.g. Internal ID or SKU Number
     *
     * @maps accounting_code
     */
    public function setAccountingCode(?string $accountingCode): void
    {
        $this->accountingCode['value'] = $accountingCode;
    }

    /**
     * Unsets Accounting Code.
     * E.g. Internal ID or SKU Number
     */
    public function unsetAccountingCode(): void
    {
        $this->accountingCode = [];
    }

    /**
     * Returns Request Credit Card.
     * Deprecated value that can be ignored unless you have legacy hosted pages. For Public Signup Page
     * users, please read this attribute from under the signup page.
     */
    public function getRequestCreditCard(): ?bool
    {
        return $this->requestCreditCard;
    }

    /**
     * Sets Request Credit Card.
     * Deprecated value that can be ignored unless you have legacy hosted pages. For Public Signup Page
     * users, please read this attribute from under the signup page.
     *
     * @maps request_credit_card
     */
    public function setRequestCreditCard(?bool $requestCreditCard): void
    {
        $this->requestCreditCard = $requestCreditCard;
    }

    /**
     * Returns Expiration Interval.
     * A numerical interval for the length a subscription to this product will run before it expires. See
     * the description of interval for a description of how this value is coupled with an interval unit to
     * calculate the full interval
     */
    public function getExpirationInterval(): ?int
    {
        if (count($this->expirationInterval) == 0) {
            return null;
        }
        return $this->expirationInterval['value'];
    }

    /**
     * Sets Expiration Interval.
     * A numerical interval for the length a subscription to this product will run before it expires. See
     * the description of interval for a description of how this value is coupled with an interval unit to
     * calculate the full interval
     *
     * @maps expiration_interval
     */
    public function setExpirationInterval(?int $expirationInterval): void
    {
        $this->expirationInterval['value'] = $expirationInterval;
    }

    /**
     * Unsets Expiration Interval.
     * A numerical interval for the length a subscription to this product will run before it expires. See
     * the description of interval for a description of how this value is coupled with an interval unit to
     * calculate the full interval
     */
    public function unsetExpirationInterval(): void
    {
        $this->expirationInterval = [];
    }

    /**
     * Returns Expiration Interval Unit.
     * A string representing the expiration interval unit for this product, either month or day
     */
    public function getExpirationIntervalUnit(): ?string
    {
        if (count($this->expirationIntervalUnit) == 0) {
            return null;
        }
        return $this->expirationIntervalUnit['value'];
    }

    /**
     * Sets Expiration Interval Unit.
     * A string representing the expiration interval unit for this product, either month or day
     *
     * @maps expiration_interval_unit
     * @mapsBy anyOf(oneOf(ExtendedIntervalUnit),null)
     * @factory \AdvancedBillingLib\Models\ExtendedIntervalUnit::checkValue ExtendedIntervalUnit
     */
    public function setExpirationIntervalUnit(?string $expirationIntervalUnit): void
    {
        $this->expirationIntervalUnit['value'] = $expirationIntervalUnit;
    }

    /**
     * Unsets Expiration Interval Unit.
     * A string representing the expiration interval unit for this product, either month or day
     */
    public function unsetExpirationIntervalUnit(): void
    {
        $this->expirationIntervalUnit = [];
    }

    /**
     * Returns Created At.
     * Timestamp indicating when this product was created
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Timestamp indicating when this product was created
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * Timestamp indicating when this product was last updated
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * Timestamp indicating when this product was last updated
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Price in Cents.
     * The product price, in integer cents
     */
    public function getPriceInCents(): ?int
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     * The product price, in integer cents
     *
     * @maps price_in_cents
     */
    public function setPriceInCents(?int $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    /**
     * Returns Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this product would renew every 30 days
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this product would renew every 30 days
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * A string representing the interval unit for this product, either month or day
     */
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     * A string representing the interval unit for this product, either month or day
     *
     * @maps interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setIntervalUnit(?string $intervalUnit): void
    {
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Initial Charge in Cents.
     * The up front charge you have specified.
     */
    public function getInitialChargeInCents(): ?int
    {
        if (count($this->initialChargeInCents) == 0) {
            return null;
        }
        return $this->initialChargeInCents['value'];
    }

    /**
     * Sets Initial Charge in Cents.
     * The up front charge you have specified.
     *
     * @maps initial_charge_in_cents
     */
    public function setInitialChargeInCents(?int $initialChargeInCents): void
    {
        $this->initialChargeInCents['value'] = $initialChargeInCents;
    }

    /**
     * Unsets Initial Charge in Cents.
     * The up front charge you have specified.
     */
    public function unsetInitialChargeInCents(): void
    {
        $this->initialChargeInCents = [];
    }

    /**
     * Returns Trial Price in Cents.
     * The price of the trial period for a subscription to this product, in integer cents.
     */
    public function getTrialPriceInCents(): ?int
    {
        if (count($this->trialPriceInCents) == 0) {
            return null;
        }
        return $this->trialPriceInCents['value'];
    }

    /**
     * Sets Trial Price in Cents.
     * The price of the trial period for a subscription to this product, in integer cents.
     *
     * @maps trial_price_in_cents
     */
    public function setTrialPriceInCents(?int $trialPriceInCents): void
    {
        $this->trialPriceInCents['value'] = $trialPriceInCents;
    }

    /**
     * Unsets Trial Price in Cents.
     * The price of the trial period for a subscription to this product, in integer cents.
     */
    public function unsetTrialPriceInCents(): void
    {
        $this->trialPriceInCents = [];
    }

    /**
     * Returns Trial Interval.
     * A numerical interval for the length of the trial period of a subscription to this product. See the
     * description of interval for a description of how this value is coupled with an interval unit to
     * calculate the full interval
     */
    public function getTrialInterval(): ?int
    {
        if (count($this->trialInterval) == 0) {
            return null;
        }
        return $this->trialInterval['value'];
    }

    /**
     * Sets Trial Interval.
     * A numerical interval for the length of the trial period of a subscription to this product. See the
     * description of interval for a description of how this value is coupled with an interval unit to
     * calculate the full interval
     *
     * @maps trial_interval
     */
    public function setTrialInterval(?int $trialInterval): void
    {
        $this->trialInterval['value'] = $trialInterval;
    }

    /**
     * Unsets Trial Interval.
     * A numerical interval for the length of the trial period of a subscription to this product. See the
     * description of interval for a description of how this value is coupled with an interval unit to
     * calculate the full interval
     */
    public function unsetTrialInterval(): void
    {
        $this->trialInterval = [];
    }

    /**
     * Returns Trial Interval Unit.
     * A string representing the trial interval unit for this product, either month or day
     */
    public function getTrialIntervalUnit(): ?string
    {
        if (count($this->trialIntervalUnit) == 0) {
            return null;
        }
        return $this->trialIntervalUnit['value'];
    }

    /**
     * Sets Trial Interval Unit.
     * A string representing the trial interval unit for this product, either month or day
     *
     * @maps trial_interval_unit
     * @mapsBy anyOf(oneOf(IntervalUnit),null)
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue IntervalUnit
     */
    public function setTrialIntervalUnit(?string $trialIntervalUnit): void
    {
        $this->trialIntervalUnit['value'] = $trialIntervalUnit;
    }

    /**
     * Unsets Trial Interval Unit.
     * A string representing the trial interval unit for this product, either month or day
     */
    public function unsetTrialIntervalUnit(): void
    {
        $this->trialIntervalUnit = [];
    }

    /**
     * Returns Archived At.
     * Timestamp indicating when this product was archived
     */
    public function getArchivedAt(): ?\DateTime
    {
        if (count($this->archivedAt) == 0) {
            return null;
        }
        return $this->archivedAt['value'];
    }

    /**
     * Sets Archived At.
     * Timestamp indicating when this product was archived
     *
     * @maps archived_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setArchivedAt(?\DateTime $archivedAt): void
    {
        $this->archivedAt['value'] = $archivedAt;
    }

    /**
     * Unsets Archived At.
     * Timestamp indicating when this product was archived
     */
    public function unsetArchivedAt(): void
    {
        $this->archivedAt = [];
    }

    /**
     * Returns Require Credit Card.
     * Boolean that controls whether a payment profile is required to be entered for customers wishing to
     * sign up on this product.
     */
    public function getRequireCreditCard(): ?bool
    {
        return $this->requireCreditCard;
    }

    /**
     * Sets Require Credit Card.
     * Boolean that controls whether a payment profile is required to be entered for customers wishing to
     * sign up on this product.
     *
     * @maps require_credit_card
     */
    public function setRequireCreditCard(?bool $requireCreditCard): void
    {
        $this->requireCreditCard = $requireCreditCard;
    }

    /**
     * Returns Return Params.
     */
    public function getReturnParams(): ?string
    {
        if (count($this->returnParams) == 0) {
            return null;
        }
        return $this->returnParams['value'];
    }

    /**
     * Sets Return Params.
     *
     * @maps return_params
     */
    public function setReturnParams(?string $returnParams): void
    {
        $this->returnParams['value'] = $returnParams;
    }

    /**
     * Unsets Return Params.
     */
    public function unsetReturnParams(): void
    {
        $this->returnParams = [];
    }

    /**
     * Returns Taxable.
     */
    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    /**
     * Sets Taxable.
     *
     * @maps taxable
     */
    public function setTaxable(?bool $taxable): void
    {
        $this->taxable = $taxable;
    }

    /**
     * Returns Update Return Url.
     * The url to which a customer will be returned after a successful account update
     */
    public function getUpdateReturnUrl(): ?string
    {
        if (count($this->updateReturnUrl) == 0) {
            return null;
        }
        return $this->updateReturnUrl['value'];
    }

    /**
     * Sets Update Return Url.
     * The url to which a customer will be returned after a successful account update
     *
     * @maps update_return_url
     */
    public function setUpdateReturnUrl(?string $updateReturnUrl): void
    {
        $this->updateReturnUrl['value'] = $updateReturnUrl;
    }

    /**
     * Unsets Update Return Url.
     * The url to which a customer will be returned after a successful account update
     */
    public function unsetUpdateReturnUrl(): void
    {
        $this->updateReturnUrl = [];
    }

    /**
     * Returns Initial Charge After Trial.
     */
    public function getInitialChargeAfterTrial(): ?bool
    {
        return $this->initialChargeAfterTrial;
    }

    /**
     * Sets Initial Charge After Trial.
     *
     * @maps initial_charge_after_trial
     */
    public function setInitialChargeAfterTrial(?bool $initialChargeAfterTrial): void
    {
        $this->initialChargeAfterTrial = $initialChargeAfterTrial;
    }

    /**
     * Returns Version Number.
     * The version of the product
     */
    public function getVersionNumber(): ?int
    {
        return $this->versionNumber;
    }

    /**
     * Sets Version Number.
     * The version of the product
     *
     * @maps version_number
     */
    public function setVersionNumber(?int $versionNumber): void
    {
        $this->versionNumber = $versionNumber;
    }

    /**
     * Returns Update Return Params.
     * The parameters will append to the url after a successful account update. See [help
     * documentation](https://help.chargify.com/products/product-editing.html#return-parameters-after-
     * account-update)
     */
    public function getUpdateReturnParams(): ?string
    {
        if (count($this->updateReturnParams) == 0) {
            return null;
        }
        return $this->updateReturnParams['value'];
    }

    /**
     * Sets Update Return Params.
     * The parameters will append to the url after a successful account update. See [help
     * documentation](https://help.chargify.com/products/product-editing.html#return-parameters-after-
     * account-update)
     *
     * @maps update_return_params
     */
    public function setUpdateReturnParams(?string $updateReturnParams): void
    {
        $this->updateReturnParams['value'] = $updateReturnParams;
    }

    /**
     * Unsets Update Return Params.
     * The parameters will append to the url after a successful account update. See [help
     * documentation](https://help.chargify.com/products/product-editing.html#return-parameters-after-
     * account-update)
     */
    public function unsetUpdateReturnParams(): void
    {
        $this->updateReturnParams = [];
    }

    /**
     * Returns Product Family.
     */
    public function getProductFamily(): ?ProductFamily
    {
        return $this->productFamily;
    }

    /**
     * Sets Product Family.
     *
     * @maps product_family
     */
    public function setProductFamily(?ProductFamily $productFamily): void
    {
        $this->productFamily = $productFamily;
    }

    /**
     * Returns Public Signup Pages.
     *
     * @return PublicSignupPage[]|null
     */
    public function getPublicSignupPages(): ?array
    {
        return $this->publicSignupPages;
    }

    /**
     * Sets Public Signup Pages.
     *
     * @maps public_signup_pages
     *
     * @param PublicSignupPage[]|null $publicSignupPages
     */
    public function setPublicSignupPages(?array $publicSignupPages): void
    {
        $this->publicSignupPages = $publicSignupPages;
    }

    /**
     * Returns Product Price Point Name.
     */
    public function getProductPricePointName(): ?string
    {
        return $this->productPricePointName;
    }

    /**
     * Sets Product Price Point Name.
     *
     * @maps product_price_point_name
     */
    public function setProductPricePointName(?string $productPricePointName): void
    {
        $this->productPricePointName = $productPricePointName;
    }

    /**
     * Returns Request Billing Address.
     * A boolean indicating whether to request a billing address on any Self-Service Pages that are used by
     * subscribers of this product.
     */
    public function getRequestBillingAddress(): ?bool
    {
        return $this->requestBillingAddress;
    }

    /**
     * Sets Request Billing Address.
     * A boolean indicating whether to request a billing address on any Self-Service Pages that are used by
     * subscribers of this product.
     *
     * @maps request_billing_address
     */
    public function setRequestBillingAddress(?bool $requestBillingAddress): void
    {
        $this->requestBillingAddress = $requestBillingAddress;
    }

    /**
     * Returns Require Billing Address.
     * A boolean indicating whether a billing address is required to add a payment profile, especially at
     * signup.
     */
    public function getRequireBillingAddress(): ?bool
    {
        return $this->requireBillingAddress;
    }

    /**
     * Sets Require Billing Address.
     * A boolean indicating whether a billing address is required to add a payment profile, especially at
     * signup.
     *
     * @maps require_billing_address
     */
    public function setRequireBillingAddress(?bool $requireBillingAddress): void
    {
        $this->requireBillingAddress = $requireBillingAddress;
    }

    /**
     * Returns Require Shipping Address.
     * A boolean indicating whether a shipping address is required for the customer, especially at signup.
     */
    public function getRequireShippingAddress(): ?bool
    {
        return $this->requireShippingAddress;
    }

    /**
     * Sets Require Shipping Address.
     * A boolean indicating whether a shipping address is required for the customer, especially at signup.
     *
     * @maps require_shipping_address
     */
    public function setRequireShippingAddress(?bool $requireShippingAddress): void
    {
        $this->requireShippingAddress = $requireShippingAddress;
    }

    /**
     * Returns Tax Code.
     * A string representing the tax code related to the product type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     */
    public function getTaxCode(): ?string
    {
        if (count($this->taxCode) == 0) {
            return null;
        }
        return $this->taxCode['value'];
    }

    /**
     * Sets Tax Code.
     * A string representing the tax code related to the product type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode['value'] = $taxCode;
    }

    /**
     * Unsets Tax Code.
     * A string representing the tax code related to the product type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     */
    public function unsetTaxCode(): void
    {
        $this->taxCode = [];
    }

    /**
     * Returns Default Product Price Point Id.
     */
    public function getDefaultProductPricePointId(): ?int
    {
        return $this->defaultProductPricePointId;
    }

    /**
     * Sets Default Product Price Point Id.
     *
     * @maps default_product_price_point_id
     */
    public function setDefaultProductPricePointId(?int $defaultProductPricePointId): void
    {
        $this->defaultProductPricePointId = $defaultProductPricePointId;
    }

    /**
     * Returns Use Site Exchange Rate.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        if (count($this->useSiteExchangeRate) == 0) {
            return null;
        }
        return $this->useSiteExchangeRate['value'];
    }

    /**
     * Sets Use Site Exchange Rate.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate['value'] = $useSiteExchangeRate;
    }

    /**
     * Unsets Use Site Exchange Rate.
     */
    public function unsetUseSiteExchangeRate(): void
    {
        $this->useSiteExchangeRate = [];
    }

    /**
     * Returns Item Category.
     * One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other
     */
    public function getItemCategory(): ?string
    {
        if (count($this->itemCategory) == 0) {
            return null;
        }
        return $this->itemCategory['value'];
    }

    /**
     * Sets Item Category.
     * One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other
     *
     * @maps item_category
     */
    public function setItemCategory(?string $itemCategory): void
    {
        $this->itemCategory['value'] = $itemCategory;
    }

    /**
     * Unsets Item Category.
     * One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other
     */
    public function unsetItemCategory(): void
    {
        $this->itemCategory = [];
    }

    /**
     * Returns Product Price Point Id.
     */
    public function getProductPricePointId(): ?int
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Returns Product Price Point Handle.
     */
    public function getProductPricePointHandle(): ?string
    {
        if (count($this->productPricePointHandle) == 0) {
            return null;
        }
        return $this->productPricePointHandle['value'];
    }

    /**
     * Sets Product Price Point Handle.
     *
     * @maps product_price_point_handle
     */
    public function setProductPricePointHandle(?string $productPricePointHandle): void
    {
        $this->productPricePointHandle['value'] = $productPricePointHandle;
    }

    /**
     * Unsets Product Price Point Handle.
     */
    public function unsetProductPricePointHandle(): void
    {
        $this->productPricePointHandle = [];
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
        if (isset($this->id)) {
            $json['id']                             = $this->id;
        }
        if (isset($this->name)) {
            $json['name']                           = $this->name;
        }
        if (!empty($this->handle)) {
            $json['handle']                         = $this->handle['value'];
        }
        if (!empty($this->description)) {
            $json['description']                    = $this->description['value'];
        }
        if (!empty($this->accountingCode)) {
            $json['accounting_code']                = $this->accountingCode['value'];
        }
        if (isset($this->requestCreditCard)) {
            $json['request_credit_card']            = $this->requestCreditCard;
        }
        if (!empty($this->expirationInterval)) {
            $json['expiration_interval']            = $this->expirationInterval['value'];
        }
        if (!empty($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']       =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->expirationIntervalUnit['value'],
                    'anyOf(oneOf(ExtendedIntervalUnit),null)',
                    [
                        '\AdvancedBillingLib\Models\ExtendedIntervalUnit::checkValue ExtendedIntervalUnit'
                    ]
                );
        }
        if (isset($this->createdAt)) {
            $json['created_at']                     = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                     = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (isset($this->priceInCents)) {
            $json['price_in_cents']                 = $this->priceInCents;
        }
        if (isset($this->interval)) {
            $json['interval']                       = $this->interval;
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']                  = IntervalUnit::checkValue($this->intervalUnit);
        }
        if (!empty($this->initialChargeInCents)) {
            $json['initial_charge_in_cents']        = $this->initialChargeInCents['value'];
        }
        if (!empty($this->trialPriceInCents)) {
            $json['trial_price_in_cents']           = $this->trialPriceInCents['value'];
        }
        if (!empty($this->trialInterval)) {
            $json['trial_interval']                 = $this->trialInterval['value'];
        }
        if (!empty($this->trialIntervalUnit)) {
            $json['trial_interval_unit']            =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->trialIntervalUnit['value'],
                    'anyOf(oneOf(IntervalUnit),null)',
                    [
                        '\AdvancedBillingLib\Models\IntervalUnit::checkValue IntervalUnit'
                    ]
                );
        }
        if (!empty($this->archivedAt)) {
            $json['archived_at']                    = DateTimeHelper::toRfc3339DateTime($this->archivedAt['value']);
        }
        if (isset($this->requireCreditCard)) {
            $json['require_credit_card']            = $this->requireCreditCard;
        }
        if (!empty($this->returnParams)) {
            $json['return_params']                  = $this->returnParams['value'];
        }
        if (isset($this->taxable)) {
            $json['taxable']                        = $this->taxable;
        }
        if (!empty($this->updateReturnUrl)) {
            $json['update_return_url']              = $this->updateReturnUrl['value'];
        }
        if (isset($this->initialChargeAfterTrial)) {
            $json['initial_charge_after_trial']     = $this->initialChargeAfterTrial;
        }
        if (isset($this->versionNumber)) {
            $json['version_number']                 = $this->versionNumber;
        }
        if (!empty($this->updateReturnParams)) {
            $json['update_return_params']           = $this->updateReturnParams['value'];
        }
        if (isset($this->productFamily)) {
            $json['product_family']                 = $this->productFamily;
        }
        if (isset($this->publicSignupPages)) {
            $json['public_signup_pages']            = $this->publicSignupPages;
        }
        if (isset($this->productPricePointName)) {
            $json['product_price_point_name']       = $this->productPricePointName;
        }
        if (isset($this->requestBillingAddress)) {
            $json['request_billing_address']        = $this->requestBillingAddress;
        }
        if (isset($this->requireBillingAddress)) {
            $json['require_billing_address']        = $this->requireBillingAddress;
        }
        if (isset($this->requireShippingAddress)) {
            $json['require_shipping_address']       = $this->requireShippingAddress;
        }
        if (!empty($this->taxCode)) {
            $json['tax_code']                       = $this->taxCode['value'];
        }
        if (isset($this->defaultProductPricePointId)) {
            $json['default_product_price_point_id'] = $this->defaultProductPricePointId;
        }
        if (!empty($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']         = $this->useSiteExchangeRate['value'];
        }
        if (!empty($this->itemCategory)) {
            $json['item_category']                  = $this->itemCategory['value'];
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id']         = $this->productPricePointId;
        }
        if (!empty($this->productPricePointHandle)) {
            $json['product_price_point_handle']     = $this->productPricePointHandle['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
