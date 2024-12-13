<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class SingleErrorResponseException extends ApiException
{
    /**
     * @var string
     */
    private $error;

    /**
     * @param string $reason
     * @param \AdvancedBillingLib\Http\HttpRequest $request
     * @param \AdvancedBillingLib\Http\HttpResponse $response
     * @param string $error
     */
    public function __construct(
        string $reason,
        \AdvancedBillingLib\Http\HttpRequest $request,
        \AdvancedBillingLib\Http\HttpResponse $response,
        string $error
    ) {
        parent::__construct($reason, $request, $response);
        $this->error = $error;
    }

    /**
     * Returns Error.
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @required
     * @maps error
     */
    public function setError(string $error): void
    {
        $this->error = $error;
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
}
