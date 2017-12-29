@extends('layouts.master')

@section('title')
    Single team
@endsection

@section('content')
    <h1>{{ $team->name }}</h1>
    <p>{{ $team->email }}</p>
    <p>{{ $team->address }}</p>
    <p>{{ $team->city }}</p>

    <h3>Players</h3>
    <ul>
    @foreach($team->players as $player)
        <li><a href="{{ route('single-player', ['playerId'=>$player->id]) }}">
            {{ $player->first_name }} {{ $player->last_name }}
        </a></li>
    @endforeach
    </ul>
@endsection