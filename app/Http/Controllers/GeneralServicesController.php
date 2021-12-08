<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralServicesController extends Controller
{
    public function GeneralServices(){
        return view('admin.pages.generalservices');
    }
}
