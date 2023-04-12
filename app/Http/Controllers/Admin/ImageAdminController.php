<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allData = News::all();
        return view('admin.news.list')->with(['allData' => $allData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            //'parent_id' => 'required',
            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
            'images' => 'mimes:jpeg,png,jpg,gif',
           
        
        ]);
         //Store
         $data = new News();
         $data->name_ar = $request->name_ar;
         $data->name_en = $request->name_en;
         

         if($request->file('images')){
             $file= $request->file('images');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('upload'), $filename);
            // $data['image']= $filename;
            $data->images = $filename;
        }else{
            $data->image = '';
        }
        $data->save();
        return redirect()->route('news-data.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $editData = News::where('id', $id)->first();
        return view('admin.news.edit')->with(['editData' => $editData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            //'parent_id' => 'required',
            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
            'images' => 'mimes:jpeg,png,jpg,gif',
            
            
        
        ]);
        //Update
        $data = news::find($id);
         $data->name_ar = $request->name_ar;
         $data->name_en = $request->name_en;
              

         if($request->file('images')){
             $file= $request->file('images');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('upload'), $filename);
            // $data['image']= $filename;
            $data->images = $filename;
        }else{  
        }
        $data->save();
        return redirect()->route('news-data.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        News::destroy($id);
        return redirect()->route('news-data.index')->with('flash_message', 'Item deleted!');
    }
}


