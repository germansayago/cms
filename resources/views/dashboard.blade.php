@extends('layouts.app')

@section('title', 'Resúmen')

@section('content')
    <ul class="list-group">
        @foreach($users as $user)
            <li class="list-group-item">
                <h4>{{ $user->name }}</h4>
                <em>Último Ingreso: ---</em>
            </li>
        @endforeach
    </ul>
@endsection
