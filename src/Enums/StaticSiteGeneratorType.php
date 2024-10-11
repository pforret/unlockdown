<?php

namespace Pforret\Unlockdown\Enums;

enum StaticSiteGeneratorType: string
{
    case SSG_HUGO = 'hugo';
    case SSG_JEKYLL = 'jekyll';
    case SSG_MKDOCS = 'mkdocs';
}
