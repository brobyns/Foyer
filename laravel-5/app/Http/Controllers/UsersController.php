<?php namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Participation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UsersController extends Controller {

    public function __Construct(){
        $this->middleware('auth',['except' => 'store']);
    }

    public function index()
    {
        $users = User::all();
        return view('users/index', compact('users'));
    }

    public function create()
    {
        return view('users/create');
    }

    public function store(UserRequest $request){
        $input = $request->all();
        User::create($input);
        $user = User::find(20);
        $participation = new Participation([1,2015,$user->id, 1,1, Carbon::now(),0,0,0]);
        $user->participations()->save($participation);

        //return redirect('users');
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
