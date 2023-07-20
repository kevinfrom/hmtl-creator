<?php

namespace HtmlCreator\Body;

use HtmlCreator\BaseTag;
use HtmlCreator\Trait\ChildTrait;

class BodyTag extends BaseTag
{

    use ChildTrait;

    public function getTag(): string
    {
        return 'body';
    }
}
