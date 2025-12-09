<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CurrencyPrice;
use AdvancedBillingLib\Models\ProductPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProductPricePoint
 *
 * @see ProductPricePoint
 */
class ProductPricePointBuilder
{
    /**
     * @var ProductPricePoint
     */
    private $instance;

    private function __construct(ProductPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Product Price Point Builder object.
     */
    public static function init(): self
    {
        return new self(new ProductPricePoint());
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
     * Sets trial type field.
     *
     * @param string|null $value
     */
    public function trialType(?string $value): self
    {
        $this->instance->setTrialType($value);
        return $this;
    }

    /**
     * Unsets trial type field.
     */
    public function unsetTrialType(): self
    {
        $this->instance->unsetTrialType();
        return $this;
    }

    /**
     * Sets introductory offer field.
     *
     * @param bool|null $value
     */
    public function introductoryOffer(?bool $value): self
    {
        $this->instance->setIntroductoryOffer($value);
        return $this;
    }

    /**
     * Unsets introductory offer field.
     */
    public function unsetIntroductoryOffer(): self
    {
        $this->instance->unsetIntroductoryOffer();
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
     * Sets product id field.
     *
     * @param int|null $value
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
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
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets tax included field.
     *
     * @param bool|null $value
     */
    public function taxIncluded(?bool $value): self
    {
        $this->instance->setTaxIncluded($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     *
     * @param int|null $value
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Unsets subscription id field.
     */
    public function unsetSubscriptionId(): self
    {
        $this->instance->unsetSubscriptionId();
        return $this;
    }

    /**
     * Sets currency prices field.
     *
     * @param CurrencyPrice[]|null $value
     */
    public function currencyPrices(?array $value): self
    {
        $this->instance->setCurrencyPrices($value);
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
     * Initializes a new Product Price Point object.
     */
    public function build(): ProductPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
