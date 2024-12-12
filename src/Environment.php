<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib;

/**
 * Environments available for API
 */
class Environment
{
    /**
     * Default Advanced Billing environment hosted in US. Valid for the majority of our customers.
     */
    public const US = 'US';

    /**
     * Advanced Billing environment hosted in EU. Use only when you requested EU hosting for your AB
     * account.
     */
    public const EU = 'EU';
}
