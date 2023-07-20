<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class ItalicTag extends TextTag
{

    public function getTag(): string
    {
        return 'i';
    }
}
