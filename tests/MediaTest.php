<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use HtmlCreator\HtmlTag;
use HtmlCreator\Head\HeadTag;
use HtmlCreator\Body\BodyTag;
use HtmlCreator\Media\IFrameTag;
use HtmlCreator\Media\ImgTag;
use HtmlCreator\Media\VideoTag;

class MediaTest extends TestCase
{

    public function testImgTag(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Img tag</title></head><body><img src="/img/my-image.png" alt="My image" width="800" height="600" loading="lazy"></body></html>';

        $head = new HeadTag('Img tag');
        $body = new BodyTag();

        $img = new ImgTag('/img/my-image.png', 'My image');
        $img
            ->addAttribute('width', '800')
            ->addAttribute('height', '600')
            ->addAttribute('loading', 'lazy');

        $body->addChild($img);
        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testVideoTag(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Video tag</title></head><body><video src="/video/my-video.mp4" controls="controls" autoplay="autoplay" muted="muted"></video></body></html>';

        $head = new HeadTag('Video tag');
        $body = new BodyTag();

        $video = new VideoTag('/video/my-video.mp4');
        $video
            ->addAttribute('controls', 'controls')
            ->addAttribute('autoplay', 'autoplay')
            ->addAttribute('muted', 'muted');

        $body->addChild($video);
        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }

    public function testIframeTag(): void
    {
        $testString = '<!DOCTYPE html><html><head><title>Iframe tag</title></head><body><iframe src="https://example.com/embed"></iframe></body></html>';

        $head = new HeadTag('Iframe tag');
        $body = new BodyTag();

        $body->addChild(new IFrameTag('https://example.com/embed'));
        $html = new HtmlTag($head, $body);

        $this->assertSame($testString, $html->render());
    }
}
