<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap\Search\State;

use LucasSouzaa\Imap\Search\ConditionInterface;

/**
 * Represents a NEW condition. Only new messages will match this condition.
 */
final class NewMessage implements ConditionInterface
{
    /**
     * Returns the keyword that the condition represents.
     */
    public function toString(): string
    {
        return 'NEW';
    }
}
