@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <a href="{{route('games.create')}}" class="btn btn-primary" role="button">Add</a>
        </div>
    </div>
    <br>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Games</div>

                <div class="panel-body">


                    <table class="table">
                        <thead>
                            <tr>
                                <th>game</th>
                                <th>user</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($games as $game)
                            <tr>
                                <td>{{ $game->name}}</td>
                                <td>{{$game->user->name}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection