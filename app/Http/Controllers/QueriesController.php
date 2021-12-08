<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueriesController extends Controller
{
    public function Queries(){
        return view('admin.pages.queries');
    }
}
