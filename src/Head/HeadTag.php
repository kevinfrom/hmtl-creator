<?php

namespace HtmlCreator\Head;

use HtmlCreator\BaseTag;
use HtmlCreator\Trait\ChildTrait;

class HeadTag extends BaseTag
{

    use ChildTrait;

    public function __construct(string $pageTitle)
    {
        $this->addChild(new TitleTag($pageTitle));
    }

    public function getTag(): string
    {
        return 'head';
    }
}
