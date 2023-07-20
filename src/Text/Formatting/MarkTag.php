<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class MarkTag extends TextTag
{

    public function getTag(): string
    {
        return 'mark';
    }
}
