@extends('layouts.app')

@section('title','todo-details')

@section('content')
<div class="card text-center">
    <div class="card-header">
        TODO Details
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$todo->name}}</h5>
        <p class="card-text">{{$todo->description}}</p>
        <a href="/edit/{{$todo->id}}" class="btn btn-primary">Edit</a>
        <a href="/delete/{{$todo->id}}" class="btn btn-danger">Delete</a>
    </div>
</div>
@endsection