<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Participation;
use App\User;
use Illuminate\Http\Request;

class ParticipationsController extends Controller {

	public function index(){
        return Participation::all();
    }

    public function show($id){
        $user = User::findOrFail($id);
        $participations = $user->participations;
        return view('/participations/show', compact('user', 'participations'));
    }

    public function edit($id){

    }

    public function store(Request $request){
        $race = Race::find(Input::get('distance'));
        if($race){
            $participation = new Participation(['race_id'=> $race->id,'year' => $race->year,'user_id' => $user->id,
                'raceNumber' =>$user->id, 'chipNumber' => 0,
                "time"=>Carbon::now(),'paid' => 1,
                'wiredTransfer' => 1, 'signedUpOnline' => 1]);
            $user->participations()->save($participation);
        }
    }
}
