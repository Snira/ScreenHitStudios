<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Email;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $user = Auth::user();

        return view('home',['posts' => $posts,'user' => $user]);
    }

    public function letterSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        $data = $request->input('email');

        $email = new Email();
        $email->email = $data;
        $email->save();

        return redirect()->route('home')->with('status', 'Bedankt voor het inschrijven!');
    }
}
