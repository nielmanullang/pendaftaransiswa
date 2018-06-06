<?php

namespace App\Http\Controllers;

use Auth;
use App\Test;
use App\TestAnswer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreResultsRequest;
use App\Http\Requests\UpdateResultsRequest;

class ResultsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('index', 'show');
    }

    /**
     * Display a listing of Result.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (Auth::user()->isAdmin()) {
            $data = Test::all()->load('user');
            $results = [];
            foreach ($data as $key => $value) {
                $datas['count'] = TestAnswer::where('user_id', $value->user_id)->count('test_id');
                $datas['result'] = $value->result;

                $datas['nisn'] = $value->user->nisn;
                $datas['namalengkap'] = $value->user->namalengkap;
                $datas['id'] = $value->id;
                $datas['user_id'] = $value->user_id;
                $datas['created_at'] = $value->created_at;

                $results[] = $datas;
            }
            return view('results.indexs', compact('results'));
        }else{
            $results = Test::where('user_id', Auth::id())->first();
            $count = TestAnswer::where('user_id', Auth::id())->count('test_id');
            return view('results.index', compact('results', 'count'));
        }
    }

    /**
     * Display Result.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id)->load('user');

        if ($test) {
            $results = TestAnswer::where('test_id', $id)
                ->with('question')
                ->with('question.options')
                ->get()
            ;
            $count = TestAnswer::where('test_id', $id)->count('test_id');
        }

        return view('results.show', compact('test', 'results', 'count'));
    }
}
