<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place_type;
class PlaceTypeController extends Controller
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
          $place=Place_type::all();
          return view('dash views.place_type.index')
          ->with('place',$place);
      }

      /**
          * Show the form for creating a new resource.
          *
          * @return Response
          */
      public function create()
      {
          //

          return view('dash views.place_type.create');
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
             'place_name'=>'required',
           ]);
     $cat= new Place_type();

         $cat->place_name=$request->place_name;

         $cat->save();

         return redirect('/place_type');
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

          $p=Place_type::find($id);
          return view('dash views.place_type.edite')
          ->with('p',$p);
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
             'place_name'=>'required',
           ]);
         $cat=Place_type::findOrFail($id);
         $cat->place_name=$request->place_name;
         $cat->update();
          return redirect('/place_type');
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


          $cat=Place_type::findOrFail($id);
          $cat->delete();
          return redirect('/place_type');
      }
}
