<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap\Search\State;

use LucasSouzaa\Imap\Search\ConditionInterface;

/**
 * Represents a DELETED condition. Messages must have been marked for deletion
 * but not yet expunged in order to match the condition.
 */
final class Deleted implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'DELETED';
    }
}
