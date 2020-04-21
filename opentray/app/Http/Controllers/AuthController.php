<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Staff;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $request->validate([
            'uname' => 'required|max:255',
            'password' => 'required|max:255|string'
        ]);

        $password = $request->get('password');
        $employee = Staff::all()->where('uname', $request->get('uname'))->first();
        if (!isset($employee)) {
            return redirect()->route('index')->withErrors(["The user doesn't exist or the password is incorrect."]);
        } else {
            if (Hash::check($password, $employee->password)) {
                session(['permission' => $employee->permission]);
                session(['facility' => $employee->facility]);
                session(['fname' => $employee->fname]);
                session(['lname' => $employee->lname]);
                return redirect()->route('print');
            } else {
                return redirect()->route('index')->withErrors(["The user doesn't exist or the password is incorrect."]);
            }
        }
    }

    public function signout()
    {
        session()->flush();
        return redirect('/');
    }

    public function setPerm0()
    {
        session(['permission' => 0]);
    }

    public function setPerm1()
    {
        session(['permission' => 1]);
    }
    public function setPerm2()
    {
        session(['permission' => 2]);
    }
    public function setPerm3()
    {
        session(['permission' => 3]);
    }
}
