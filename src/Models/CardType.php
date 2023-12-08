<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * The type of card used.
 */
class CardType
{
    public const BOGUS = 'bogus';

    public const VISA = 'visa';

    public const MASTER = 'master';

    public const DISCOVER = 'discover';

    public const AMERICAN_EXPRESS = 'american_express';

    public const DINERS_CLUB = 'diners_club';

    public const JCB = 'jcb';

    public const SWITCH_ = 'switch';

    public const SOLO = 'solo';

    public const DANKORT = 'dankort';

    public const MAESTRO = 'maestro';

    public const LASER = 'laser';

    public const FORBRUGSFORENINGEN = 'forbrugsforeningen';

    private const _ALL_VALUES = [
        self::BOGUS,
        self::VISA,
        self::MASTER,
        self::DISCOVER,
        self::AMERICAN_EXPRESS,
        self::DINERS_CLUB,
        self::JCB,
        self::SWITCH_,
        self::SOLO,
        self::DANKORT,
        self::MAESTRO,
        self::LASER,
        self::FORBRUGSFORENINGEN
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for CardType.");
    }
}
