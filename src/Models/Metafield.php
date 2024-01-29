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

class Metafield implements \JsonSerializable
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
     * @var MetafieldScope|null
     */
    private $scope;

    /**
     * @var int|null
     */
    private $dataCount;

    /**
     * @var string|null
     */
    private $inputType;

    /**
     * @var array
     */
    private $enum = [];

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
     * Returns Scope.
     * Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially
     * complete scope attributes will override the existing settings.
     */
    public function getScope(): ?MetafieldScope
    {
        return $this->scope;
    }

    /**
     * Sets Scope.
     * Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially
     * complete scope attributes will override the existing settings.
     *
     * @maps scope
     */
    public function setScope(?MetafieldScope $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * Returns Data Count.
     * the amount of subscriptions this metafield has been applied to in Chargify
     */
    public function getDataCount(): ?int
    {
        return $this->dataCount;
    }

    /**
     * Sets Data Count.
     * the amount of subscriptions this metafield has been applied to in Chargify
     *
     * @maps data_count
     */
    public function setDataCount(?int $dataCount): void
    {
        $this->dataCount = $dataCount;
    }

    /**
     * Returns Input Type.
     * Indicates how data should be added to the metafield. For example, a text type is just a string, so a
     * given metafield of this type can have any value attached. On the other hand, dropdown and radio have
     * a set of allowed values that can be input, and appear differently on a Public Signup Page. Defaults
     * to 'text'
     */
    public function getInputType(): ?string
    {
        return $this->inputType;
    }

    /**
     * Sets Input Type.
     * Indicates how data should be added to the metafield. For example, a text type is just a string, so a
     * given metafield of this type can have any value attached. On the other hand, dropdown and radio have
     * a set of allowed values that can be input, and appear differently on a Public Signup Page. Defaults
     * to 'text'
     *
     * @maps input_type
     * @factory \AdvancedBillingLib\Models\MetafieldInput::checkValue
     */
    public function setInputType(?string $inputType): void
    {
        $this->inputType = $inputType;
    }

    /**
     * Returns Enum.
     *
     * @return string|string[]|null
     */
    public function getEnum()
    {
        if (count($this->enum) == 0) {
            return null;
        }
        return $this->enum['value'];
    }

    /**
     * Sets Enum.
     *
     * @maps enum
     * @mapsBy anyOf(oneOf(string,string[]),null)
     *
     * @param string|string[]|null $enum
     */
    public function setEnum($enum): void
    {
        $this->enum['value'] = $enum;
    }

    /**
     * Unsets Enum.
     */
    public function unsetEnum(): void
    {
        $this->enum = [];
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
            $json['id']         = $this->id;
        }
        if (isset($this->name)) {
            $json['name']       = $this->name;
        }
        if (isset($this->scope)) {
            $json['scope']      = $this->scope;
        }
        if (isset($this->dataCount)) {
            $json['data_count'] = $this->dataCount;
        }
        if (isset($this->inputType)) {
            $json['input_type'] = MetafieldInput::checkValue($this->inputType);
        }
        if (!empty($this->enum)) {
            $json['enum']       =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->enum['value'],
                    'anyOf(oneOf(string,string[]),null)'
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
