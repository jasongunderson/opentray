<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();

        return view('staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
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
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'facility' => 'required|integer',
            'permission' => 'required|integer'
        ]);

        $staff = new Staff([
            'facility' => $request->get('facility'),
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'permission' => $request->get('permission'),
            'active' => true,
        ]);
        $staff->save();
        return redirect('/staff')->with('success', 'Employee Saved');
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
        $staff = Staff::find($id);
        return view('staff.edit', compact('staff'));
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
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'facility' => 'required|integer',
            'permission' => 'required|integer'
        ]);

        $staff = Staff::find($id);
        $staff->facility = $request->get('facility');
        $staff->fname =  $request->get('fname');
        $staff->lname = $request->get('lname');
        $staff->permission = $request->get('permission');
        $staff->save();

        return redirect('/staff')->with('success', 'Employee Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->active = false;
        $staff->save();

        return redirect('/staff')->with('success', 'Employee Deactivated');
    }
}
