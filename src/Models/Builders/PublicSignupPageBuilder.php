<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PublicSignupPage;
use Core\Utils\CoreHelper;

/**
 * Builder for model PublicSignupPage
 *
 * @see PublicSignupPage
 */
class PublicSignupPageBuilder
{
    /**
     * @var PublicSignupPage
     */
    private $instance;

    private function __construct(PublicSignupPage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Public Signup Page Builder object.
     */
    public static function init(): self
    {
        return new self(new PublicSignupPage());
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
     * Sets return url field.
     *
     * @param string|null $value
     */
    public function returnUrl(?string $value): self
    {
        $this->instance->setReturnUrl($value);
        return $this;
    }

    /**
     * Unsets return url field.
     */
    public function unsetReturnUrl(): self
    {
        $this->instance->unsetReturnUrl();
        return $this;
    }

    /**
     * Sets return params field.
     *
     * @param string|null $value
     */
    public function returnParams(?string $value): self
    {
        $this->instance->setReturnParams($value);
        return $this;
    }

    /**
     * Unsets return params field.
     */
    public function unsetReturnParams(): self
    {
        $this->instance->unsetReturnParams();
        return $this;
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
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
     * Initializes a new Public Signup Page object.
     */
    public function build(): PublicSignupPage
    {
        return CoreHelper::clone($this->instance);
    }
}
