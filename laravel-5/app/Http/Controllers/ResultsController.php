<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Race;
use App\Participation;
use App\User;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

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
	 * Display the specified resource.
	 *s
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$race = Race::findOrFail($id);
        $participations = Participation::where('race_id', $race->id)->orderBy('raceNumber', 'asc')->get();
        $users = array();
        foreach ($participations as $participation) {
            $users[] = $participation->user;
        }
        return view('/results/show', compact('users' , 'participations', 'race'));
	}

    private function export($id){
        $race = Race::findOrFail($id);
        $participations = Participation::where('race_id', $race->id)->orderBy('raceNumber', 'asc')->get();
        $users = array();
        $results = Array(array('firstname', 'name', 'dateofbirth', 'time', 'year'));
        foreach ($participations as $participation) {
            $user = User::find($participation['user_id']);
            $users[] = $participation->user;
            $results[] = array($user->firstName, $user->name, $user->dateOfBirth, $participation->time, $participation->year);
        }
        Excel::create('results', function($excel) use($results){
            $excel->sheet('Sheetname', function($sheet) use($results) {
                $sheet->fromArray($results, null, 'A1', false, false);
            });
        })->download('csv');

    }

}
