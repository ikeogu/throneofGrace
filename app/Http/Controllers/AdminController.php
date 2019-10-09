<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sermon;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $sermon = Sermon::all();
        return view('sermon/index',['sermon'=>$sermon]);
    }
}
