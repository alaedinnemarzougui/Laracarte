<?php

namespace Tests\Unit;


use Tests\TestCase;

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

    /**
     * @test
     */

    public function test_set_route_active()
    {
      $this->get(route('root_path'));

      $this->assertEquals('active' , set_route_active('root_path'));
      $this->assertEquals('' , set_route_active('about_path'));


    }


}
