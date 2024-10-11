<?php

namespace Pforret\Unlockdown\Readers;

use Pforret\Unlockdown\DTO\SiteConfig;
use Pforret\Unlockdown\DTO\SiteItem;

interface ReaderInterface
{
    public function __construct(string $file);
    public function getSiteConfig(): SiteConfig;
    public function getNextItem(): SiteItem;
}