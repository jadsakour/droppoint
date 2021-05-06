@extends('dash views.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">create service category</h4>
                <form method="POST" action="{{route('service_provider.update',$ss->id)}}" enctype="multipart/form-data">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-2 col-form-label text-right">name</label>
                      <div class="col-sm-10">
                          <input class="form-control" type="text"  name="name" value="{{$ss->name}}">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label text-right">Service </label>
                      <div class="col-sm-10">
                          <select class="form-control" name="service_id">
                            @foreach($service as $s)
                            @if($s->id == $ss->id)
                              <option value="{{$s->id}}" selected>{{$s->name}}</option>
                              @endif
                              <option value="{{$s->id}}" >{{$s->name}}</option>

                            @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label text-right">place type </label>
                      <div class="col-sm-10">
                          <select class="form-control" name="place_type_id">
                            @foreach($place as $p)
                            @if($p->id == $ss->id)
                              <option value="{{$p->id}}" selected>{{$p->place_name}}</option>
                            @endif
                              <option value="{{$p->id}}">{{$p->place_name}}</option>

                            @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label text-right">is open</label>
                      <div class="col-sm-10">
                          <select class="form-control" name="isOpen">
                              <option value="1">yes</option>
                              <option value="0">no</option>

                          </select>
                      </div>
                  </div>
                  <div class="form-group row">

                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">open time</label>
                    <div class="input-group clockpicker  col-sm-10">
                        <input type="text" class="form-control" value="{{$ss->open_time}}" name='open_time'>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">

                    <label for="example-text-input" class="col-sm-2 col-form-label text-right">closing time</label>
                    <div class="input-group clockpicker col-sm-10">
                        <input type="text" class="form-control" value="{{$ss->open_time}}" name='close_time'>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-2 col-form-label text-right">location_longitude</label>
                      <div class="col-sm-10">
                        <textarea class="form-control"  name="location_longitude">{{$ss->location_longitude}}</textarea>

                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-2 col-form-label text-right">location_Altitude</label>
                      <div class="col-sm-10">
                        <textarea class="form-control"  name="location_Altitude">{{$ss->location_Altitude}}</textarea>

                      </div>
                  </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

</div><!--end row-->
@endsection
