<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
class QuoteController extends Controller
{
    public function quote_form(){
        return view('frontend.form.quote');
    }
    
}