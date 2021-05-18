<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//Enables us to output flash messaging
use Session;

class UserController extends Controller {

    // public function __construct() {
    //     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    // }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
    //Get all users and pass it to the view
        $users = User::all();
        return view('dash views.users.index')->with('users', $users);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create() {
    //Get all roles and pass it to the view
        $roles = Role::get();
        return view('dash views.users.create', ['roles'=>$roles]);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request) {
    //Validate name, email and password fields
        $this->validate($request, [
          'full_name' => 'required|string|max:255',
          'username' => 'required|string|email|max:255|unique:users',
          'email' => 'required|string|email|max:255',
          'password' => 'required|string|min:6|confirmed',
          'img'=>'required',
          'location'=>'required',
          'birthdate'=>'required',
          'phone'=>'required',
          'active'=>'required',
          'rate'=>'required',
          'verified'=>'required',
          'verified_email'=>'required',
          'verified_phone'=>'required',
          'online'=>'required',
        ]);

        $user = User::create($request->only( 'password','full_name','username',  'email',
        'location',
        'birthdate',
        'phone',
        'active',
        'rate',
        'verified',
        'verified_email',
        'verified_phone',
        'online')); //Retrieving only the email and password data

        $roles = $request['roles']; //Retrieving the roles field
    //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();
            $user->assignRole($role_r); //Assigning role to user
            }
        }
        // get current time and append the upload file extension to it, // then put that name to $photoName variable.
               $img1 = $request->file('img');
               $img2=time().'.'.$request->img->getClientOriginalExtension();
              /*
               talk the select file and move it public directory and make avatars folder if doesn't exsit then give it that unique name.
              */
              $request->img->move(public_path('assets/img'), $img2);
                $user->img=$img2;
              $user->save();
    //Redirect to the users.index view and display message
        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully added.');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id) {
        return redirect('users');
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id) {
        $user = User::findOrFail($id); //Get user with specified id
        $roles = Role::get(); //Get all roles

        return view('dash views.users.edite', compact('user', 'roles')); //pass user and roles data to view

    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id) {
        $user = User::findOrFail($id); //Get role specified by id

    //Validate name, email and password fields
        $this->validate($request, [
            'password'=>'required|min:6|confirmed',
            'img'=>'required',
            'birthdate'=>'required',
        ]);
        $input = $request->only(['password','full_name',
        'username',
        'email',
        'location',
        'birthdate',
        'phone',
        'active',
        'rate',
        'verified',
        'verified_email',
        'verified_phone',
        'online',]); //Retreive the name, email and password fields
        $roles = $request['roles']; //Retreive all roles
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
        }
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }

        // get current time and append the upload file extension to it, // then put that name to $photoName variable.
               $img1 = $request->file('img');
               $img2=time().'.'.$request->img->getClientOriginalExtension();
              /*
               talk the select file and move it public directory and make avatars folder if doesn't exsit then give it that unique name.
              */
              $request->img->move(public_path('assets/img'), $img2);
                $user->img=$img2;
              $user->save();
        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully edited.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id) {
    //Find a user with a given id and delete
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully deleted.');
    }
}
