@extends('templates.master')

@section('title')
Advance Rock-Scissors-Paper Game

@endsection

@section('content')

<h2>Instructions</h2>

<p>Throw one of your move by selecting the follow option and submit to win the game!</p>
<form method='POST' action='/play'>

    <label>
        <input type='radio' name='move' value='rock' checked>
        Rock
    </label>

    <label>
        <input type='radio' name='move' value='scissors'>

        Scissors
    </label>

    <label>
        <input type='radio' name='move' value='paper'>

        Paper
    </label>

    <button type='submit'>Throw a move</button>

</form>

@if($results)

@if($results['win']=='Computer'){{ $mycls='lost'}}
@elseif($results['win']=='move'){{ $mycls='won'}}
@else {{$mycls='tie'}}
@endif

<div class='{{ $mycls }}'>

    <p>You threw {{ $results['move'] }}</p>
    <p>Computer threw {{ $results['Computer'] }}</p>

    @if($results['win']=='Computer')
    You Lost
    @elseif($results['win']=='move')
    You Win
    @else
    Tie
    @endif

</div>

@endif

@endsection
