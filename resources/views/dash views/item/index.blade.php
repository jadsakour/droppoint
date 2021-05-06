@extends('dash views.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title float-left">items </h4>
                <div class="float-right ">
                  <a href="{{route('item.create')}}">  <button  class="btn btn-info px-4 align-self-center report-btn">Create an item </button></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>  img</th>
                            <th>name</th>
                            <th>place id</th>
                            <th>price</th>
                            <th>descriptions</th>
                          <th>  notes</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($item as $s)
                        <tr>
                            <td>{{$s->id}}</td>
                            <td><img src="assets/img/{{$s->img}}" alt="" class="rounded-circle thumb-sm mr-1"></td>
                            <td>{{$s->name}}</td>
                            @foreach($p as $pp)
                            @if($s->place_id == $pp->id)
                            <td>{{$pp->name}}</td>
                            @endif
                            @endforeach
                            <td>{{$s->price}}</td>
                            <td>{{$s->descriptions}}</td>
                            <td>{{$s->notes}}</td>


                            <td>
                                <a href="{{ route('item.edit', $s->id) }}"><button type="button" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button></a>
                              <a>  <form action="{{ route('item.destroy', $s->id) }}" method="POST"
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
