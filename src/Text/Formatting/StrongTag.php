<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class StrongTag extends TextTag
{

    public function getTag(): string
    {
        return 'strong';
    }
}
