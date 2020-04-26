<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main');
    }

    public function about()
    {
        return view("about");
    }

    public function skill()
    {
        return view("skill");
    }
    
    public function project()
    {
        return view("project");
    }

    public function contact()
    {
        return view("contact");
    }

    public function submit(Request $request)
    {
        $request->validate([
            "name" => "string|required",
            "email" => "email|required",
            "message" => "string|required"
        ]);

        $message = new Contact;
        $message->message = $request->message;
        $message->email = $request->email;
        $message->name = $request->name;
        $message->save();
        
        return back();
    }
}
