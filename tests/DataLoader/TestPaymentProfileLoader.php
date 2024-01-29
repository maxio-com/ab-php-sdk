<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\BankAccountPaymentProfile;
use AdvancedBillingLib\Models\CreditCardPaymentProfile;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;

final class TestPaymentProfileLoader
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestPaymentProfileRequestFactory $paymentProfileRequestFactory
    )
    {
    }

    public function loadCreditCard(int $customerId): CreditCardPaymentProfile
    {
        return $this->client
            ->getPaymentProfilesController()
            ->createPaymentProfile($this->paymentProfileRequestFactory
                ->createCreateCreditCardPaymentProfileRequest($customerId))
            ->getPaymentProfile();
    }

    public function loadBankAccount(int $customerId): BankAccountPaymentProfile
    {
        return $this->client
            ->getPaymentProfilesController()
            ->createPaymentProfile($this->paymentProfileRequestFactory
                ->createCreateBankAccountPaymentProfileRequest($customerId))
            ->getPaymentProfile();
    }
}
