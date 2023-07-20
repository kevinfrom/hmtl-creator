<?php

namespace HtmlCreator\Trait;

use HtmlCreator\TagAttribute;

trait TagAttributesTrait
{

    protected array $attributes = [];

    public function addAttribute(string $name, string $value): static
    {
        $this->attributes[] = new TagAttribute($name, $value);

        return $this;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function renderAttributes(): string
    {
        return implode(
            ' ',
            array_map(static fn (TagAttribute $a) => $a->render(), $this->getAttributes())
        );
    }
}
