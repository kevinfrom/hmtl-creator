<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class DelTag extends TextTag
{

    public function getTag(): string
    {
        return 'del';
    }
}
