<?php

declare(strict_types=1);

namespace Tests\Controllers;

use AdvancedBillingLib\Models\Site;
use Tests\TestFactory\TestSiteFactory;

final class SitesControllerTestData
{
    private const INVALID_AUTH_USER_NAME = 'invalidUserName';
    private const INVALID_AUTH_PASSWORD = 'invalidPassword';

    public function __construct(private TestSiteFactory $siteFactory)
    {
    }

    public function getExpectedSite(): Site
    {
        return $this->siteFactory->createSiteWithDefaultValues();
    }

    public function getInvalidAuthUserName(): string
    {
        return self::INVALID_AUTH_USER_NAME;
    }

    public function geInvalidAuthPassword(): string
    {
        return self::INVALID_AUTH_PASSWORD;
    }
}
