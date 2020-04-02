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

        $uname = $request->get('uname');
        $password = $request->get('password');
        $employee = Staff::all()->where('uname', $uname);

        if ($employee->isEmpty()) {
            return redirect()->route('index');
        } else {
            if (Hash::check($password, $employee->get('password'))) {
                return redirect()->route('print');
            } else {
                return redirect()->route('print');
            }
        }
    }
}
