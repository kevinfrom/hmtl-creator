<?php

namespace HtmlCreator\Media;

use HtmlCreator\BaseTag;

class VideoTag extends BaseTag
{

    public function __construct(string $src)
    {
        $this->addAttribute('src', $src);
    }

    public function getTag(): string
    {
        return 'video';
    }
}
