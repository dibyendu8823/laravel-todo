<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {              
        // Role::create(['name'=>'asd']);
        // Permission::create(['name'=>'roles & permissions']);
        // auth()->user()->assignRole('asd');
        // auth()->user()->givePermissionTo('roles & permissions');

        // $employeeUser = User::where('role_type','Employee')->get();
        
        // $managerUser = User::where('role_type','User')->get();
        $users = User::all();
        
        
        return view('users.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('users.user.add', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $rules= [

            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|max:10|unique:users',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',

        ];

        $this->validate($request, $rules);        

        $userStore = new User();
        
        $userStore->name = $request['name'];
        $userStore->email = $request['email'];
        $userStore->password = bcrypt($request['password']);
        $userStore->phone_number = $request['phone_number'];
        $userStore->address = $request['address'];
        $userStore->public_status = $request['public_status'];

        $userStore->save();

        $roles = $request['roles']; //Retrieving the roles field

        
        //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();
            $userStore->assignRole($role_r); //Assigning role to user
            }
        }

        return redirect()->route('user.index')->with('message', 'New User Insert');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showUser = User::findOrFail($id);

        return view('users.user.show', compact('showUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userEdit = User::findOrFail($id);
        $roles = Role::get();

        return view('users.user.edit', compact('userEdit','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules= [

            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|max:10',
            'address' => 'required|string|max:255',
            'role_type' => 'required|string',
            'password' => 'confirmed',

        ];

        $this->validate($request, $rules);

        $userUpdate = User::find($id);

        $userUpdate->role_type = $request->role_type;
        $userUpdate->name = $request->name;
        $userUpdate->email = $request->email;
        $userUpdate->phone_number = $request->phone_number;
        $userUpdate->address = $request->address;

        $userUpdate->save();

        return redirect()->route('user.index')->with('message', 'User update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delUser = User::find($id);

        $delUser->delete();

        return redirect()->route('user.index')->with('message','Delete successfully.');
    }

    // Public Status
    public function publicStatus(Request $request, $id)
    {
        $statusUser = User::findOrFail($id);

        $statusUser->public_status = $request->public_status;

        $statusUser->save();

        return Redirect()->route('user.index')->with('message', 'User status is update successfully');
    }
}
