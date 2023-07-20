<?php

namespace HtmlCreator\Head;

use HtmlCreator\Text\TextTag;

class TitleTag extends TextTag
{

    public function getTag(): string
    {
        return 'title';
    }
}
