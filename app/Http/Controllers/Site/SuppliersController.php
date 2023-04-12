<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suppliers;


class SuppliersController extends Controller
{
    //
      /*====Suppliers=============================*/
    
      public function index()
      {
         
          $allData = Suppliers::all();
          return view('site.suppliers')->with(['allData' => $allData]);
      }
}
