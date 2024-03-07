<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class PostController extends Controller
{
    //
    public function index(Request $request)
    {
      $data = Crud::all();
      return view('hello')->with("data",$data);
    }

    public function add(Request $request)
    {
      $crud = new Crud();
      $crud->first_name = $request->first_name;
      $crud->last_name = $request->last_name;
      $crud->mobile = $request->mobile;
      $crud->dob =date('Y-m-d',strtotime($request->dob));
      $crud->save();
      return redirect('/');
    }
    public function edit(Request $request)
    {
      $edit = Crud::find($request->id);
      $data = Crud::all();
      $data=['data'=>$data,"edit"=>$edit];
      return view('edit')->with($data);
    }
    public function update(Request $request)
    {
      $data = Crud::find($request->id);
      $data->update(
        [
          'first_name'=>$request->first_name,
          'last_name'=>$request->last_name,
          'mobile'=>$request->mobile,
          'dob'=>date('Y-m-d',strtotime($request->dob))
        ]
        );
        return redirect('/');
    }
    public function delete(Request $request)
    {
      $data = Crud::find($request->id);
      $data->delete();
      return redirect('/');


    }
}
