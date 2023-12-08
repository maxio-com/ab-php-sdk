<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Offer;
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
     * Initializes a new offer Builder object.
     */
    public static function init(): self
    {
        return new self(new Offer());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets site id field.
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
    }

    /**
     * Sets product family id field.
     */
    public function productFamilyId(?int $value): self
    {
        $this->instance->setProductFamilyId($value);
        return $this;
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets product revisable number field.
     */
    public function productRevisableNumber(?int $value): self
    {
        $this->instance->setProductRevisableNumber($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets handle field.
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets description field.
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
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?string $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets archived at field.
     */
    public function archivedAt(?string $value): self
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
     */
    public function offerItems(?array $value): self
    {
        $this->instance->setOfferItems($value);
        return $this;
    }

    /**
     * Sets offer discounts field.
     */
    public function offerDiscounts(?array $value): self
    {
        $this->instance->setOfferDiscounts($value);
        return $this;
    }

    /**
     * Sets product family name field.
     */
    public function productFamilyName(?string $value): self
    {
        $this->instance->setProductFamilyName($value);
        return $this;
    }

    /**
     * Sets product name field.
     */
    public function productName(?string $value): self
    {
        $this->instance->setProductName($value);
        return $this;
    }

    /**
     * Sets product price point name field.
     */
    public function productPricePointName(?string $value): self
    {
        $this->instance->setProductPricePointName($value);
        return $this;
    }

    /**
     * Sets product price in cents field.
     */
    public function productPriceInCents(?int $value): self
    {
        $this->instance->setProductPriceInCents($value);
        return $this;
    }

    /**
     * Sets offer signup pages field.
     */
    public function offerSignupPages(?array $value): self
    {
        $this->instance->setOfferSignupPages($value);
        return $this;
    }

    /**
     * Initializes a new offer object.
     */
    public function build(): Offer
    {
        return CoreHelper::clone($this->instance);
    }
}
