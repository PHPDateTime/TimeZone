<?php

declare(strict_types=1);

namespace Potter\DateTime\Zone;

trait StringableTrait 
{
    final public function __toString(): string
    {
        return $this->getName();
    }
    
    abstract public function getName(): string;
}
