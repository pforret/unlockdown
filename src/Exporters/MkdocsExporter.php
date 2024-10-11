<?php

namespace Pforret\Unlockdown\Exporters;

use Pforret\Unlockdown\DTO\SiteConfig;
use Pforret\Unlockdown\DTO\SiteItem;

class MkdocsExporter implements ExporterInterface
{

    public function __construct(string $rootFolder)
    {
    }

    public function writeConfig(SiteConfig $siteDetails): void
    {
        // TODO: Implement writeConfig() method.
    }

    public function exportPost(SiteItem $post): void
    {
        // TODO: Implement exportPost() method.
    }

    public function exportPage(SiteItem $page): void
    {
        // TODO: Implement exportPage() method.
    }
}