<?php

namespace App\Http\Controllers;

use App\Resident;
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

        return view('residents.index', compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('residents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        return redirect('/residents')->with('success', 'Resident saved!');
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
        return view('residents.edit', compact('resident'));
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
        $resident = Resident::find($id);
        $resident->fname =  $request->get('fname');
        $resident->lname = $request->get('lname');
        $resident->room = $request->get('room');
        $resident->dine = $request->get('dine');
        $resident->likes = $request->get('likes');
        $resident->dislikes = $request->get('dislikes');
        $resident->allergies = $request->get('allergies');
        $resident->comment = $request->get('comment');
        $resident->save();

        return redirect('/residents')->with('success', 'Resident updated!');
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

        return redirect('/residents')->with('success', 'Resident deleted!');
    }
}
