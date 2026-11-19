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

class WalletProduct implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $unitName;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var bool|null
     */
    private $taxable;

    /**
     * @var array
     */
    private $taxCode = [];

    /**
     * @var array
     */
    private $accountingCode = [];

    /**
     * @var array
     */
    private $itemCategory = [];

    /**
     * @var WalletProductPricePointAttributes|null
     */
    private $pricePoint;

    /**
     * @var WalletProductPricePointAttributes[]|null
     */
    private $pricePoints;

    /**
     * @param string $name
     * @param string $unitName
     */
    public function __construct(string $name, string $unitName)
    {
        $this->name = $name;
        $this->unitName = $unitName;
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
     * Returns Unit Name.
     * The name of the unit the Wallet Product's usage is measured in, for example `tokens`.
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }

    /**
     * Sets Unit Name.
     * The name of the unit the Wallet Product's usage is measured in, for example `tokens`.
     *
     * @required
     * @maps unit_name
     */
    public function setUnitName(string $unitName): void
    {
        $this->unitName = $unitName;
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
     * Returns Tax Code.
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
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode['value'] = $taxCode;
    }

    /**
     * Unsets Tax Code.
     */
    public function unsetTaxCode(): void
    {
        $this->taxCode = [];
    }

    /**
     * Returns Accounting Code.
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
     *
     * @maps accounting_code
     */
    public function setAccountingCode(?string $accountingCode): void
    {
        $this->accountingCode['value'] = $accountingCode;
    }

    /**
     * Unsets Accounting Code.
     */
    public function unsetAccountingCode(): void
    {
        $this->accountingCode = [];
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
     * @factory \AdvancedBillingLib\Models\ItemCategory::checkValue
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
     * Returns Price Point.
     * Creates one price point for the Wallet Product in the same call. Ignored if `price_points` is also
     * sent.
     */
    public function getPricePoint(): ?WalletProductPricePointAttributes
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     * Creates one price point for the Wallet Product in the same call. Ignored if `price_points` is also
     * sent.
     *
     * @maps price_point
     */
    public function setPricePoint(?WalletProductPricePointAttributes $pricePoint): void
    {
        $this->pricePoint = $pricePoint;
    }

    /**
     * Returns Price Points.
     * Creates several price points for the Wallet Product in the same call, winning over `price_point` if
     * both are sent. The first price point created becomes the Wallet Product's default. The whole call is
     * one transaction: if any price point in the array fails validation, nothing is created, including the
     * Wallet Product itself.
     *
     * @return WalletProductPricePointAttributes[]|null
     */
    public function getPricePoints(): ?array
    {
        return $this->pricePoints;
    }

    /**
     * Sets Price Points.
     * Creates several price points for the Wallet Product in the same call, winning over `price_point` if
     * both are sent. The first price point created becomes the Wallet Product's default. The whole call is
     * one transaction: if any price point in the array fails validation, nothing is created, including the
     * Wallet Product itself.
     *
     * @maps price_points
     *
     * @param WalletProductPricePointAttributes[]|null $pricePoints
     */
    public function setPricePoints(?array $pricePoints): void
    {
        $this->pricePoints = $pricePoints;
    }

    /**
     * Converts the WalletProduct object to a human-readable string representation.
     *
     * @return string The string representation of the WalletProduct object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletProduct',
            [
                'name' => $this->name,
                'unitName' => $this->unitName,
                'handle' => $this->handle,
                'description' => $this->getDescription(),
                'taxable' => $this->taxable,
                'taxCode' => $this->getTaxCode(),
                'accountingCode' => $this->getAccountingCode(),
                'itemCategory' => $this->getItemCategory(),
                'pricePoint' => $this->pricePoint,
                'pricePoints' => $this->pricePoints,
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
        $json['name']                = $this->name;
        $json['unit_name']           = $this->unitName;
        if (isset($this->handle)) {
            $json['handle']          = $this->handle;
        }
        if (!empty($this->description)) {
            $json['description']     = $this->description['value'];
        }
        if (isset($this->taxable)) {
            $json['taxable']         = $this->taxable;
        }
        if (!empty($this->taxCode)) {
            $json['tax_code']        = $this->taxCode['value'];
        }
        if (!empty($this->accountingCode)) {
            $json['accounting_code'] = $this->accountingCode['value'];
        }
        if (!empty($this->itemCategory)) {
            $json['item_category']   = ItemCategory::checkValue($this->itemCategory['value']);
        }
        if (isset($this->pricePoint)) {
            $json['price_point']     = $this->pricePoint;
        }
        if (isset($this->pricePoints)) {
            $json['price_points']    = $this->pricePoints;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
