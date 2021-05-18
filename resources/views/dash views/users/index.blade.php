@extends('dash views.layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">


                <div class="float-right ">
                  <a href="{{route('users.create')}}">  <button  class="btn btn-info px-4 align-self-center report-btn">Create a user </button></a>
                </div>
                <h1><i class="fa fa-users"></i> User Administration <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
                <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                        <tr>
                          <th>img</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Date/Time Added</th>
                          <th>User Roles</th>
                          <th>location</th>
                          <th>birthdate</th>
                          <th>phone</th>
                          <th>active</th>
                          <th>rate</th>
                          <th>Operations</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                    <tr>
                        <td><img class="rounded-circle thumb-sm mr-1" src="/assets/img/{{$user->img}}"> </td>
                        <td>{{ $user->full_name }}</td>
                        <td>{{$user->username}}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                        <td>{{$user->location}}</td>
                        <td>{{$user->birthdate}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->active}}</td>
                        <td>{{$user->rate}}</td>
                        <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}

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
