<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PublicSignupPage implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var array
     */
    private $returnUrl = [];

    /**
     * @var array
     */
    private $returnParams = [];

    /**
     * @var string|null
     */
    private $url;

    /**
     * Returns Id.
     * The id of the signup page (public_signup_pages only)
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The id of the signup page (public_signup_pages only)
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Return Url.
     * The url to which a customer will be returned after a successful signup (public_signup_pages only)
     */
    public function getReturnUrl(): ?string
    {
        if (count($this->returnUrl) == 0) {
            return null;
        }
        return $this->returnUrl['value'];
    }

    /**
     * Sets Return Url.
     * The url to which a customer will be returned after a successful signup (public_signup_pages only)
     *
     * @maps return_url
     */
    public function setReturnUrl(?string $returnUrl): void
    {
        $this->returnUrl['value'] = $returnUrl;
    }

    /**
     * Unsets Return Url.
     * The url to which a customer will be returned after a successful signup (public_signup_pages only)
     */
    public function unsetReturnUrl(): void
    {
        $this->returnUrl = [];
    }

    /**
     * Returns Return Params.
     * The params to be appended to the return_url (public_signup_pages only)
     */
    public function getReturnParams(): ?string
    {
        if (count($this->returnParams) == 0) {
            return null;
        }
        return $this->returnParams['value'];
    }

    /**
     * Sets Return Params.
     * The params to be appended to the return_url (public_signup_pages only)
     *
     * @maps return_params
     */
    public function setReturnParams(?string $returnParams): void
    {
        $this->returnParams['value'] = $returnParams;
    }

    /**
     * Unsets Return Params.
     * The params to be appended to the return_url (public_signup_pages only)
     */
    public function unsetReturnParams(): void
    {
        $this->returnParams = [];
    }

    /**
     * Returns Url.
     * The url where the signup page can be viewed (public_signup_pages only)
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * The url where the signup page can be viewed (public_signup_pages only)
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
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
        if (!empty($this->returnUrl)) {
            $json['return_url']    = $this->returnUrl['value'];
        }
        if (!empty($this->returnParams)) {
            $json['return_params'] = $this->returnParams['value'];
        }
        if (isset($this->url)) {
            $json['url']           = $this->url;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
