<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class PreTag extends TextTag
{

    public function getTag(): string
    {
        return 'pre';
    }
}
