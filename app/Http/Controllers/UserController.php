<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
class UserController extends Controller
{

    // public function __construct()
    // {
    //     // los middleware donde protegera la ruta
    //     $this->middleware('can:admin.users.index')->only('index');
    //     $this->middleware('can:admin.users.create')->only('create', 'store', 'destroy');
    //     $this->middleware('can:admin.users.edit')->only('edit', 'update');
    //     $this->middleware('can:admin.users.destroy')->only('destroy');
    // }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $user = new User();
         $roles = Role::pluck('name','name')->all();
         $UsersRoles = $user->roles()->pluck('name','name');

        return view('user.create', compact('user','roles','UsersRoles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request): RedirectResponse
    {
        // $validated = $request->safe();
        // User::create($request->validated());

        // $User = new User();
        // $User->name = $request->name;
        // $User->surname = $request->surname;
        // $User->identification_card = $request->identification_card;
        // $User->user = $request->user;
        // $User->email = $request->email;
        // $User->password = $request->password;
        // $User->password = $request->confirm_password;
        // $User->save();

         $users = $request->all();
        $users['password'] = Hash::make($users['password']);

        $user = User::create($users);
        $user->assignRole($request->role_id);

        return Redirect::route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $user = User::FindorFail($id);
        $roles = Role::pluck('name','name')->all();
        $UsersRoles = $user->roles()->pluck('name','name');
        return view('user.edit', compact('user','roles','UsersRoles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // $user->update($request->validated());

         $Users = User::FindOrFail($id);

        $Users->roles()->sync($request->roles);
        $Users->name = $request->name;
        $Users->surname = $request->surname;
        $Users->identification_card = $request->identification_card;
        $Users->user = $request->user;
        $Users->email = $request->email;
        if($Users->password == $request->password):
         $Users->password = $request->password;
        else:
         $Users->password = bcrypt($request->password);
        endif;

        $Users->update();
         DB::table('model_has_roles')->where('model_id',$id)->delete();
        $Users->assignRole($request->role_id);

        return Redirect::route('users.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        User::find($id)->delete();

        return Redirect::route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
