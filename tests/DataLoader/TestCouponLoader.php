<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;

final class TestCouponLoader
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestCouponRequestFactory $couponRequestFactory
    )
    {
    }

    public function load(int $productFamilyId, string $couponCode): Coupon
    {
        return $this->client
            ->getCouponsController()
            ->createCoupon(
                $productFamilyId,
                $this->couponRequestFactory->createCreateOrUpdatePercentageCouponRequest(
                    (string) $productFamilyId,
                    $couponCode
                )
            )
            ->getCoupon();
    }
}
