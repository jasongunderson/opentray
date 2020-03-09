<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddResidentTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

    use DatabaseMigrations;
    use DatabaseTransactions;

    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            // Visit the home page and assert that they are at the home page.
            $browser->visit('/')
                ->assertSee('Sign In');
            // Click the link to the residents page and assert that they visit the residents page.
            $browser->click('@button_residents')
                ->assertSee('Residents');
            // Click the create resident button and assert that they visit the resident creation page.
            $browser->click('@button_create')
                ->assertSee('Add Resident');
            // Click the add resident button and assert that the errors for required fields appears.
            $browser->click('@button_add')
                ->assertSee('The facility field is required.', 'The fname field is required.', 'The lname field is required.', 'The room field is required.');
            // Type in the first name field, click the add resident button, and assert that only the correct error messages appear.
            $browser->type('@input_fname', 'fname_AddResidentTest')
                ->click('@button_add')
                ->assertSee('The facility field is required.', 'The lname field is required.', 'The room field is required.')
                ->assertDontSee('The fname field is required.');
            // Fill in the rest of the required fields, click the add button, then assert that a resident was added.
            $browser->type('@input_lname', 'lname_AddResidentTest')
                ->type('@input_facility', '-1')
                ->type('@input_room', 'room_AddResidentTest')
                ->click('@button_add')
                ->screenshot('test')
                ->assertSee('fname_AddResidentTest', 'lname_AddResidentTest', 'facility_AddResidentTest', 'room_AddResidentTest', 'Residents');
        });
    }
}
