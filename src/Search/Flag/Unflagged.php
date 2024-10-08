<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap\Search\Flag;

use LucasSouzaa\Imap\Search\ConditionInterface;

/**
 * Represents a UNFLAGGED flag condition. Messages must no have the \\FLAGGED
 * flag (i.e. urgent or important) set in order to match the condition.
 */
final class Unflagged implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'UNFLAGGED';
    }
}
