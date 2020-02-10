<?php

namespace App\Http\Controllers;

use App\Resident;
use Session;
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
    public function cards()
    {
        return view('print/cards');
    }

    public function addqueue($id)
    {
        Session::put('test', $id);
        return redirect('/print');
    }

    public function test()
    {
        return view('test');
    }
}
