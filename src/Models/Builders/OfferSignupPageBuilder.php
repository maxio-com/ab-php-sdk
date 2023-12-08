<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OfferSignupPage;
use Core\Utils\CoreHelper;

/**
 * Builder for model OfferSignupPage
 *
 * @see OfferSignupPage
 */
class OfferSignupPageBuilder
{
    /**
     * @var OfferSignupPage
     */
    private $instance;

    private function __construct(OfferSignupPage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new offer signup page Builder object.
     */
    public static function init(): self
    {
        return new self(new OfferSignupPage());
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
     * Sets nickname field.
     */
    public function nickname(?string $value): self
    {
        $this->instance->setNickname($value);
        return $this;
    }

    /**
     * Sets enabled field.
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets return url field.
     */
    public function returnUrl(?string $value): self
    {
        $this->instance->setReturnUrl($value);
        return $this;
    }

    /**
     * Sets return params field.
     */
    public function returnParams(?string $value): self
    {
        $this->instance->setReturnParams($value);
        return $this;
    }

    /**
     * Sets url field.
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Initializes a new offer signup page object.
     */
    public function build(): OfferSignupPage
    {
        return CoreHelper::clone($this->instance);
    }
}
