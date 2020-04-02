<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PrintTest extends DuskTestCase
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
                ->click('@button_residents')
                ->assertSee('Residents');
            // add residents for queue testing
            for ($i = 0; $i < 10; $i++) {
                $browser
                    ->click('@button_create')
                    ->type('@input_fname', 'fname_PrintTest' . $i)
                    ->type('@input_lname', 'lname_PrintTest' . $i)
                    ->type('@input_facility', '-1')
                    ->type('@input_room', 'room_PrintTest' . $i)
                    ->click('@button_add');
            }
            $browser
                ->click('@button_print')
                ->assertSee('Print');
            $browser
                ->click('@button_print_all')
                ->assertSee('Cards');
            //$browser->screenshot('PrintTest');
        });
    }
}
