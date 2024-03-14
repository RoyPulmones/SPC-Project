<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mymodels;
use App\Models\User;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          $Newuserlist = User::all();
          return view('home', compact('Newuserlist'));
    }

    public function editss($id)
  {
    $edits = mymodel::find($id);
    return view('editasdas', compact('edits'));
  }

}
