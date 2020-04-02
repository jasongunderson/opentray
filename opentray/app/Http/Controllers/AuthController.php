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

        //$value = session()->pull('key', 'default');

        $password = $request->get('password');
        $employee = Staff::all()->where('uname', $request->get('uname'))->first();
        if (!isset($employee)) {
            return redirect()->route('index')->withErrors(["The user doesn't exist or the password is incorrect."]);
        } else {
            if (Hash::check($password, $employee->password)) {
                session(['permission' => $employee->permission]);
                return redirect()->route('print');
            } else {
                return redirect()->route('index')->withErrors(["The user doesn't exist or the password is incorrect."]);
            }
        }
    }
}
