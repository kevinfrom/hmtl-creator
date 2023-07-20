<?php

namespace HtmlCreator\Interface;

interface TagInterface
{

    public function getTag(): string;

    public function render(): string;
}
