<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\RaceRequest;
use App\Race;
use App\Http\Controllers\Controller;

class RacesController extends Controller {

    public function __Construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $races = Race::all();
        return view('races/index')->with('races', $races);
    }

    public function create()
    {
        return view('races/create');
    }

    public function store(RaceRequest $request){
        $input = $request->all();
        Race::create($input);
        return redirect('races');
    }

    public function edit($id){
        $race = Race::findOrFail($id);
        return view('races/edit', compact('race'));
    }

    public function update($id, RaceRequest $request){
        $race = Race::findOrFail($id);
        $race->update($request->all());
        return redirect('races');
    }

    public function destroy($id){
        $race = Race::findOrFail($id);
        $race->destroy($id);
        return redirect('races');
    }

}
