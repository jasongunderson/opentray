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
                ->visit('/facillities')
                ->assertSee('Sign In');
            $browser
                ->visit('/print')
                ->assertSee('Sign In');
            //$browser->screenshot('AuthTest');
        });
    }
}
