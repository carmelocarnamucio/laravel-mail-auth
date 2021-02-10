<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\TestMail;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function sendMail(request $request)
    {
        $data = $request -> validate([
          'mailText' => 'required'
        ]);

        Mail::to(Auth::user() -> email) -> send(new TestMail($data['mailText']));

        return redirect() -> back();
    }
}
