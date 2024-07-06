@extends('layouts.app')

@section('title','Todo App')

@section('content')

<div class="row mt-3">
    <div class="col-12">
        <ul class="list-group">
            @foreach($todos as $row)
            <li class="list-group-item"><a href="details/{{$row->id}}" class="text-dark text-decoration-none">{{$row->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>

@endsection