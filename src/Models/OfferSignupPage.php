<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class OfferSignupPage implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $nickname;

    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var string|null
     */
    private $returnUrl;

    /**
     * @var string|null
     */
    private $returnParams;

    /**
     * @var string|null
     */
    private $url;

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
     * Returns Nickname.
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * Sets Nickname.
     *
     * @maps nickname
     */
    public function setNickname(?string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * Returns Enabled.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Return Url.
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * Sets Return Url.
     *
     * @maps return_url
     */
    public function setReturnUrl(?string $returnUrl): void
    {
        $this->returnUrl = $returnUrl;
    }

    /**
     * Returns Return Params.
     */
    public function getReturnParams(): ?string
    {
        return $this->returnParams;
    }

    /**
     * Sets Return Params.
     *
     * @maps return_params
     */
    public function setReturnParams(?string $returnParams): void
    {
        $this->returnParams = $returnParams;
    }

    /**
     * Returns Url.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
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
            $json['id']            = $this->id;
        }
        if (isset($this->nickname)) {
            $json['nickname']      = $this->nickname;
        }
        if (isset($this->enabled)) {
            $json['enabled']       = $this->enabled;
        }
        if (isset($this->returnUrl)) {
            $json['return_url']    = $this->returnUrl;
        }
        if (isset($this->returnParams)) {
            $json['return_params'] = $this->returnParams;
        }
        if (isset($this->url)) {
            $json['url']           = $this->url;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
