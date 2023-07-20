<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class KbdTag extends TextTag
{

    public function getTag(): string
    {
        return 'kbd';
    }
}
