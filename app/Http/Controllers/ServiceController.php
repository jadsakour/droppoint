<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services_cat;
use App\Service;

class ServiceController extends Controller
{
    //
    /**
      * Display a listing of the resource.
      *
      * @return Response
      */
  public function index()
  {
      //
      $cat=Services_cat::all();
      $serv=Service::all();
      return view('dash views.services.index')
      ->with('cat',$cat)
      ->with('serv',$serv);
  }

  /**
      * Show the form for creating a new resource.
      *
      * @return Response
      */
  public function create()
  {
      //
      $service=Services_cat::all();
      return view('dash views.services.create')
      ->with('service',$service);
  }

  /**
      * Store a newly created resource in storage.
      *
      * @return Response
      */
  public function store(Request $request)
  {
      //
      request()->validate([
         'name'=>'required',
         'cost'=>'required',
         'cat_id'=>'required',
       ]);
 $cat= new Service();

     $cat->name=$request->name;
     $cat->cost=$request->cost;
     $cat->cat_id=$request->cat_id;

     $cat->save();

     return redirect('/service');
  }


  /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
  public function edit($id)
  {
      //
      $service=Services_cat::all();
      $s=Service::find($id);
      return view('dash views.services.edite')
      ->with('service',$service)
      ->with('s',$s);
  }

  /**
      * Update the specified resource in storage.
      *
      * @param  int  $id
      * @return Response
      */
  public function update(Request $request,$id)
  {
      //
      request()->validate([
         'name'=>'required',
         'cost'=>'required',
         'cat_id'=>'required',
       ]);
     $cat=Service::findOrFail($id);
     $cat->name=$request->name;
     $cat->cost=$request->cost;
     $cat->cat_id=$request->cat_id;
     $cat->update();
      return redirect('/service');
  }

  /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return Response
      */
  public function destroy($id)
  {
      //


      $cat=Service::findOrFail($id);
      $cat->delete();
      return redirect('/service');
  }
}
