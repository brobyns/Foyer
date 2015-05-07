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

    }
}
