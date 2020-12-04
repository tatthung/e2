@extends('templates.master')

@section('title')
Round Details

@endsection

@section('content')

<h2>Round Details<h2>
        <ul>
            <li>Player threw {{ $round['move'] }}</li>
            <li>Computer threw {{ $results['Computer']}}</li>
            <li>Results: {{ $round['win']}}</li>
            <li>Time: {{ $round['time']}}</li>
        </ul>

        @endsection
