<?php

namespace HtmlCreator\Head\Meta;

class MetaViewport extends BaseMetaTag
{

    public function __construct(string $content = 'width=device-width, initial-scale=1.0')
    {
        parent::__construct($content);
    }

    public function getName(): string
    {
        return 'viewport';
    }
}
