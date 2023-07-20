<?php

namespace HtmlCreator\Media;

use HtmlCreator\BaseSelfclosingTag;

class ImgTag extends BaseSelfclosingTag
{

    public function __construct(string $src, string $alt = '')
    {
        $this->addAttribute('src', $src);

        if ($alt) {
            $this->addAttribute('alt', $alt);
        }
    }

    public function getTag(): string
    {
        return 'img';
    }
}
