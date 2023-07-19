@extends('layouts.app')

@section('content')
    <h1>All Boats</h1>
    @foreach ($boats as $boat)
        <p>This is boat {{ $boat->name }}</p>
    @endforeach
    <a href="{{ route('boats.create') }}" class="btn btn-primary">Add a new boat</a>
@endsection
