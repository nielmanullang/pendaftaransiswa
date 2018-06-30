<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Question;
use App\Result;
use App\Test;
use App\User;
use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::count();
        $users = User::whereNull('role_id')->count();
        $quizzes = Test::count();
        $average = Test::avg('result');
        $articles = Article::orderBy('id', 'desc')->limit('3')->get();
        return view('home', compact('questions', 'users', 'quizzes', 'average', 'articles'));
    }

    public function tentangkami()
    {
        return view('tentangkami');
    }

    public function visimisi()
    {
        return view('visimisi');
    }

    public function artikel()
    {
        $data = Article::get();
        return view('data', compact('data'));
    }
}
