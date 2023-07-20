<?php

namespace HtmlCreator;

class TagAttribute
{

    public function __construct(protected readonly string $name, protected readonly string $value)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function render(): string
    {
        $name = $this->getName();
        $value = $this->getValue();

        return $name . '="' . $value . '"';
    }
}
