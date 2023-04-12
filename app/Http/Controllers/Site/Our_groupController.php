<?php


namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;

class Our_groupController extends Controller
{
    //
    public function index()
    {
        $allData = Group::all();
        return view('site.our_group')->with(['allData' => $allData]);
    }
  
}
