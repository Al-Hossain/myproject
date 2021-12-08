<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageCompanyController extends Controller
{
    public function ManageCompany(){
        return view('admin.pages.managecompany');
    }
}
