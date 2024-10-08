<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap\Search\Flag;

use LucasSouzaa\Imap\Search\ConditionInterface;

/**
 * Represents an UNANSWERED flag condition. Messages must not have the
 * \\ANSWERED flag set in order to match the condition.
 */
final class Unanswered implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'UNANSWERED';
    }
}
