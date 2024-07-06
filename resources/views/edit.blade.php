@extends('layouts.app')
@section('title','Edit Todo')

@section('content')

<form action="/update/{{$todo->id}}" method="post" class="mt-4 p-4">
    @csrf
    <div class="m-3">
        <label for="name">Todo Name</label>
        <input type="text" class="form-control" name="name" value="{{$todo->name}}">
    </div>
    <div class="m-3">
        <label for="description">Todo Description</label>
        <textarea class="form-control" rows="3" name="description">{{$todo->description}}</textarea>
    </div>
    <div class="m-3">
        <input type="submit" class="btn btn-primary float-end" value="Update">
    </div>
</form>

@endsection