<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use URL;
error_reporting(0);

class PortfolioController extends Controller
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

    public function index(){
        return view('backend.portfolio.index');
    }
    
    
    //create
    public function create(){
        $categories = FunctionsController::get_categories();
        return view('backend.portfolio.create', compact('categories'));
    }
    
    
}
























