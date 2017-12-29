@extends('layouts.master')

@section('title')
    Single Player
@endsection

@section('content')
    <h1>{{ $player->first_name }} {{ $player->last_name }}</h1>
    <p>{{ $player->email }}</p>
    <p><a href="{{ route('single-team', ['id'=>$player->team->id]) }}">{{ $player->team->name }}</a></p>
@endsection