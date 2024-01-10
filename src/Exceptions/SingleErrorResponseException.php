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
}
