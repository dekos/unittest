@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">add Games</div>

                <div class="panel-body">


                    <form method="POST" action="{{route('games.store')}}">
                       {{ csrf_field() }}
                        <div class="form-group">
                            <label for="text">Name:</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <button type="submit" class="btn btn-default">Add</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection