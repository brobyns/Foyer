<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller {

    public function index(){
        return User::all();
    }

    public function store(Request $request){
        $input = $request->all();
        User::create($input);
        return redirect('users');
    }

}
