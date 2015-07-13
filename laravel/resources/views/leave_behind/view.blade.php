@extends('app')

@section('content')

<div class="main-container">
    <div class="main-content">
        <div class="main-title">View Leave Behinds</div>
    </div>
</div>

<div class="row" id="viewLeaveBehind">
    <div class='col-md-6'>
        <table class="table table-hover table-striped">
            <th>Name</th>
            <th>Bio</th>
            <th></th>
            @foreach($clientDetails as $clientDetail)
                <tr>
                    <td>{{ $clientDetail->name }}</td>
                    <td>{{  $clientDetail->bio }}</td>
                    <td><button v-on="click: deleteLeaveBehind({{ $clientDetail->id }})" class="btn btn-primary btn-sm">Delete</button></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@stop