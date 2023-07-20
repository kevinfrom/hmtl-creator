<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use HtmlCreator\HtmlTag;
use HtmlCreator\Head\HeadTag;
use HtmlCreator\Body\BodyTag;
use HtmlCreator\Head\LinkTag;
use HtmlCreator\Head\Meta\MetaAuthor;
use HtmlCreator\Head\Meta\MetaCharset;
use HtmlCreator\Head\Meta\MetaDescription;
use HtmlCreator\Head\Meta\MetaViewport;
use HtmlCreator\Head\Meta\MetaKeywords;

class MetaTest extends TestCase
{

    public function testExternalStylesheet(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>External Stylesheet</title><link rel="stylesheet" href="/public/style.css"></head><body></body></html>';

        $head = new HeadTag('External Stylesheet');
        $head->addChild(new LinkTag('/public/style.css'));

        $body = new BodyTag();
        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testMetaDescription(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Meta Description</title><meta name="description" content="Lorem ipsum dolor sit amet"></head><body></body></html>';

        $head = new HeadTag('Meta Description');
        $head->addChild(new MetaDescription('Lorem ipsum dolor sit amet'));

        $body = new BodyTag();
        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testMetaViewport(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Meta Viewport</title><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body></body></html>';

        $head = new HeadTag('Meta Viewport');
        $head->addChild(new MetaViewport());

        $body = new BodyTag();
        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testMetaAuthor(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Meta Author</title><meta name="author" content="John Doe"></head><body></body></html>';

        $head = new HeadTag('Meta Author');
        $head->addChild(new MetaAuthor('John Doe'));

        $body = new BodyTag();
        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testMetaKeywords(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Meta Keywords</title><meta name="keywords" content="HTML, Meta, Keywords"></head><body></body></html>';

        $head = new HeadTag('Meta Keywords');
        $head->addChild(new MetaKeywords(['HTML', 'Meta', 'Keywords']));

        $body = new BodyTag();
        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testMetaCharset(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Meta Charset</title><meta charset="UTF-8"></head><body></body></html>';

        $head = new HeadTag('Meta Charset');
        $head->addChild(new MetaCharset());

        $body = new BodyTag();
        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }
}
