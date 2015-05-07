 <table id="myTable" class="table table-striped table-bordered table-responsive">
    <thead>
        <tr>
            <td>{{Lang::get('users.firstname')}}</td>
            <td>{{Lang::get('users.name')}}</td>
            <td>{{Lang::get('users.dateofbirth')}}</td>
            <td>{{Lang::get('participations.time')}}</td>
            <td>{{Lang::get('participations.year')}}</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            @foreach($user->participations as $participation)
                <tr>
                    <td>{{ $user->firstName }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->dateOfBirth }}</td>
                    <td>{{ $participation->time }}</td>
                    <td>{{ $participation->year }}</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>