@extends('layouts.master')

@section('title')
    All Teams
@endsection

@section('content')
    <ul>
    @foreach($teams as $team)
        <li><a href="{{ route('single-team', ['id'=>$team->id]) }}">{{ $team->name }}</a></li>
    @endforeach
    </ul>
@endsection