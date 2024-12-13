<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Models\PublicSignupPage;
use Core\Utils\CoreHelper;

/**
 * Builder for model Product
 *
 * @see Product
 */
class ProductBuilder
{
    /**
     * @var Product
     */
    private $instance;

    private function __construct(Product $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Product Builder object.
     */
    public static function init(): self
    {
        return new self(new Product());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets handle field.
     *
     * @param string|null $value
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Unsets handle field.
     */
    public function unsetHandle(): self
    {
        $this->instance->unsetHandle();
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets accounting code field.
     *
     * @param string|null $value
     */
    public function accountingCode(?string $value): self
    {
        $this->instance->setAccountingCode($value);
        return $this;
    }

    /**
     * Unsets accounting code field.
     */
    public function unsetAccountingCode(): self
    {
        $this->instance->unsetAccountingCode();
        return $this;
    }

    /**
     * Sets request credit card field.
     *
     * @param bool|null $value
     */
    public function requestCreditCard(?bool $value): self
    {
        $this->instance->setRequestCreditCard($value);
        return $this;
    }

    /**
     * Sets expiration interval field.
     *
     * @param int|null $value
     */
    public function expirationInterval(?int $value): self
    {
        $this->instance->setExpirationInterval($value);
        return $this;
    }

    /**
     * Unsets expiration interval field.
     */
    public function unsetExpirationInterval(): self
    {
        $this->instance->unsetExpirationInterval();
        return $this;
    }

    /**
     * Sets expiration interval unit field.
     *
     * @param string|null $value
     */
    public function expirationIntervalUnit(?string $value): self
    {
        $this->instance->setExpirationIntervalUnit($value);
        return $this;
    }

    /**
     * Unsets expiration interval unit field.
     */
    public function unsetExpirationIntervalUnit(): self
    {
        $this->instance->unsetExpirationIntervalUnit();
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets price in cents field.
     *
     * @param int|null $value
     */
    public function priceInCents(?int $value): self
    {
        $this->instance->setPriceInCents($value);
        return $this;
    }

    /**
     * Sets interval field.
     *
     * @param int|null $value
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets interval unit field.
     *
     * @param string|null $value
     */
    public function intervalUnit(?string $value): self
    {
        $this->instance->setIntervalUnit($value);
        return $this;
    }

    /**
     * Sets initial charge in cents field.
     *
     * @param int|null $value
     */
    public function initialChargeInCents(?int $value): self
    {
        $this->instance->setInitialChargeInCents($value);
        return $this;
    }

    /**
     * Unsets initial charge in cents field.
     */
    public function unsetInitialChargeInCents(): self
    {
        $this->instance->unsetInitialChargeInCents();
        return $this;
    }

    /**
     * Sets trial price in cents field.
     *
     * @param int|null $value
     */
    public function trialPriceInCents(?int $value): self
    {
        $this->instance->setTrialPriceInCents($value);
        return $this;
    }

    /**
     * Unsets trial price in cents field.
     */
    public function unsetTrialPriceInCents(): self
    {
        $this->instance->unsetTrialPriceInCents();
        return $this;
    }

    /**
     * Sets trial interval field.
     *
     * @param int|null $value
     */
    public function trialInterval(?int $value): self
    {
        $this->instance->setTrialInterval($value);
        return $this;
    }

    /**
     * Unsets trial interval field.
     */
    public function unsetTrialInterval(): self
    {
        $this->instance->unsetTrialInterval();
        return $this;
    }

    /**
     * Sets trial interval unit field.
     *
     * @param string|null $value
     */
    public function trialIntervalUnit(?string $value): self
    {
        $this->instance->setTrialIntervalUnit($value);
        return $this;
    }

    /**
     * Unsets trial interval unit field.
     */
    public function unsetTrialIntervalUnit(): self
    {
        $this->instance->unsetTrialIntervalUnit();
        return $this;
    }

    /**
     * Sets archived at field.
     *
     * @param \DateTime|null $value
     */
    public function archivedAt(?\DateTime $value): self
    {
        $this->instance->setArchivedAt($value);
        return $this;
    }

    /**
     * Unsets archived at field.
     */
    public function unsetArchivedAt(): self
    {
        $this->instance->unsetArchivedAt();
        return $this;
    }

    /**
     * Sets require credit card field.
     *
     * @param bool|null $value
     */
    public function requireCreditCard(?bool $value): self
    {
        $this->instance->setRequireCreditCard($value);
        return $this;
    }

    /**
     * Sets return params field.
     *
     * @param string|null $value
     */
    public function returnParams(?string $value): self
    {
        $this->instance->setReturnParams($value);
        return $this;
    }

    /**
     * Unsets return params field.
     */
    public function unsetReturnParams(): self
    {
        $this->instance->unsetReturnParams();
        return $this;
    }

    /**
     * Sets taxable field.
     *
     * @param bool|null $value
     */
    public function taxable(?bool $value): self
    {
        $this->instance->setTaxable($value);
        return $this;
    }

    /**
     * Sets update return url field.
     *
     * @param string|null $value
     */
    public function updateReturnUrl(?string $value): self
    {
        $this->instance->setUpdateReturnUrl($value);
        return $this;
    }

    /**
     * Unsets update return url field.
     */
    public function unsetUpdateReturnUrl(): self
    {
        $this->instance->unsetUpdateReturnUrl();
        return $this;
    }

    /**
     * Sets initial charge after trial field.
     *
     * @param bool|null $value
     */
    public function initialChargeAfterTrial(?bool $value): self
    {
        $this->instance->setInitialChargeAfterTrial($value);
        return $this;
    }

    /**
     * Unsets initial charge after trial field.
     */
    public function unsetInitialChargeAfterTrial(): self
    {
        $this->instance->unsetInitialChargeAfterTrial();
        return $this;
    }

    /**
     * Sets version number field.
     *
     * @param int|null $value
     */
    public function versionNumber(?int $value): self
    {
        $this->instance->setVersionNumber($value);
        return $this;
    }

    /**
     * Sets update return params field.
     *
     * @param string|null $value
     */
    public function updateReturnParams(?string $value): self
    {
        $this->instance->setUpdateReturnParams($value);
        return $this;
    }

    /**
     * Unsets update return params field.
     */
    public function unsetUpdateReturnParams(): self
    {
        $this->instance->unsetUpdateReturnParams();
        return $this;
    }

    /**
     * Sets product family field.
     *
     * @param ProductFamily|null $value
     */
    public function productFamily(?ProductFamily $value): self
    {
        $this->instance->setProductFamily($value);
        return $this;
    }

    /**
     * Sets public signup pages field.
     *
     * @param PublicSignupPage[]|null $value
     */
    public function publicSignupPages(?array $value): self
    {
        $this->instance->setPublicSignupPages($value);
        return $this;
    }

    /**
     * Sets product price point name field.
     *
     * @param string|null $value
     */
    public function productPricePointName(?string $value): self
    {
        $this->instance->setProductPricePointName($value);
        return $this;
    }

    /**
     * Sets request billing address field.
     *
     * @param bool|null $value
     */
    public function requestBillingAddress(?bool $value): self
    {
        $this->instance->setRequestBillingAddress($value);
        return $this;
    }

    /**
     * Sets require billing address field.
     *
     * @param bool|null $value
     */
    public function requireBillingAddress(?bool $value): self
    {
        $this->instance->setRequireBillingAddress($value);
        return $this;
    }

    /**
     * Sets require shipping address field.
     *
     * @param bool|null $value
     */
    public function requireShippingAddress(?bool $value): self
    {
        $this->instance->setRequireShippingAddress($value);
        return $this;
    }

    /**
     * Sets tax code field.
     *
     * @param string|null $value
     */
    public function taxCode(?string $value): self
    {
        $this->instance->setTaxCode($value);
        return $this;
    }

    /**
     * Unsets tax code field.
     */
    public function unsetTaxCode(): self
    {
        $this->instance->unsetTaxCode();
        return $this;
    }

    /**
     * Sets default product price point id field.
     *
     * @param int|null $value
     */
    public function defaultProductPricePointId(?int $value): self
    {
        $this->instance->setDefaultProductPricePointId($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     *
     * @param bool|null $value
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
        return $this;
    }

    /**
     * Unsets use site exchange rate field.
     */
    public function unsetUseSiteExchangeRate(): self
    {
        $this->instance->unsetUseSiteExchangeRate();
        return $this;
    }

    /**
     * Sets item category field.
     *
     * @param string|null $value
     */
    public function itemCategory(?string $value): self
    {
        $this->instance->setItemCategory($value);
        return $this;
    }

    /**
     * Unsets item category field.
     */
    public function unsetItemCategory(): self
    {
        $this->instance->unsetItemCategory();
        return $this;
    }

    /**
     * Sets product price point id field.
     *
     * @param int|null $value
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets product price point handle field.
     *
     * @param string|null $value
     */
    public function productPricePointHandle(?string $value): self
    {
        $this->instance->setProductPricePointHandle($value);
        return $this;
    }

    /**
     * Unsets product price point handle field.
     */
    public function unsetProductPricePointHandle(): self
    {
        $this->instance->unsetProductPricePointHandle();
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Product object.
     */
    public function build(): Product
    {
        return CoreHelper::clone($this->instance);
    }
}
