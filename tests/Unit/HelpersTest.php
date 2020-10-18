<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /** @test
     */

    public function test_title_is_empty()
    {
        $this->assertEquals('Laracarte - List of artisans' , page_title(''));
    }

    /** @test */
    public function test_title_not_empty()
    {
        $this->assertEquals('About | Laracarte - List of artisans' , page_title('About'));
    }



}
