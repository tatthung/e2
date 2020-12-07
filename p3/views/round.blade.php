@extends('templates.master')

@section('title')
Round Details

@endsection

@section('content')

<h2>Round Details<h2>
        <ul>
            <li>Player threw {{ $round['Player'] }}</li>
            <li>Computer threw {{ $round['Computer'] }}</li>
            <li>Who won this round: {{ $round['win'] }}</li>
            <li>Time: {{ $round['time']}}</li>
        </ul>

        <a href='/history' style='font-size:16px;'>Return to history page....</a>

        @endsection
