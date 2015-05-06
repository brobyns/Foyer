<?php namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\Race;
use App\Participation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

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
        $races = Race::all();
        return view('users/create', compact('races'));
    }

    public function store(UserRequest $request){
        $input = $request->all();
        $user = User::create($input);
        $race = Race::find(Input::get('distance'));
        $participation = new Participation(['race_id'=> $race->id,'year' => 2015,'user_id' => $user->id, 'raceNumber' =>$user->id,
                                            'chipNumber' => 0, "time"=>Carbon::now(),'paid' => 1,
                                            'wiredTransfer' => 1, 'signedUpOnline' => 1]);
        $user->participations()->save($participation);

        return redirect('users');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $races = Race::all();
        return view('users/edit', compact('user', 'races'));
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
