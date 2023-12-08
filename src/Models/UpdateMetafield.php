<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateMetafield implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $currentName;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var MetafieldScope|null
     */
    private $scope;

    /**
     * @var string|null
     */
    private $inputType = MetafieldInput::TEXT;

    /**
     * @var string[]|null
     */
    private $enum;

    /**
     * Returns Current Name.
     */
    public function getCurrentName(): ?string
    {
        return $this->currentName;
    }

    /**
     * Sets Current Name.
     *
     * @maps current_name
     */
    public function setCurrentName(?string $currentName): void
    {
        $this->currentName = $currentName;
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
     * Returns Input Type.
     * Indicates how data should be added to the metafield. For example, a text type is just a string, so a
     * given metafield of this type can have any value attached. On the other hand, dropdown and radio have
     * a set of allowed values that can be input, and appear differently on a Public Signup Page.
     */
    public function getInputType(): ?string
    {
        return $this->inputType;
    }

    /**
     * Sets Input Type.
     * Indicates how data should be added to the metafield. For example, a text type is just a string, so a
     * given metafield of this type can have any value attached. On the other hand, dropdown and radio have
     * a set of allowed values that can be input, and appear differently on a Public Signup Page.
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
     * Only applicable when input_type is radio or dropdown
     *
     * @return string[]|null
     */
    public function getEnum(): ?array
    {
        return $this->enum;
    }

    /**
     * Sets Enum.
     * Only applicable when input_type is radio or dropdown
     *
     * @maps enum
     *
     * @param string[]|null $enum
     */
    public function setEnum(?array $enum): void
    {
        $this->enum = $enum;
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
        if (isset($this->currentName)) {
            $json['current_name'] = $this->currentName;
        }
        if (isset($this->name)) {
            $json['name']         = $this->name;
        }
        if (isset($this->scope)) {
            $json['scope']        = $this->scope;
        }
        if (isset($this->inputType)) {
            $json['input_type']   = MetafieldInput::checkValue($this->inputType);
        }
        if (isset($this->enum)) {
            $json['enum']         = $this->enum;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
