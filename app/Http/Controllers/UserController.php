<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //
    protected $paginationTheme = "bootstrap";

    public function index(){
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
        ]);

        
        return redirect()->route('users.index')->with('status', 'Acoount created!');
    }

    public function edit(User $user){
    
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user){
       
        $user->roles()->sync($request->roles);
        return redirect()->route('users.edit', $user)->with('info', 'Se asigno los roles correctamente');
    }

    public function destroy(User $user){
        $user->delete();
        return to_route('users.index');
    }
}
