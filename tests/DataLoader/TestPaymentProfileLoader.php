<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\CreatedPaymentProfile;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;

final class TestPaymentProfileLoader
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestPaymentProfileRequestFactory $paymentProfileRequestFactory
    )
    {
    }

    public function load(int $customerId): CreatedPaymentProfile
    {
        return $this->client
            ->getPaymentProfilesController()
            ->createPaymentProfile($this->paymentProfileRequestFactory->createCreatePaymentProfileRequest($customerId))
            ->getPaymentProfile();
    }
}
