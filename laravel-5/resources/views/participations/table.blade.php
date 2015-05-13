
                <table id="myTable" class="table table-striped table-bordered table-responsive tablesorter">
                    <thead>
                    <tr>
                        <th>{{Lang::get('participations.year')}}</th>
                        <th>{{Lang::get('users.firstname')}}</th>
                        <th>{{Lang::get('users.name')}}</th>
                        <th>{{Lang::get('users.dateofbirth')}}</th>
                        <th>{{Lang::get('participations.racenumber')}}</th>
                        <th>{{Lang::get('participations.chipnumber')}}</th>
                        <th>{{Lang::get('participations.time')}}</th>
                        <th>{{Lang::get('participations.distance')}}</th>
                        <th>{{Lang::get('races.race')}}</th>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($participations as $participation)
                        <tr>
                            <td>{{ $participation->year }}</td>
                            <td>{{ $participation->user->firstName }}</td>
                            <td>{{ $participation->user->name }}</td>
                            <td>{{ $participation->user->dateOfBirth }}</td>
                            <td>{{ $participation->raceNumber }}</td>
                            <td>{{ $participation->chipNumber }}</td>
                            <td>{{ $participation->time  }}</td>
                            <td>{{ $participation->race->distance  }}</td>
                            <td>
                                <a href="{{url('races/'.$participation->race->id).'/edit'}}">{{ $participation->race->nameOfTheRace }}</a>
                            </td>
                            <td>
                                <div class="form-group">
                                    <a href="{{url('participations/'.$participation->user_id.'/'. $participation->year.'/edit')}}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-wrench"></span>{{Lang::get('buttons.editbtn')}}</a>
                                </div>

                            </td>
                         </tr>
                    @endforeach
                    </tbody>
                </table>
