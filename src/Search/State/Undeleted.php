<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap\Search\State;

use LucasSouzaa\Imap\Search\ConditionInterface;

/**
 * Represents a UNDELETED condition. Messages must not have been marked for
 * deletion in order to match the condition.
 */
final class Undeleted implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'UNDELETED';
    }
}
