@section('main-content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Company</th>
      <th scope="col">Departure station</th>
      <th scope="col">Arrival station</th>
      <th scope="col">Departure time</th>
      <th scope="col">Arrival time</th>
      <th scope="col">Train code</th>
      <th scope="col">Train carriages</th>
      <th scope="col">In time</th>
      <th scope="col">Cancelled</th>
    </tr>
  </thead>

@forelse($trains as $train)
  <tbody>
    <tr>
      <th scope="row">{{$train->company}}</th>
      <td>{{$train->departure_station}}</td>
      <td>{{$train->arrival_station}}</td>
      <td>{{$train->departure_time}}</td>
      <td>{{$train->arrival_time}}</td>
      <td>{{$train->train_code}}</td>
      <td>{{$train->train_carriages}}</td>
      <td>{{$train->in_time}}</td>
      <td>{{$train->cancelled}}</td>
    </tr>   
  </tbody>

@empty
    <h2>Non ci sono treni</h2>

@endforelse
</table>

@endsection