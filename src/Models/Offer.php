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

class Offer implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $siteId;

    /**
     * @var int|null
     */
    private $productFamilyId;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var int|null
     */
    private $productRevisableNumber;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var array
     */
    private $archivedAt = [];

    /**
     * @var OfferItem[]|null
     */
    private $offerItems;

    /**
     * @var OfferDiscount[]|null
     */
    private $offerDiscounts;

    /**
     * @var string|null
     */
    private $productFamilyName;

    /**
     * @var string|null
     */
    private $productName;

    /**
     * @var string|null
     */
    private $productPricePointName;

    /**
     * @var int|null
     */
    private $productPriceInCents;

    /**
     * @var OfferSignupPage[]|null
     */
    private $offerSignupPages;

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
     * Returns Site Id.
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * Sets Site Id.
     *
     * @maps site_id
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * Returns Product Family Id.
     */
    public function getProductFamilyId(): ?int
    {
        return $this->productFamilyId;
    }

    /**
     * Sets Product Family Id.
     *
     * @maps product_family_id
     */
    public function setProductFamilyId(?int $productFamilyId): void
    {
        $this->productFamilyId = $productFamilyId;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
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
     * Returns Product Revisable Number.
     */
    public function getProductRevisableNumber(): ?int
    {
        return $this->productRevisableNumber;
    }

    /**
     * Sets Product Revisable Number.
     *
     * @maps product_revisable_number
     */
    public function setProductRevisableNumber(?int $productRevisableNumber): void
    {
        $this->productRevisableNumber = $productRevisableNumber;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Description.
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
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
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
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Archived At.
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
     */
    public function unsetArchivedAt(): void
    {
        $this->archivedAt = [];
    }

    /**
     * Returns Offer Items.
     *
     * @return OfferItem[]|null
     */
    public function getOfferItems(): ?array
    {
        return $this->offerItems;
    }

    /**
     * Sets Offer Items.
     *
     * @maps offer_items
     *
     * @param OfferItem[]|null $offerItems
     */
    public function setOfferItems(?array $offerItems): void
    {
        $this->offerItems = $offerItems;
    }

    /**
     * Returns Offer Discounts.
     *
     * @return OfferDiscount[]|null
     */
    public function getOfferDiscounts(): ?array
    {
        return $this->offerDiscounts;
    }

    /**
     * Sets Offer Discounts.
     *
     * @maps offer_discounts
     *
     * @param OfferDiscount[]|null $offerDiscounts
     */
    public function setOfferDiscounts(?array $offerDiscounts): void
    {
        $this->offerDiscounts = $offerDiscounts;
    }

    /**
     * Returns Product Family Name.
     */
    public function getProductFamilyName(): ?string
    {
        return $this->productFamilyName;
    }

    /**
     * Sets Product Family Name.
     *
     * @maps product_family_name
     */
    public function setProductFamilyName(?string $productFamilyName): void
    {
        $this->productFamilyName = $productFamilyName;
    }

    /**
     * Returns Product Name.
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * Sets Product Name.
     *
     * @maps product_name
     */
    public function setProductName(?string $productName): void
    {
        $this->productName = $productName;
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
     * Returns Product Price in Cents.
     */
    public function getProductPriceInCents(): ?int
    {
        return $this->productPriceInCents;
    }

    /**
     * Sets Product Price in Cents.
     *
     * @maps product_price_in_cents
     */
    public function setProductPriceInCents(?int $productPriceInCents): void
    {
        $this->productPriceInCents = $productPriceInCents;
    }

    /**
     * Returns Offer Signup Pages.
     *
     * @return OfferSignupPage[]|null
     */
    public function getOfferSignupPages(): ?array
    {
        return $this->offerSignupPages;
    }

    /**
     * Sets Offer Signup Pages.
     *
     * @maps offer_signup_pages
     *
     * @param OfferSignupPage[]|null $offerSignupPages
     */
    public function setOfferSignupPages(?array $offerSignupPages): void
    {
        $this->offerSignupPages = $offerSignupPages;
    }

    /**
     * Converts the Offer object to a human-readable string representation.
     *
     * @return string The string representation of the Offer object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Offer',
            [
                'id' => $this->id,
                'siteId' => $this->siteId,
                'productFamilyId' => $this->productFamilyId,
                'productId' => $this->productId,
                'productPricePointId' => $this->productPricePointId,
                'productRevisableNumber' => $this->productRevisableNumber,
                'name' => $this->name,
                'handle' => $this->handle,
                'description' => $this->getDescription(),
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt,
                'archivedAt' => $this->getArchivedAt(),
                'offerItems' => $this->offerItems,
                'offerDiscounts' => $this->offerDiscounts,
                'productFamilyName' => $this->productFamilyName,
                'productName' => $this->productName,
                'productPricePointName' => $this->productPricePointName,
                'productPriceInCents' => $this->productPriceInCents,
                'offerSignupPages' => $this->offerSignupPages,
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
        if (isset($this->id)) {
            $json['id']                       = $this->id;
        }
        if (isset($this->siteId)) {
            $json['site_id']                  = $this->siteId;
        }
        if (isset($this->productFamilyId)) {
            $json['product_family_id']        = $this->productFamilyId;
        }
        if (isset($this->productId)) {
            $json['product_id']               = $this->productId;
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id']   = $this->productPricePointId;
        }
        if (isset($this->productRevisableNumber)) {
            $json['product_revisable_number'] = $this->productRevisableNumber;
        }
        if (isset($this->name)) {
            $json['name']                     = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                   = $this->handle;
        }
        if (!empty($this->description)) {
            $json['description']              = $this->description['value'];
        }
        if (isset($this->createdAt)) {
            $json['created_at']               = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']               = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (!empty($this->archivedAt)) {
            $json['archived_at']              = DateTimeHelper::toRfc3339DateTime($this->archivedAt['value']);
        }
        if (isset($this->offerItems)) {
            $json['offer_items']              = $this->offerItems;
        }
        if (isset($this->offerDiscounts)) {
            $json['offer_discounts']          = $this->offerDiscounts;
        }
        if (isset($this->productFamilyName)) {
            $json['product_family_name']      = $this->productFamilyName;
        }
        if (isset($this->productName)) {
            $json['product_name']             = $this->productName;
        }
        if (isset($this->productPricePointName)) {
            $json['product_price_point_name'] = $this->productPricePointName;
        }
        if (isset($this->productPriceInCents)) {
            $json['product_price_in_cents']   = $this->productPriceInCents;
        }
        if (isset($this->offerSignupPages)) {
            $json['offer_signup_pages']       = $this->offerSignupPages;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
