@extends('dash views.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title float-left">Services Categoties</h4>
                <div class="float-right ">
                  <a href="{{route('service_cat.create')}}">  <button  class="btn btn-info px-4 align-self-center report-btn">Create a service category</button></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cat as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->name}}</td>

                            <td>
                                <a href="{{ route('service_cat.edit', $c->id) }}"><button type="button" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button></a>
                              <a>  <form action="{{ route('service_cat.destroy', $c->id) }}" method="POST"
                         style="display: inline"
                         onsubmit="return confirm('Are you sure?');">
                       <input type="hidden" name="_method" value="DELETE">
                       {{ csrf_field() }}
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                      </form></a>
                            </td>
                        </tr>
                         @endforeach
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!-- end col -->


</div> <!-- end row -->
@endsection
