<?php

namespace HtmlCreator\Head\Meta;

use HtmlCreator\BaseSelfclosingTag;
use HtmlCreator\Interface\MetaTagInterface;
use HtmlCreator\Trait\TagAttributesTrait;

abstract class BaseMetaTag extends BaseSelfclosingTag implements MetaTagInterface
{

    use TagAttributesTrait;

    public function __construct(string $content)
    {
        $this
            ->addAttribute('name', $this->getName())
            ->addAttribute('content', $content);
    }

    public function getTag(): string
    {
        return 'meta';
    }
}
