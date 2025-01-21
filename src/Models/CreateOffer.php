<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class CreateOffer implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $handle;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var int
     */
    private $productId;

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var CreateOfferComponent[]|null
     */
    private $components;

    /**
     * @var string[]|null
     */
    private $coupons;

    /**
     * @param string $name
     * @param string $handle
     * @param int $productId
     */
    public function __construct(string $name, string $handle, int $productId)
    {
        $this->name = $name;
        $this->handle = $handle;
        $this->productId = $productId;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     */
    public function getHandle(): string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     *
     * @required
     * @maps handle
     */
    public function setHandle(string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @required
     * @maps product_id
     */
    public function setProductId(int $productId): void
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
     * Returns Components.
     *
     * @return CreateOfferComponent[]|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Sets Components.
     *
     * @maps components
     *
     * @param CreateOfferComponent[]|null $components
     */
    public function setComponents(?array $components): void
    {
        $this->components = $components;
    }

    /**
     * Returns Coupons.
     *
     * @return string[]|null
     */
    public function getCoupons(): ?array
    {
        return $this->coupons;
    }

    /**
     * Sets Coupons.
     *
     * @maps coupons
     *
     * @param string[]|null $coupons
     */
    public function setCoupons(?array $coupons): void
    {
        $this->coupons = $coupons;
    }

    /**
     * Converts the CreateOffer object to a human-readable string representation.
     *
     * @return string The string representation of the CreateOffer object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateOffer',
            [
                'name' => $this->name,
                'handle' => $this->handle,
                'description' => $this->description,
                'productId' => $this->productId,
                'productPricePointId' => $this->productPricePointId,
                'components' => $this->components,
                'coupons' => $this->coupons,
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
        $json['name']                       = $this->name;
        $json['handle']                     = $this->handle;
        if (isset($this->description)) {
            $json['description']            = $this->description;
        }
        $json['product_id']                 = $this->productId;
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id'] = $this->productPricePointId;
        }
        if (isset($this->components)) {
            $json['components']             = $this->components;
        }
        if (isset($this->coupons)) {
            $json['coupons']                = $this->coupons;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
