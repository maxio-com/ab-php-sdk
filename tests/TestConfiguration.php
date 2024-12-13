<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests;

final class TestConfiguration
{
    private const BASIC_AUTH_USERNAME_KEY = 'BASIC_AUTH_USERNAME';
    private const BASIC_AUTH_PASSWORD_KEY = 'BASIC_AUTH_PASSWORD';
    private const SUB_DOMAIN_KEY = 'SUB_DOMAIN';

    public function getBasicAuthUserName(): string
    {
        return getenv(self::BASIC_AUTH_USERNAME_KEY);
    }

    public function getBasicAuthPassword(): string
    {
        return getenv(self::BASIC_AUTH_PASSWORD_KEY);
    }

    public function getSubDomain(): string
    {
        return getenv(self::SUB_DOMAIN_KEY);
    }
}
