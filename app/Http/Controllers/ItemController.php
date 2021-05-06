<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_provider;
use App\Item;
class ItemController extends Controller
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
$p=Service_provider::all();
  $item=Item::all();
  return view('dash views.item.index')
  ->with('p',$p)
  ->with('item',$item);
}

/**
  * Show the form for creating a new resource.
  *
  * @return Response
  */
public function create()
{
  //
  $place=Service_provider::all();
  return view('dash views.item.create')
  ->with('place',$place);
}

/**
  * Store a newly created resource in storage.
  *
  * @return Response
  */
public function store(Request $request)
{
  //
  // request()->validate([
  //    'name'=>'required',
  //    'cost'=>'required',
  //    'cat_id'=>'required',
  //  ]);
$cat= new Item();

 $cat->name=$request->name;
 $cat->place_id=$request->place_id;
 $cat->price=$request->price;
 $cat->descriptions=$request->descriptions;
 $cat->notes=$request->notes;

 // get current time and append the upload file extension to it, // then put that name to $photoName variable.
        $img1 = $request->file('img');
        $img2=time().'.'.$request->img->getClientOriginalExtension();
       /*
        talk the select file and move it public directory and make avatars folder if doesn't exsit then give it that unique name.
       */
       $request->img->move(public_path('assets/img'), $img2);
         $cat->img=$img2;

 $cat->save();

 return redirect('/item');
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
  $place=Service_provider::all();
  $i=Item::find($id);
  return view('dash views.item.edite')
  ->with('place',$place)
  ->with('i',$i);
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
  // request()->validate([
  //    'name'=>'required',
  //    'cost'=>'required',
  //    'cat_id'=>'required',
  //  ]);
 $cat=Item::findOrFail($id);
 $cat->name=$request->name;
 $cat->place_id=$request->place_id;
 $cat->price=$request->price;
 $cat->descriptions=$request->descriptions;
 $cat->notes=$request->notes;
 if ($request->img){
 // get current time and append the upload file extension to it, // then put that name to $photoName variable.
        $img1 = $request->file('img');
        $img2=time().'.'.$request->img->getClientOriginalExtension();
       /*
        talk the select file and move it public directory and make avatars folder if doesn't exsit then give it that unique name.
       */
       $request->img->move(public_path('assets/img'), $img2);
         $cat->img=$img2;}
 $cat->update();
  return redirect('/item');
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


  $cat=Item::findOrFail($id);
  $cat->delete();
  return redirect('/item');
}


}
