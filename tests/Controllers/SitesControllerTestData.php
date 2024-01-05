<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Site;
use AdvancedBillingLib\Tests\TestFactory\TestSiteFactory;

final class SitesControllerTestData
{

    public function __construct(private TestSiteFactory $siteFactory)
    {
    }

    public function getExpectedSite(): Site
    {
        return $this->siteFactory->createSiteWithDefaultValues();
    }
}
