@extends('layouts.app')

@section('content')
    <h1>Add a New Boat</h1>
    <form method="POST" action="{{ route('boats.store') }}">
        @csrf
        <label for="name">Boat Name:</label>
        <input type="text" id="name" name="name">
        <!-- Add other fields as necessary -->
        <button type="submit">Add Boat</button>
    </form>
@endsection
