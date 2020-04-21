<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FacilitiesTest extends DuskTestCase
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
                ->assertSee('Sign In')
                ->type('@input_uname', 'admin0')
                ->type('@input_password', 'password')
                ->click('@button_signin');
            $browser
                ->click('@button_facilities')
                ->assertSee('Facilities');
            $browser
                ->click('@button_create')
                ->assertSee('Add Facility');
            $browser
                ->click('@button_add')
                ->assertSee('The name field is required.');
            $browser
                ->type('@input_name', 'name_FacilityTest')
                ->click('@button_add')
                ->assertSee('name_FacilityTest');

            //$browser->screenshot('FacilityTest');
        });
    }
}
