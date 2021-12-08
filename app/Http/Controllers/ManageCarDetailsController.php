<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageCarDetailsController extends Controller
{
   
   public function ManageCarDetails(){
       return view('admin.pages.managecardetails');
   }

}
