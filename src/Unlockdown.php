<?php
namespace Pforret\Unlockdown;
use Pforret\Unlockdown\Enums\ItemType;
use Pforret\Unlockdown\Enums\StaticSiteGeneratorType;
use Pforret\Unlockdown\Exporters\MkdocsExporter;
use Pforret\Unlockdown\Readers\WordpressExportReader;
use Pforret\Unlockdown\Readers\RssFeedReader;
use function PHPUnit\Framework\matches;

class Unlockdown
{
    public static function version(): string
    {
        return '0.1.0';
    }

    public static function help(): string
    {
        return 'Unlockdown v' . self::version() . ' by Peter Forret 2021';
    }

    /**
     * @throws \Exception
     */
    public static function exportFromRss(string $rssFile, string $outputFolder, StaticSiteGeneratorType $type): int
    {
        $reader = new RssFeedReader($rssFile);
        $writer = match ($type) {
            StaticSiteGeneratorType::SSG_MKDOCS => new MkdocsExporter($outputFolder),
            default => throw new \Exception('Unsupported SSG type: ' . $type->value)
        };

        $writer->writeConfig($reader->getSiteConfig());
        while($item = $reader->getNextItem()){
            switch ($item->type){
                case ItemType::ITEM_PAGE:
                    $writer->exportPage($item);
                    break;
                case ItemType::ITEM_POST:
                    $writer->exportPost($item);
                    break;
                case ItemType::ITEM_PICTURE:
                    // skip;
            }
        }
    }
    public static function exportFromWordpress(string $xmlFile, string $outputFolder, StaticSiteGeneratorType $type): int
    {
        $reader = new WordpressExportReader($xmlFile);
        $writer = match ($type) {
            StaticSiteGeneratorType::SSG_MKDOCS => new MkdocsExporter($outputFolder),
            default => throw new \Exception('Unsupported SSG type: ' . $type->value)
        };

        $writer->writeConfig($reader->getSiteConfig());
        while($item = $reader->getNextItem()){
            switch ($item->type){
                case ItemType::ITEM_PAGE:
                    $writer->exportPage($item);
                    break;
                case ItemType::ITEM_POST:
                    $writer->exportPost($item);
                    break;
                case ItemType::ITEM_PICTURE:
                    // skip;
            }
        }
    }
}
