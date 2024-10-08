<?php

declare(strict_types=1);

namespace LucasSouzaa\Imap;

interface ImapResourceInterface
{
    /**
     * Get IMAP resource stream.
     *
     * @return resource
     */
    public function getStream();

    /**
     * Clear last mailbox used cache.
     */
    public function clearLastMailboxUsedCache(): void;
}
