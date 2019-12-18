@extends('layouts.app')
@section('title', 'Resumen')

@section('content')
    <ul class="list-group">
        @foreach ($users as $user)            
            <li class="list-group-item">
                <h4>{{ $user->name }}</h4>
                <em>Último ingreso: ---</em>
            </li>
        @endforeach
    </ul>
@endsection
