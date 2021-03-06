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
                ->assertSee('Sign In')
                ->type('@input_uname', 'admin0')
                ->type('@input_password', 'password')
                ->click('@button_signin');
            $browser
                ->click('@button_residents')
                ->assertSee('Residents');
            // add residents for queue testing
            for ($i = 1; $i < 11; $i++) {
                $browser
                    ->click('@button_create')
                    ->type('@input_fname', 'fname_PrintTest' . $i)
                    ->type('@input_lname', 'lname_PrintTest' . $i)
                    ->select('@input_facility', '1')
                    ->type('@input_room', 'room_PrintTest' . $i)
                    ->click('@button_add');
            }
            $browser
                ->click('@button_print')
                ->assertSee('Print');
            $browser->click('@button_print_all');
            $window = collect($browser->driver->getWindowHandles())->last();
            $browser->driver->switchTo()->window($window);
            for ($i = 1; $i < 11; $i++) {
                $browser
                    ->assertSee('fname_PrintTest' . $i)
                    ->assertSee('lname_PrintTest' . $i)
                    ->assertSee('room_PrintTest' . $i);
            }
            $browser->driver->close();
            $window = collect($browser->driver->getWindowHandles())->first();
            $browser->driver->switchTo()->window($window);
            for ($i = 1; $i < 11; $i += 2) {
                $browser->click('@button_queue_' . $i);
            }
            $browser->click('@button_print_queue');
            $window = collect($browser->driver->getWindowHandles())->last();
            $browser->driver->switchTo()->window($window);
            for ($i = 1; $i < 11; $i += 2) {
                $browser
                    ->assertSee('fname_PrintTest' . $i)
                    ->assertSee('lname_PrintTest' . $i)
                    ->assertSee('room_PrintTest' . $i);
            }
            $browser->driver->close();
            $window = collect($browser->driver->getWindowHandles())->first();
            $browser->driver->switchTo()->window($window);
            for ($i = 1; $i < 11; $i++) {
                $browser->click('@button_queue_' . $i);
            }
            for ($i = 1; $i < 11; $i += 2) {
                $browser->click('@button_unqueue_' . $i);
            }
            $browser->click('@button_print_queue');
            $window = collect($browser->driver->getWindowHandles())->last();
            $browser->driver->switchTo()->window($window);
            for ($i = 2; $i < 11; $i += 2) {
                $browser
                    ->assertSee('fname_PrintTest' . $i)
                    ->assertSee('lname_PrintTest' . $i)
                    ->assertSee('room_PrintTest' . $i);
            }
            $browser->driver->close();
            $window = collect($browser->driver->getWindowHandles())->first();
            $browser->driver->switchTo()->window($window);
            for ($i = 1; $i < 11; $i++) {
                $browser->click('@button_queue_' . $i);
            }
            $browser
                ->click('@button_reset')
                ->click('@button_queue_1')
                ->click('@button_print_queue');
            $window = collect($browser->driver->getWindowHandles())->last();
            $browser->driver->switchTo()->window($window);
            $browser
                ->assertSee('fname_PrintTest1')
                ->assertSee('lname_PrintTest1')
                ->assertSee('room_PrintTest1');

            //$browser->screenshot('PrintTest');
        });
    }
}
