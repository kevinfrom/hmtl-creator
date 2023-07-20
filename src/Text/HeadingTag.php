<?php

namespace HtmlCreator\Text;

use InvalidArgumentException;

class HeadingTag extends TextTag
{

    protected readonly string $tag;

    public function __construct(string $tag, string $text)
    {
        $allowedTags = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];

        if (in_array(mb_strtolower($tag), $allowedTags) === false) {
            throw new InvalidArgumentException("Tag $tag is not a valid tag. Valid tags are: h1, h2, h3, h4, h5, h6");
        }

        $this->tag = $tag;
        $this->text = $text;
    }
}
