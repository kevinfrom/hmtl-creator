<?php

namespace HtmlCreator\Text;

use HtmlCreator\BaseTag;
use HtmlCreator\Trait\TagAttributesTrait;

abstract class TextTag extends BaseTag
{

    use TagAttributesTrait;

    protected readonly string $tag;

    public function __construct(protected string $text)
    {
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function render(): string
    {
        $tag = $this->getTag();
        $text = $this->getText();

        if ($text instanceof TextTag) {
            $text = $text->render();
        }

        if ($attributes = $this->renderAttributes()) {
            return "<$tag $attributes>$text</$tag>";
        }

        return "<$tag>$text</$tag>";
    }
}
