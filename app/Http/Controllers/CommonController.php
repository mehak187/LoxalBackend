<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommonController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // return response()->json([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        $response = Http::post('https://localx-be20c6c46c77.herokuapp.com/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if ($response->successful()) {
            $data = $response->json();
            if (isset($data['token'])) {
                session(['user_token' => $data['token']]);
                return redirect()->route('admin.dashboard');
            }
            return back()->with('error', 'Invalid email or password.');
        } else {
            return back()->with('error', 'Unable to login. Please try again.');
        }
    }
    public function logout(){
        session()->forget('user_token');
        return redirect()->route('index')->with('success', 'Logged out successfully.');
    }

}
