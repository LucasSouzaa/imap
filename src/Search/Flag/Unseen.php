<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap\Search\Flag;

use LucasSouzaa\Imap\Search\ConditionInterface;

/**
 * Represents an UNSEEN flag condition. Messages must not have the \\SEEN flag
 * set in order to match the condition.
 */
final class Unseen implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'UNSEEN';
    }
}
