<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailSchedulerController extends Controller
{
    public function index()
    {
       
        return view('email_scheduler.index');
    
     
    }
}
