<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Drop;
class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('/index')->with('lis',Drop::get());
    }

   
    public function create()
    {
        return view('/create');
    }

    public function store(Request $request)
    {

        Drop::create([
            'place'=> $request->input('place'),
    
                 'gps'=> $request->input('gps')
            
        ]);

        return redirect('/index');









    //     $entry = new Drop();
    // $entry->title = $request->input('title');
    // $entry->location = $request->input('location');
    // $entry->save();

    



// if($request->hasFile('image_path')){
//             $file = $request->file('image_path');
//             $extention = $file->getClientOriginalExtension();
//             $filename = time(). '-'.$extention;
//             $file->move('uploads/drop/',$filename);
//             $drop->image_path=$filename;
//         }
       


        // $newimagename = uniqid() . '-' . '.' .$request->place .$request->image_path->extension();
        // $request->image->move(public_path('images'),$newimagename);
        

        // drop::create([
        //     'place'=> $request->input('place'),
        //     'image_path'=> $newimagename,
        //     'gps'=> $request->input('gps')
        // ]);
       
        
        // // if($request->hasFile('image_path')){
        // //     $file = $request->file('image');
        // //     $extention = $file->getClientOriginalExtension();
        // //     $filename = time(). '-'.$extention;
        // //     $file->move('uploads/students',$filename);
        // //     $drop->image_path=$filename;
        // // }

        // // $st->save();

        
        //return redirect('/index');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
