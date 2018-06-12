<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Question;
use App\Result;
use App\Test;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        return view('users.index_user', compact('user'));
    }

    public function generatePDF($id)
    {
        $user = User::findOrFail($id);
        $data = ['title' => 'to '.$user->nisn.' '.$user->namalengkap .' Welcome to SMP Blabla'];
        $pdf = PDF::loadView('results.myPDF', $data);

        return $pdf->download('blabla.pdf');
    }
}
