@extends('dash views.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">create service category</h4>
                <form  method="POST" action="{{ route('service.store') }}"  enctype="multipart/form-data">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label text-right">Services category</label>
                      <div class="col-sm-10">
                          <select class="form-control" name="cat_id">
                            @foreach($service as $s)
                              <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-sm-2 col-form-label text-right">name</label>
                      <div class="col-sm-10">
                          <input class="form-control" type="text"  name="name">
                      </div>
                  </div>
                    <div class="form-group row">
                        <label for="example-number-input" class="col-sm-2 col-form-label text-right">cost</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="cost">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

</div><!--end row-->
@endsection
