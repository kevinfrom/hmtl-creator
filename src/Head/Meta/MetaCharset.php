<?php

namespace HtmlCreator\Head\Meta;

use HtmlCreator\Trait\TagAttributesTrait;

class MetaCharset extends BaseMetaTag
{

    use TagAttributesTrait;

    public function __construct(string $charset = 'UTF-8')
    {
        $this->addAttribute('charset', $charset);
    }

    public function getName(): string
    {
        return '';
    }

    public function getTag(): string
    {
        return 'meta';
    }
}
