<?php namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller {

    public function index()
    {
        $users = User::all();
        return view('users/index', compact('users'));
    }

    public function store(UserRequest $request){
        $input = $request->all();
        User::create($input);
        return redirect('users');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('users/edit', compact('user'));
    }

    public function update($id, UserRequest $request){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('users');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->destroy($id);
        return redirect('users');
    }

}
