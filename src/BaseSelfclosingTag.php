<?php

namespace HtmlCreator;

use HtmlCreator\Interface\TagInterface;
use HtmlCreator\Trait\TagAttributesTrait;

abstract class BaseSelfclosingTag extends BaseTag implements TagInterface
{

    use TagAttributesTrait;

    public function render(): string
    {
        $tag = $this->getTag();
        $attributes = $this->renderAttributes();

        return $attributes ? "<$tag $attributes>" : "<$tag>";
    }
}
