@extends('templates.master')

@section('title')
Rock-Scissors-Paper Game

@endsection

@section('content')

<h2>Instructions</h2>

<p>Throw one of your move by selecting the follow option and submit to win the game!</p>
<form method='POST' action='/play'>

    <label>
        <input type='radio' name='Player' value='rock'>
        Rock
    </label>

    <label>
        <input type='radio' name='Player' value='scissors'>

        Scissors
    </label>

    <label>
        <input type='radio' name='Player' value='paper'>

        Paper
    </label>

    <button type='submit'>Throw a move</button>

    @if($app->errorsExist())
    <ul class='error alert alert-danger'>
        @foreach($app->errors() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif


</form>

@if($results)

@if($results['win']=='Computer'){{ $mycls='lost'}}
@elseif($results['win']=='Player'){{ $mycls='won'}}
@else {{$mycls='tie'}}
@endif

<div class='{{ $mycls }}'>

    <p>You threw {{ $results['Player'] }}</p>
    <p>Computer threw {{ $results['Computer'] }}</p>

    @if($results['win']=='Computer')
    You Lost
    @elseif($results['win']=='Player')
    You Win
    @else
    Tie
    @endif

</div>

@endif

<a href='/history'>Game History....</a>

@endsection
