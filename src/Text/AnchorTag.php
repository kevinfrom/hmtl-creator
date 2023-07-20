<?php

namespace HtmlCreator\Text;

class AnchorTag extends TextTag
{

    public function __construct(protected string $text, string $href)
    {
        $this->addAttribute('href', $href);
    }

    public function getTag(): string
    {
        return 'a';
    }
}
