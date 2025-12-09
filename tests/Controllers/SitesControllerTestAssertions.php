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
        
        $this->testCase::assertEquals($expectedSiteJson, $siteJson);
    }

    public function assertUnauthorizedApiExceptionThrown(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::UNAUTHORIZED);
    }
}
