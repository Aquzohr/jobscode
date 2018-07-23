<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\JobPosition;


class ManagerController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      if(!$request->user()->hasRole(['manager'])){
        return view('welcome');
      }

      $company_id = Auth::user()->id;
      $jobs = JobPosition::where('company_id', $company_id)->get();

      return view('manager_home')->with('jobPositions', $jobs);
      
    }
}
