<?php

namespace Pforret\Unlockdown\Readers;

use Exception;
use Pforret\Unlockdown\DTO\SiteConfig;
use Pforret\Unlockdown\DTO\SiteItem;
use SimplePie\File;
use SimplePie\SimplePie;

class RssFeedReader implements ReaderInterface
{

    private string $file;
    private SimplePie $parser;

    /**
     * @throws Exception
     */
    public function __construct(string $file)
    {
        if(!file_exists($file)){
            throw new Exception("File not found: $file");
        }
        $this->file = $file;
        $simpleFile = new File($file);
        $this->parser = new SimplePie();
        $this->parser->set_file($simpleFile);
        $this->parser->init();
    }

    public function getNextItem(): SiteItem
    {
        $item = new SiteItem();
        return $item;
    }

    public function getSiteConfig(): SiteConfig
    {
        // TODO: Implement getSiteConfig() method.
    }
}