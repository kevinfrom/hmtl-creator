<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use HtmlCreator\HtmlTag;
use HtmlCreator\Head\HeadTag;
use HtmlCreator\Body\BodyTag;
use HtmlCreator\Text\HeadingTag;
use HtmlCreator\Text\ParagraphTag;
use HtmlCreator\Text\SpanTag;
use HtmlCreator\Text\AnchorTag;
use HtmlCreator\Text\Formatting\BlockquoteTag;
use HtmlCreator\Text\Formatting\CodeTag;
use HtmlCreator\Text\Formatting\DelTag;
use HtmlCreator\Text\Formatting\EmTag;
use HtmlCreator\Text\Formatting\ItalicTag;
use HtmlCreator\Text\Formatting\KbdTag;
use HtmlCreator\Text\Formatting\MarkTag;
use HtmlCreator\Text\Formatting\PreTag;
use HtmlCreator\Text\Formatting\QuoteTag;
use HtmlCreator\Text\Formatting\SmallTag;
use HtmlCreator\Text\Formatting\StrongTag;

class TextTest extends TestCase
{

    public function testHeadingAndParagraph(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Heading 1</title></head><body><h1>Lorem ipsum</h1><p>Lorem ipsum dolor sit amet</p></body></html>';

        $head = new HeadTag('Heading 1');
        $body = new BodyTag();

        $body
            ->addChild(new HeadingTag('h1', 'Lorem ipsum'))
            ->addChild(new ParagraphTag('Lorem ipsum dolor sit amet'));

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testParagraphWithSpanChildAndAttributes(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Heading 1</title></head><body><p title="My title"><span class="test">Lorem ipsum dolor sit amet</span></p></body></html>';

        $head = new HeadTag('Heading 1');
        $body = new BodyTag();

        $span = new SpanTag('Lorem ipsum dolor sit amet');
        $span->addAttribute('class', 'test');

        $p = new ParagraphTag($span->render());
        $p->addAttribute('title', 'My title');

        $body->addChild($p);

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testParagraphWithAnchorTag(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Heading 1</title></head><body><p><a href="https://google.com" target="_blank">Click me</a></p></body></html>';

        $head = new HeadTag('Heading 1');
        $body = new BodyTag();

        $anchor = new AnchorTag('Click me', 'https://google.com');
        $anchor->addAttribute('target', '_blank');

        $body->addChild(new ParagraphTag($anchor->render()));

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testTextWithMiscStylingTags(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Text with misc styling</title></head><body><p><strong>I\'m bold</strong></p><blockquote>Blockquote</blockquote><code>Code</code><del>Del</del><em>Em</em><i>Italic</i><kbd>Kbd</kbd><mark>Mark</mark><pre>Pre</pre><q>Quote</q><small>Small</small></body></html>';

        $head = new HeadTag('Text with misc styling');
        $body = new BodyTag();

        $p = new ParagraphTag(
            (new StrongTag('I\'m bold'))->render()
        );
        $body->addChild($p);

        $body->addChild(new BlockquoteTag('Blockquote'));
        $body->addChild(new CodeTag('Code'));
        $body->addChild(new DelTag('Del'));
        $body->addChild(new EmTag('Em'));
        $body->addChild(new ItalicTag('Italic'));
        $body->addChild(new KbdTag('Kbd'));
        $body->addChild(new MarkTag('Mark'));
        $body->addChild(new PreTag('Pre'));
        $body->addChild(new QuoteTag('Quote'));
        $body->addChild(new SmallTag('Small'));

        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }
}
