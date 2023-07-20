<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class EmTag extends TextTag
{

    public function getTag(): string
    {
        return 'em';
    }
}
