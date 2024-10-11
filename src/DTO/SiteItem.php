<?php

namespace Pforret\Unlockdown\DTO;

use Carbon\Carbon;
use Pforret\Unlockdown\Enums\ItemType;

class SiteItem
{
    public ?ItemType $type = null;
    public ?string $title = null;
    public ?Carbon $date = null;
    public ?string $content = null;
    public ?string $author = null;
    public ?string $url = null;
    public array $categories = [];
    public array $tags = [];
    public array $images= [];

}