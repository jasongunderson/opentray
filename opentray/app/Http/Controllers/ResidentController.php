<?php

namespace App\Http\Controllers;

use App\Resident;
use App\Facility;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = Resident::all()->where('active', true);
        $facilities = Facility::all()->where('active', true);

        return view('residents.index', compact('residents'), compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facilities = Facility::all()->where('active', true);

        return view('residents.create', compact('facilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'facility' => 'required|integer',
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'room' => 'required|max:255',
            'dine' => 'max:255',
            'likes' => 'max:255',
            'dislikes' => 'max:255',
            'allergies' => 'max:255',
            'comment' => 'max:255'
        ]);

        $resident = new Resident([
            'facility' => $request->get('facility'),
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'room' => $request->get('room'),
            'dine' => $request->get('dine'),
            'likes' => $request->get('likes'),
            'dislikes' => $request->get('dislikes'),
            'allergies' => $request->get('allergies'),
            'comment' => $request->get('comment'),
            'active' => true
        ]);
        $resident->save();
        return redirect('/residents')->with('success', 'Resident Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resident = Resident::find($id);
        $facilities = Facility::all()->where('active', true);

        return view('residents.edit', compact('resident'), compact('facilities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'facility' => 'required|integer',
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'room' => 'required|max:255',
            'dine' => 'max:255',
            'likes' => 'max:255',
            'dislikes' => 'max:255',
            'allergies' => 'max:255',
            'comment' => 'max:255'
        ]);

        $resident = Resident::find($id);
        $resident->fname =  $request->get('fname');
        $resident->lname = $request->get('lname');
        $resident->room = $request->get('room');
        $resident->dine = $request->get('dine');
        $resident->likes = $request->get('likes');
        $resident->dislikes = $request->get('dislikes');
        $resident->allergies = $request->get('allergies');
        $resident->comment = $request->get('comment');
        $resident->facility = $request->get('facility');
        $resident->save();

        return redirect('/residents')->with('success', 'Resident Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $resident = Resident::find($id);
        $resident->active = false;
        $resident->save();

        return redirect('/residents')->with('success', 'Resident Deactivated');
    }
}
