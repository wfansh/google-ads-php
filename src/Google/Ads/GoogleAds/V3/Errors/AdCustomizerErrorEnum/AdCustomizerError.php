<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/errors/ad_customizer_error.proto

namespace Google\Ads\GoogleAds\V3\Errors\AdCustomizerErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible ad customizer errors.
 *
 * Protobuf type <code>google.ads.googleads.v3.errors.AdCustomizerErrorEnum.AdCustomizerError</code>
 */
class AdCustomizerError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Invalid date argument in countdown function.
     *
     * Generated from protobuf enum <code>COUNTDOWN_INVALID_DATE_FORMAT = 2;</code>
     */
    const COUNTDOWN_INVALID_DATE_FORMAT = 2;
    /**
     * Countdown end date is in the past.
     *
     * Generated from protobuf enum <code>COUNTDOWN_DATE_IN_PAST = 3;</code>
     */
    const COUNTDOWN_DATE_IN_PAST = 3;
    /**
     * Invalid locale string in countdown function.
     *
     * Generated from protobuf enum <code>COUNTDOWN_INVALID_LOCALE = 4;</code>
     */
    const COUNTDOWN_INVALID_LOCALE = 4;
    /**
     * Days-before argument to countdown function is not positive.
     *
     * Generated from protobuf enum <code>COUNTDOWN_INVALID_START_DAYS_BEFORE = 5;</code>
     */
    const COUNTDOWN_INVALID_START_DAYS_BEFORE = 5;
    /**
     * A user list referenced in an IF function does not exist.
     *
     * Generated from protobuf enum <code>UNKNOWN_USER_LIST = 6;</code>
     */
    const UNKNOWN_USER_LIST = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::COUNTDOWN_INVALID_DATE_FORMAT => 'COUNTDOWN_INVALID_DATE_FORMAT',
        self::COUNTDOWN_DATE_IN_PAST => 'COUNTDOWN_DATE_IN_PAST',
        self::COUNTDOWN_INVALID_LOCALE => 'COUNTDOWN_INVALID_LOCALE',
        self::COUNTDOWN_INVALID_START_DAYS_BEFORE => 'COUNTDOWN_INVALID_START_DAYS_BEFORE',
        self::UNKNOWN_USER_LIST => 'UNKNOWN_USER_LIST',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdCustomizerError::class, \Google\Ads\GoogleAds\V3\Errors\AdCustomizerErrorEnum_AdCustomizerError::class);
