<?php

namespace HtmlCreator\Trait;

use HtmlCreator\Interface\TagInterface;

trait ChildTrait
{

    protected array $children = [];

    public function addChild(TagInterface $tag): static
    {
        $this->children[] = $tag;

        return $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }
}
