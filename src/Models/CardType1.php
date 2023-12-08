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

class CardType1
{
    public const VISA = 'visa';

    public const MASTER = 'master';

    public const ELO = 'elo';

    public const CABAL = 'cabal';

    public const ALELO = 'alelo';

    public const DISCOVER = 'discover';

    public const AMERICAN_EXPRESS = 'american_express';

    public const NARANJA = 'naranja';

    public const DINERS_CLUB = 'diners_club';

    public const JCB = 'jcb';

    public const DANKORT = 'dankort';

    public const MAESTRO = 'maestro';

    public const MAESTRO_NO_LUHN = 'maestro_no_luhn';

    public const FORBRUGSFORENINGEN = 'forbrugsforeningen';

    public const SODEXO = 'sodexo';

    public const ALIA = 'alia';

    public const VR = 'vr';

    public const UNIONPAY = 'unionpay';

    public const CARNET = 'carnet';

    public const CARTES_BANCAIRES = 'cartes_bancaires';

    public const OLIMPICA = 'olimpica';

    public const CREDITEL = 'creditel';

    public const CONFIABLE = 'confiable';

    public const SYNCHRONY = 'synchrony';

    public const ROUTEX = 'routex';

    public const MADA = 'mada';

    public const BP_PLUS = 'bp_plus';

    public const PASSCARD = 'passcard';

    public const EDENRED = 'edenred';

    public const ANDA = 'anda';

    public const TARJETAD = 'tarjeta-d';

    public const HIPERCARD = 'hipercard';

    public const BOGUS = 'bogus';

    private const _ALL_VALUES = [
        self::VISA,
        self::MASTER,
        self::ELO,
        self::CABAL,
        self::ALELO,
        self::DISCOVER,
        self::AMERICAN_EXPRESS,
        self::NARANJA,
        self::DINERS_CLUB,
        self::JCB,
        self::DANKORT,
        self::MAESTRO,
        self::MAESTRO_NO_LUHN,
        self::FORBRUGSFORENINGEN,
        self::SODEXO,
        self::ALIA,
        self::VR,
        self::UNIONPAY,
        self::CARNET,
        self::CARTES_BANCAIRES,
        self::OLIMPICA,
        self::CREDITEL,
        self::CONFIABLE,
        self::SYNCHRONY,
        self::ROUTEX,
        self::MADA,
        self::BP_PLUS,
        self::PASSCARD,
        self::EDENRED,
        self::ANDA,
        self::TARJETAD,
        self::HIPERCARD,
        self::BOGUS
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
        throw new Exception("$value is invalid for CardType1.");
    }
}
