<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class SmallTag extends TextTag
{

    public function getTag(): string
    {
        return 'small';
    }
}
