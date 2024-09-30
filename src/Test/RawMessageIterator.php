<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap\Test;

use LucasSouzaa\Imap\MessageInterface;
use LucasSouzaa\Imap\MessageIteratorInterface;

/**
 * A MessageIterator to be used in a mocked environment.
 */
final class RawMessageIterator extends \ArrayIterator implements MessageIteratorInterface
{
    public function current(): MessageInterface
    {
        return parent::current();
    }
}
