<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
   public function index(){
    return view('aboutbasiccontorller');
   }
   public function detail(){
    return view('detailsController');
   }
}
