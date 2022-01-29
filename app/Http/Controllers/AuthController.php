<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterPage()
    {
        $page_title = 'Create an account';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('auth.register', compact('page_title', 'page_description','action'));
    }

    public function registerUser( Request $request)
    {
        // register a user 
        // validate the form data
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function showLoginPage()
    {
        
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('auth.login', compact('page_title', 'page_description','action'));
    } 

    public function loginUser(Request $request)
    { 

        // authenticate user
        if (auth()->attempt($request(['email', 'password']))) {
            // Authentication passed...
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'message' => 'Please check your credentials and try again.',
        ]);
    }
}
