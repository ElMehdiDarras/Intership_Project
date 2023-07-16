@extends('layouts.app')

@section('content')
    <h1>All Boats</h1>
    <!-- here we will add a loop to display all boats -->
    @foreach ($boats as $boat)
        <p>This is boat {{ $boat->name }}</p>
    @endforeach
@endsection