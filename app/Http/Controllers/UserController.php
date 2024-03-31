<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function check_login(Request $request)
    {
        

$email = $request->input('email');
$password = $request->input('password');

if (Auth::attempt(['email' => $email, 'password' => $password])) {
    // Authentication was successful
    $user = Auth::user();
    Session::put('name', $user->name);
    Session::put('role_id', $user->role_id);
    if ($user->hasRole('admin')) {
        return redirect()->route('admin_dashboard')->with('success', 'admin Login Successfully');
    }
    else if ($user->hasRole('editor')) {
        return redirect()->route('editor_dashboard')->with('success', 'editor Login Successfully');
    }
    else if ($user->hasRole('viewer')) {
        return redirect()->route('viewer_dashboard')->with('success', 'viewer Login Successfully');
    }
    
} else {
    // Authentication failed
    return response()->json(['message' => 'Invalid username or password'], 401);
}
        
    }

    public function admin_dashboard()
    {
        return view('admin_dashboard');
    }

    public function editor_dashboard()
    {
        return view('editor_dashboard');
    }

    public function viewer_dashboard()
    {
        return view('viewer_dashboard');
    }
    public function logout()
    {
        Auth::logout();
    
    // Redirect to a specific route after logout
    return redirect('/login');
    }
}
