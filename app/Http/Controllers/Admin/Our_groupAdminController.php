<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;

class Our_groupAdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allData = Group::all();
        return view('admin.group.list')->with(['allData' => $allData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.group.create');
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
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'images' => 'mimes:jpeg,png,jpg,gif',
            'link'=>'required',
        
        ]);
         //Store
         $data = new Group();
         $data->name_ar = $request->name_ar;
         $data->name_en = $request->name_en;
         $data->title_ar = $request->title_ar;
         $data->title_en = $request->title_en;
         $data->desc_ar = $request->desc_ar;
         $data->desc_en = $request->desc_en;
         $data->link = $request->link;
       

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
        return redirect()->route('group-data.index');
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
        $editData = Group::where('id', $id)->first();
        return view('admin.group.edit')->with(['editData' => $editData]);
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
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'images' => 'mimes:jpeg,png,jpg,gif',
            'link'=>'required',
        
        ]);
        //Update
        $data = group::find($id);
         $data->name_ar = $request->name_ar;
         $data->name_en = $request->name_en;
         $data->title_ar = $request->title_ar;
         $data->title_en = $request->title_en;
         $data->desc_ar = $request->desc_ar;
         $data->desc_en = $request->desc_en;
         $data->link = $request->link;

         if($request->file('images')){
             $file= $request->file('images');
             $filename= date('YmdHi').$file->getClientOriginalName();
             $file-> move(public_path('upload'), $filename);
            // $data['image']= $filename;
            $data->images = $filename;
        }else{  
        }
        $data->save();
        return redirect()->route('group-data.index');

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
        Group::destroy($id);
        return redirect()->route('group-data.index')->with('flash_message', 'Item deleted!');
    }
}


