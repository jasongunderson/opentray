<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ResidentTest extends DuskTestCase
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
            // Visit the home page and assert that they are at the home page.
            $browser
                ->visit('/')
                ->assertSee('Sign In')
                ->type('@input_uname', 'admin0')
                ->type('@input_password', 'password')
                ->click('@button_signin');
            // Click the link to the residents page and assert that they visit the residents page.
            $browser
                ->click('@button_residents')
                ->assertSee('Residents');
            // Click the create resident button and assert that they visit the resident creation page.
            $browser
                ->click('@button_create')
                ->assertSee('Add Resident');
            // Click the add resident button and assert that the errors for required fields appears.
            $browser
                ->click('@button_add')
                ->assertSee('The fname field is required.', 'The lname field is required.', 'The room field is required.');
            // Type in the first name field, click the add resident button, and assert that only the correct error messages appear.
            $browser
                ->type('@input_fname', 'fname_ResidentTest')
                ->click('@button_add')
                ->assertSee('The lname field is required.', 'The room field is required.', 'The facility field is required.')
                ->assertDontSee('The fname field is required.');
            // Fill in the rest of the required fields, click the add button, then assert that a resident was added.
            $browser
                ->type('@input_lname', 'lname_ResidentTest')
                ->type('@input_room', 'room_ResidentTest')
                ->select('@input_facility', '1')
                ->click('@button_add')
                ->assertSee('fname_ResidentTest', 'lname_ResidentTest', 'facility_ResidentTest', 'room_ResidentTest', 'Residents');

            //$browser->screenshot('ResidentTest');
        });
    }
}
