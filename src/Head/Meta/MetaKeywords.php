<?php

namespace HtmlCreator\Head\Meta;

use InvalidArgumentException;

class MetaKeywords extends BaseMetaTag
{


    public function __construct(array $keywords)
    {
        parent::__construct(implode(', ', $keywords));
    }

    public function getName(): string
    {
        return 'keywords';
    }
}
