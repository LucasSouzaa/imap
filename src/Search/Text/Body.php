<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap\Search\Text;

use LucasSouzaa\Imap\Search\AbstractText;

/**
 * Represents a body text contains condition. Messages must have a body
 * containing the specified text in order to match the condition.
 */
final class Body extends AbstractText
{
    /**
     * Returns the keyword that the condition represents.
     */
    protected function getKeyword(): string
    {
        return 'BODY';
    }
}
