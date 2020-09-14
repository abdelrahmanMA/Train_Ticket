@extends('template')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Date</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">User name</th>
      </tr>
    </thead>
    <tbody>
        {{-- {{$tickets}} --}}
        @foreach ($tickets as $ticket)
        {{-- {{$ticket}} --}}
        <tr>
            <th scope="row">{{$loop->index + 1 + (request()->input('page') > 1 ? request()->input('page') - 1 : 0) * 25}}</th>
            <td>{{$ticket->id}}</td>
            <td>{{$ticket->date}}</td>
            <td>{{$ticket->from}}</td>
            <td>{{$ticket->to}}</td>
            <td>{{$ticket->user->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ count($tickets) > 1 ? $tickets->appends(request()->except('page'))->links() : ''}}
@stop
