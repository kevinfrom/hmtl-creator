<?php

namespace HtmlCreator\Head;

use HtmlCreator\BaseSelfclosingTag;
use HtmlCreator\BaseTag;

class LinkTag extends BaseSelfclosingTag
{

    public function __construct(string $href, string $rel = 'stylesheet')
    {
        $this
            ->addAttribute('rel', $rel)
            ->addAttribute('href', $href);
    }

    public function getTag(): string
    {
        return 'link';
    }
}
