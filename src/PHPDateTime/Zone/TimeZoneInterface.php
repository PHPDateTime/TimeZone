<?php

declare(strict_types=1);

namespace PHPDateTime\Zone;

use DateTimeInterface as DateTimeInterface,
    DateTimeZone      as DateTimeZone;

use PHPAbles\Stringable\StringableInterface;

interface TimeZoneInterface extends StringableInterface
{
    public function getLocation(): array|false;
    public function getName(): string;
    public function getOffset(DateTimeInterface $datetime): int;
    public function getTransitions(int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false;
    
    public static function listAbbreviations(): array;
    public static function listIdentifiers(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode = null): array;
    
    public static function inherit(DateTimeZone $timeZone): static;
}
