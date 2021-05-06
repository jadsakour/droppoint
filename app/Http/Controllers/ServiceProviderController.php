<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services_cat;
use App\Service;
use App\Service_provider;
use App\Place_type;
class ServiceProviderController extends Controller
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
      $serv=Service_provider::all();
      return view('dash views.service_provider.index')
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
      $place=Place_type::all();
      $service=Service::all();
      return view('dash views.service_provider.create')
      ->with('service',$service)
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
      //     'isOpen'=>'required',
      //     'open_time'=>'required',
      //     'close_time'=>'required',
      //     'place_type_id'=>'required',
      //     'service_id'=>'required',
      //     'location_longitude'=>'required',
      //     'location_Altitude'=>'required',
      //  ]);
 $cat= new Service_provider();

       $cat->name=$request->name;
       $cat->isOpen=$request->isOpen;
       $cat->open_time=$request->open_time;
       $cat->close_time=$request->close_time;
       $cat->place_type_id=$request->place_type_id;
       $cat->service_id=$request->service_id;
       $cat->location_longitude=$request->location_longitude;
       $cat->location_Altitude=$request->location_Altitude;

     $cat->save();

     return redirect('/service_provider');
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
      $place=Place_type::all();
      $service=Service::all();
      $ss=Service_provider::find($id);
      return view('dash views.service_provider.edite')
      ->with('service',$service)
      ->with('place',$place)
      ->with('ss',$ss);
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
         'isOpen'=>'required',
         'open_time'=>'required',
         'close_time'=>'required',
         'place_type_id'=>'required',
         'service_id'=>'required',
         'location_longitude'=>'required',
         'location_Altitude'=>'required',
       ]);
     $cat=Service_provider::findOrFail($id);
     $cat->name=$request->name;
     $cat->isOpen=$request->isOpen;
     $cat->open_time=$request->open_time;
     $cat->close_time=$request->close_time;
     $cat->place_type_id=$request->place_type_id;
     $cat->service_id=$request->service_id;
     $cat->location_longitude=$request->location_longitude;
     $cat->location_Altitude=$request->location_Altitude;
     $cat->update();
      return redirect('/service_provider');
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


      $cat=Service_provider::findOrFail($id);
      $cat->delete();
      return redirect('/service_provider');
  }
}
