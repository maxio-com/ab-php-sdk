<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Offer;
use AdvancedBillingLib\Models\OfferDiscount;
use AdvancedBillingLib\Models\OfferItem;
use AdvancedBillingLib\Models\OfferSignupPage;
use Core\Utils\CoreHelper;

/**
 * Builder for model Offer
 *
 * @see Offer
 */
class OfferBuilder
{
    /**
     * @var Offer
     */
    private $instance;

    private function __construct(Offer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Offer Builder object.
     */
    public static function init(): self
    {
        return new self(new Offer());
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
     * Sets site id field.
     *
     * @param int|null $value
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
    }

    /**
     * Sets product family id field.
     *
     * @param int|null $value
     */
    public function productFamilyId(?int $value): self
    {
        $this->instance->setProductFamilyId($value);
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
     * Sets product revisable number field.
     *
     * @param int|null $value
     */
    public function productRevisableNumber(?int $value): self
    {
        $this->instance->setProductRevisableNumber($value);
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
     * Sets offer items field.
     *
     * @param OfferItem[]|null $value
     */
    public function offerItems(?array $value): self
    {
        $this->instance->setOfferItems($value);
        return $this;
    }

    /**
     * Sets offer discounts field.
     *
     * @param OfferDiscount[]|null $value
     */
    public function offerDiscounts(?array $value): self
    {
        $this->instance->setOfferDiscounts($value);
        return $this;
    }

    /**
     * Sets product family name field.
     *
     * @param string|null $value
     */
    public function productFamilyName(?string $value): self
    {
        $this->instance->setProductFamilyName($value);
        return $this;
    }

    /**
     * Sets product name field.
     *
     * @param string|null $value
     */
    public function productName(?string $value): self
    {
        $this->instance->setProductName($value);
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
     * Sets product price in cents field.
     *
     * @param int|null $value
     */
    public function productPriceInCents(?int $value): self
    {
        $this->instance->setProductPriceInCents($value);
        return $this;
    }

    /**
     * Sets offer signup pages field.
     *
     * @param OfferSignupPage[]|null $value
     */
    public function offerSignupPages(?array $value): self
    {
        $this->instance->setOfferSignupPages($value);
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
     * Initializes a new Offer object.
     */
    public function build(): Offer
    {
        return CoreHelper::clone($this->instance);
    }
}
