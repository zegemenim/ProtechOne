<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (session('success'))
            return view('home')->with('success', session('success'));
        else if (session('error'))
            return view('home')->with('error', session('error'));
        else
            return view('home');
    }

    public function Contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        );

        // Example of sending email
        // Mail::send('emails.contact', $data, function ($message) use ($data) {
        //     $message->from($data['email']);
        //     $message->to('admin@localhost');
        //     $message->subject($data['subject']);
        // });

        return redirect(route('home') . "#contact")->with('success', 'Thank you for contacting us, we will get back to you as soon as possible.');
    }
}
