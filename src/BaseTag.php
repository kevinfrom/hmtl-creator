<?php

namespace HtmlCreator;

use HtmlCreator\Interface\TagInterface;
use HtmlCreator\Trait\TagAttributesTrait;

abstract class BaseTag implements TagInterface
{

    use TagAttributesTrait;

    public function render(): string
    {
        $tag = $this->getTag();
        $attributes = $this->renderAttributes();
        
        $html = $attributes ? "<$tag $attributes>" : "<$tag>";

        if (method_exists($this, 'getChildren')) {
            foreach ($this->getChildren() as $childTag) {
                $html .= $childTag->render();
            }
        }

        $html .= "</$tag>";

        return $html;
    }
}
