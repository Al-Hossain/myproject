<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCompanyController extends Controller
{

        public function AddCompany(){
            return view('admin.pages.addcompany');
        }
}
