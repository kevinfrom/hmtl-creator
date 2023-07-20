<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class BlockquoteTag extends TextTag
{

    public function getTag(): string
    {
        return 'blockquote';
    }
}
