<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class QuoteTag extends TextTag
{

    public function getTag(): string
    {
        return 'q';
    }
}
