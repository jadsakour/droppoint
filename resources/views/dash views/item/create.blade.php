@extends('dash views.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">create item</h4>
                <form  method="POST" action="{{ route('item.store') }}"  enctype="multipart/form-data">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label text-right">place id</label>
                      <div class="col-sm-10">
                          <select class="form-control" name="place_id">
                            @foreach($place as $s)
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
                        <label for="example-number-input" class="col-sm-2 col-form-label text-right">price</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">description</label>
                        <div class="col-sm-10">
                          <textarea class="form-control"  name="descriptions"></textarea>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">notes</label>
                        <div class="col-sm-10">
                          <textarea class="form-control"  name="notes"></textarea>

                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title"> Upload img </h4>

                                <input type="file" id="input-file-now" class="dropify" name="img" />
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

</div><!--end row-->
@endsection
