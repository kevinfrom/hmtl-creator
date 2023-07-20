<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use HtmlCreator\HtmlTag;
use HtmlCreator\Head\HeadTag;
use HtmlCreator\Body\BodyTag;
use HtmlCreator\Container\NavTag;
use HtmlCreator\Container\DivTag;
use HtmlCreator\Container\HeaderTag;
use HtmlCreator\Container\FooterTag;
use HtmlCreator\Container\MainTag;
use HtmlCreator\Container\ArticleTag;
use HtmlCreator\Container\SectionTag;
use HtmlCreator\Container\AsideTag;
use HtmlCreator\Container\DataTag;
use HtmlCreator\Container\DetailsTag;
use HtmlCreator\Container\DialogTag;
use HtmlCreator\Container\SummaryTag;
use HtmlCreator\Text\AnchorTag;
use HtmlCreator\Text\ParagraphTag;
use HtmlCreator\Text\HeadingTag;

class ContainerTest extends TestCase
{

    public function testNavWithTwoAnchorTags(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Nav with two anchor tags</title></head><body><nav class="my-nav"><a href="1">1</a><a href="2">2</a></nav></body></html>';

        $head = new HeadTag('Nav with two anchor tags');
        $body = new BodyTag();

        $nav = new NavTag();
        $nav
            ->addAttribute('class', 'my-nav')
            ->addChild(new AnchorTag('1', '1'))
            ->addChild(new AnchorTag('2', '2'));

        $body->addChild($nav);

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testDivWithParagraphTag(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Div with paragraph tags</title></head><body><div><p>Lorem ipsum</p></div></body></html>';

        $head = new HeadTag('Div with paragraph tags');
        $body = new BodyTag();

        $div = new DivTag();
        $div->addChild(new ParagraphTag('Lorem ipsum'));

        $body->addChild($div);

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testHeaderWithHeadingTag(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Header with paragraph tags</title></head><body><header><h1>My header</h1></header></body></html>';

        $head = new HeadTag('Header with paragraph tags');
        $body = new BodyTag();

        $header = new HeaderTag();
        $header->addChild(new HeadingTag('h1', 'My header'));

        $body->addChild($header);

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testFooterWithHeadingTag(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Footer with paragraph tags</title></head><body><footer><h1>My footer</h1></footer></body></html>';

        $head = new HeadTag('Footer with paragraph tags');
        $body = new BodyTag();

        $footer = new FooterTag();
        $footer->addChild(new HeadingTag('h1', 'My footer'));

        $body->addChild($footer);

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testMainWithHeadingTag(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Main with paragraph tags</title></head><body><main><h1>My main</h1></main></body></html>';

        $head = new HeadTag('Main with paragraph tags');
        $body = new BodyTag();

        $main = new MainTag();
        $main->addChild(new HeadingTag('h1', 'My main'));

        $body->addChild($main);

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testMultipleContainerTags(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Multiple container tags</title></head><body><article><h1>My article</h1></article><dialog><h1>My dialog</h1></dialog><section><h1>My section</h1></section><summary><h1>My summary</h1></summary><aside><h1>My aside</h1></aside><data><h1>My data</h1></data></body></html>';

        $head = new HeadTag('Multiple container tags');
        $body = new BodyTag();

        $article = new ArticleTag();
        $article->addChild(new HeadingTag('h1', 'My article'));
        $body->addChild($article);

        $dialog = new DialogTag();
        $dialog->addChild(new HeadingTag('h1', 'My dialog'));
        $body->addChild($dialog);

        $section = new SectionTag();
        $section->addChild(new HeadingTag('h1', 'My section'));
        $body->addChild($section);

        $summary = new SummaryTag();
        $summary->addChild(new HeadingTag('h1', 'My summary'));
        $body->addChild($summary);

        $aside = new AsideTag();
        $aside->addChild(new HeadingTag('h1', 'My aside'));
        $body->addChild($aside);

        $data = new DataTag();
        $data->addChild(new HeadingTag('h1', 'My data'));
        $body->addChild($data);

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }
}
