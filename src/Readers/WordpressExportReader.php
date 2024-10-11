<?php

namespace Pforret\Unlockdown\Readers;

use Pforret\Unlockdown\DTO\SiteConfig;
use Pforret\Unlockdown\DTO\SiteItem;

class WordpressExportReader implements ReaderInterface
{

    public function __construct(string $file)
    {
    }

    public function getSiteConfig(): SiteConfig
    {
        // TODO: Implement getSiteConfig() method.
    }

    public function getNextItem(): SiteItem
    {
        // TODO: Implement getNextItem() method.
    }
}