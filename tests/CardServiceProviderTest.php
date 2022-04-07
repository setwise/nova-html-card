<?php declare(strict_types=1);

namespace Setwise\HtmlCard\Tests;

use Setwise\HtmlCard\MarkdownConverter;
use Illuminate\Support\Facades\App;

final class CardServiceProviderTest extends TestCase
{
    /** @test */
    public function it_registers_markdown_converter_implementation(): void
    {
        $converter = App::make(MarkdownConverter::class);

        $this->assertInstanceOf(MarkdownConverter::class, $converter);
    }
}
