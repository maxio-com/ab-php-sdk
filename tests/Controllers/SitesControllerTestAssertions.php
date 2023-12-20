<?php

declare(strict_types=1);

namespace Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\Site;
use Tests\TestStatusCode;

final class SitesControllerTestAssertions
{
    public function __construct(private SitesControllerTest $testCase)
    {
    }

    public function assertExpectedSiteDataWereReturned(Site $expectedSite, Site $site): void
    {
        $this->testCase::assertEquals($expectedSite->jsonSerialize(), $site->jsonSerialize());
    }

    public function assertUnauthorizedApiExceptionThrown(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::UNAUTHORIZED);
    }
}
