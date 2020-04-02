<?php

namespace App\Http\Controllers;

use App\Resident;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = Resident::all()->where('active', true);
        return view('print.index', compact('residents'));
    }

    /**
     * Print the specified resources from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function cards(Request $request)
    {
        $queue = $request->get('queue');
        if (empty($queue)) {
            $residents = Resident::all()->where('active', true);
        } else {
            $residents = Resident::all()->where('active', true)->whereIn('id', explode(",", $queue));
        }
        return view('print/cards', compact('residents'));
    }
}
