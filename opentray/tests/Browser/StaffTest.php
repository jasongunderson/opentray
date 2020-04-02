<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StaffTest extends DuskTestCase
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
                ->assertSee('Sign In');
            // Click the link to the staff page and assert that they visit the staff page.
            $browser
                ->click('@button_staff')
                ->assertSee('Staff');
            // Click the add staff button and assert that they visit the employee creation page.
            $browser
                ->click('@button_create')
                ->assertSee('Add An Employee');
            // Click the add employee button and assert that the errors for required fields appears.
            $browser
                ->click('@button_add')
                ->assertSee('The fname field is required.', 'The lname field is required.', 'The uname field is required.', 'The facility field is required.', 'The password field is required.', 'The permission field is required.');
            // Type in the first name field, click the add employee button, and assert that only the correct error messages appear.
            $browser
                ->type('@input_fname', 'fname_StaffTest')
                ->click('@button_add')
                ->assertSee('The lname field is required.', 'The uname field is required.', 'The facility field is required.', 'The password field is required.', 'The permission field is required.')
                ->assertDontSee('The fname field is required.');
            // Fill in the rest of the required fields, click the add button, then assert that an employee was added.
            $browser
                ->type('@input_lname', 'lname_StaffTest')
                ->type('@input_uname', 'uname_StaffTest')
                ->type('@input_facility', '-1')
                ->type('@input_password', 'password_StaffTest')
                ->type('@input_permission', '-2')
                ->click('@button_add')
                ->assertSee('fname_StaffTest', 'lname_StaffTest', 'uname_StaffTest','-1', 'password_StaffTest', '-2');

            //$browser->screenshot('StaffTest');
        });
    }
}
