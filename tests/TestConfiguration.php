<?php

declare(strict_types=1);

namespace Tests;

final class TestConfiguration
{
    private const BASIC_AUTH_USERNAME_KEY = 'BASIC_AUTH_USERNAME';
    private const BASIC_AUTH_PASSWORD_KEY = 'BASIC_AUTH_PASSWORD';
    private const ENVIRONMENT_KEY = 'ENVIRONMENT';
    private const DOMAIN_KEY = 'DOMAIN';
    private const SUB_DOMAIN_KEY = 'SUB_DOMAIN';

    public function getBasicAuthUserName(): string
    {
        return $_ENV[self::BASIC_AUTH_USERNAME_KEY];
    }

    public function getBasicAuthPassword(): string
    {
        return $_ENV[self::BASIC_AUTH_PASSWORD_KEY];
    }

    public function getEnvironment(): string
    {
        return $_ENV[self::ENVIRONMENT_KEY];
    }

    public function getDomain(): string
    {
        return $_ENV[self::DOMAIN_KEY];
    }

    public function getSubDomain(): string
    {
        return $_ENV[self::SUB_DOMAIN_KEY];
    }
}
