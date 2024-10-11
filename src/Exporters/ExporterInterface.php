<?php

namespace Pforret\Unlockdown\Exporters;

use Pforret\Unlockdown\DTO\SiteConfig;
use Pforret\Unlockdown\DTO\SiteItem;

interface ExporterInterface
{
    public function __construct(string $rootFolder);
    public function writeConfig(SiteConfig $siteDetails): void;
    public function exportPost(SiteItem $post): void;
    public function exportPage(SiteItem $page): void;
}