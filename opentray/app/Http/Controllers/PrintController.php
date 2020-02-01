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
    public function cards($queue)
    {
        $residents = Resident::all()->where('active', true);
        return view('print/cards', compact('residents'));
    }
}
