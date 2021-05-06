<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services_cat;
class ServicesCatController extends Controller
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
      return view('dash views.service-cat.index')
      ->with('cat',$cat);
  }

  /**
      * Show the form for creating a new resource.
      *
      * @return Response
      */
  public function create()
  {
      //

      return view('dash views.service-cat.create');
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
       ]);
 $cat= new Services_cat();

     $cat->name=$request->name;

     $cat->save();

     return redirect('/service_cat');
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

      $s=Services_cat::find($id);
      return view('dash views.service-cat.edite')
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
       ]);
     $cat=Services_cat::findOrFail($id);
     $cat->name=$request->name;
     $cat->update();
      return redirect('/service_cat');
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


      $cat=Services_cat::findOrFail($id);
      $cat->delete();
      return redirect('/service_cat');
  }
}
