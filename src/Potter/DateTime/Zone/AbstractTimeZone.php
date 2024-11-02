<?php

declare(strict_types=1);

namespace Potter\DateTime\Zone;

use DateTimeZone;

abstract class AbstractTimeZone extends DateTimeZone implements TimeZoneInterface
{ 
    abstract public static function inherit(DateTimeZone $timeZone): static;
}
