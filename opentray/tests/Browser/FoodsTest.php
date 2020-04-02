<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FoodTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    use DatabaseMigrations;
    use DatabaseTransactions;

    public function test()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/')
                ->assertSee('Sign In');
            $browser
                ->click('@button_foods')
                ->assertSee('Food');
            $browser
                ->click('@button_create')
                ->assertSee('Add Food');
            $browser
                ->click('@button_add')
                ->assertSee('The name field is required.');
            $browser
                ->type('@input_name', 'name_FoodTest')
                ->click('@button_add')
                ->assertSee('name_FoodTest');

            //$browser->screenshot('FoodTest');
        });
    }
}
