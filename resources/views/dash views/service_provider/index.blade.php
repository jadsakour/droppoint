@extends('dash views.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title float-left">Service providers </h4>
                <div class="float-right ">
                  <a href="{{route('service_provider.create')}}">  <button  class="btn btn-info px-4 align-self-center report-btn">Create a service provider </button></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                                <th>isOpen</th>
                                <th>open_time</th>
                                <th>close_time</th>
                                <th>place_type_id</th>
                              <th>  service_id</th>
                                <th>location_longitude</th>
                              <th>  location_Altitude</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($serv as $s)
                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->isOpen}}</td>
                            <td>{{$s->open_time}}</td>
                            <td>{{$s->close_time}}</td>
                            <td>{{$s->place_type->place_name}}</td>
                            <td>{{$s->service->name}}</td>
                            <td>{{$s->location_longitude}}</td>
                            <td>{{$s->location_Altitude}}</td>
                            <td>
                                <a href="{{ route('service_provider.edit', $s->id) }}"><button type="button" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button></a>
                              <a>  <form action="{{ route('service_provider.destroy', $s->id) }}" method="POST"
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
