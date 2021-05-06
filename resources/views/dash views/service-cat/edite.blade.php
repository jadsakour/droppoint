@extends('dash views.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">edit service category</h4>
                  <form method="POST" action="{{route('service_cat.update',$s->id)}}" enctype="multipart/form-data">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                    <div class="form-group">
                        <label for="n">name</label>
                        <input type="text" class="form-control" value="{{$s->name}}" id="n" name='name'>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

</div><!--end row-->
@endsection
