<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap\Search\Flag;

use LucasSouzaa\Imap\Search\ConditionInterface;

/**
 * Represents a FLAGGED flag condition. Messages must have the \\FLAGGED flag
 * (i.e. urgent or important) set in order to match the condition.
 */
final class Flagged implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'FLAGGED';
    }
}
