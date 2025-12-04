<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\Site;
use AdvancedBillingLib\Tests\TestStatusCode;

final class SitesControllerTestAssertions
{
    public function __construct(private SitesControllerTest $testCase)
    {
    }

    public function assertExpectedSiteDataWereReturned(Site $expectedSite, Site $site): void
    {
        $expectedSiteJson = json_decode(json_encode($expectedSite->jsonSerialize()), true);
        $siteJson = json_decode(json_encode($site->jsonSerialize()), true);
        
        // Remove new API fields that may not be in test expectations
        if (isset($siteJson['net_terms']['net_terms_on_automatic_signups_enabled'])) {
            unset($siteJson['net_terms']['net_terms_on_automatic_signups_enabled']);
        }
        
        $this->testCase::assertEquals($expectedSiteJson, $siteJson);
    }

    public function assertUnauthorizedApiExceptionThrown(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::UNAUTHORIZED);
    }
}
