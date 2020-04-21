<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/')
                ->assertSee('Sign In');
            $browser
                ->visit('/residents')
                ->assertSee('Sign In');
            $browser
                ->visit('/staff')
                ->assertSee('Sign In');
            $browser
                ->visit('/foods')
                ->assertSee('Sign In');
            $browser
                ->visit('/facilities')
                ->assertSee('Sign In');
            $browser
                ->visit('/print')
                ->assertSee('Sign In');

            $browser
                ->visit('/')
                ->assertSee('Sign In')
                ->type('@input_uname', 'admin3')
                ->type('@input_password', 'password')
                ->click('@button_signin');
            $browser
                ->visit('/residents')
                ->assertSee('Print All')
                ->assertSee("You don't have permission to access that page.");
            $browser
                ->visit('/staff')
                ->assertSee('Print All')
                ->assertSee("You don't have permission to access that page.");
            $browser
                ->visit('/foods')
                ->assertSee('Print All')
                ->assertSee("You don't have permission to access that page.");
            $browser
                ->visit('/facilities')
                ->assertSee('Print All')
                ->assertSee("You don't have permission to access that page.");
            $browser
                ->visit('/print')
                ->assertSee('Print All')
                ->assertDontSee("You don't have permission to access that page.");

            $browser->click('@button_signout');
            $browser
                ->visit('/')
                ->assertSee('Sign In')
                ->type('@input_uname', 'admin2')
                ->type('@input_password', 'password')
                ->click('@button_signin');
            $browser
                ->visit('/residents')
                ->assertSee('Residents');
            $browser
                ->visit('/staff')
                ->assertSee('Print All')
                ->assertSee("You don't have permission to access that page.");
            $browser
                ->visit('/foods')
                ->assertSee('Print All')
                ->assertSee("You don't have permission to access that page.");
            $browser
                ->visit('/facilities')
                ->assertSee('Print All')
                ->assertSee("You don't have permission to access that page.");
            $browser
                ->visit('/print')
                ->assertSee('Print All')
                ->assertDontSee("You don't have permission to access that page.");

            $browser->click('@button_signout');
            $browser
                ->visit('/')
                ->assertSee('Sign In')
                ->type('@input_uname', 'admin1')
                ->type('@input_password', 'password')
                ->click('@button_signin');
            $browser
                ->visit('/residents')
                ->assertSee('Residents');
            $browser
                ->visit('/staff')
                ->assertSee('Staff');
            $browser
                ->visit('/foods')
                ->assertSee('Foods');
            $browser
                ->visit('/facilities')
                ->assertSee('Print All')
                ->assertSee("You don't have permission to access that page.");
            $browser
                ->visit('/print')
                ->assertSee('Print All')
                ->assertDontSee("You don't have permission to access that page.");

            $browser->click('@button_signout');
            $browser
                ->visit('/')
                ->assertSee('Sign In')
                ->type('@input_uname', 'admin0')
                ->type('@input_password', 'password')
                ->click('@button_signin');
            $browser
                ->visit('/residents')
                ->assertSee('Residents');
            $browser
                ->visit('/staff')
                ->assertSee('Staff');
            $browser
                ->visit('/foods')
                ->assertSee('Foods');
            $browser
                ->visit('/facilities')
                ->assertSee('Facilities');
            $browser
                ->visit('/print')
                ->assertSee('Print All');
            //$browser->screenshot('AuthTest');
        });
    }
}
