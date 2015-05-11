
                <table id="myTable" class="table table-striped table-bordered table-responsive tablesorter">
                    <thead>
                    <tr>
                        <th>{{Lang::get('participations.year')}}</th>
                        <th>{{Lang::get('participations.racenumber')}}</th>
                        <th>{{Lang::get('participations.chipnumber')}}</th>
                        <th>{{Lang::get('participations.time')}}</th>
                        <th>{{Lang::get('participations.distance')}}</th>
                        <th>{{Lang::get('participation_show.race')}}</th>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($participations as $participation)
                        <tr>
                            <td>{{ $participation->year }}</td>
                            <td>{{ $participation->raceNumber }}</td>
                            <td>{{ $participation->chipNumber }}</td>
                            <td>{{ $participation->time  }}</td>
                            <td>{{ $participation->race->distance  }}</td>
                            <td>
                                <a href="{{url('races/'.$participation->race->id).'/edit'}}">{{ $participation->race->nameOfTheRace }}</a>
                            </td>
                            <td>
                                <div class="form-group">
                                    <a href="{{url('participations/'.$participation->id).'/edit'}}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-wrench"></span>{{Lang::get('buttons.editbtn')}}</a>
                                </div>

                            </td>
                         </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{url('/users')}}" class="btn btn-lg btn-primary"></span>{{Lang::get('buttons.useroverviewbtn')}}</a>
