<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller {

    public function index(){
        return User::all();
    }

    public function store(CreateUserRequest $request){
        $input = $request->all();
        User::create($input);
        return redirect('users');
    }

}
