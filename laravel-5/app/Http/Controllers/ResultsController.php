<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Race;
use App\Participation;
use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResultsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *s
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$race = Race::findOrFail($id);
        //$participations = $race->participations;
        $participations = Participation::where('race_id', $race->id)->orderBy('raceNumber', 'asc')->get();
        $users = array();
        foreach ($participations as $participation) {
            $user = User::find($participation['user_id']);
            $users[] = $participation->user;
        }
        return view('/results/show', compact('users' , 'participations', 'race'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
