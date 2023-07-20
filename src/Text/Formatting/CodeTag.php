<?php

namespace HtmlCreator\Text\Formatting;

use HtmlCreator\Text\TextTag;

class CodeTag extends TextTag
{

    public function getTag(): string
    {
        return 'code';
    }
}
