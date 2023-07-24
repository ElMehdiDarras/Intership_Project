@extends('layouts.app')

@section('content')
    <h1>Add a New Boat</h1>
    <form method="POST" action="{{ route('boats.store') }}">
        @csrf
        <label for="name">Boat Name:</label>
        <input type="text" id="name" name="name">

        <label for="visit_count">Visit Count:</label>
        <input type="number" id="visit_count" name="visit_count">

        <label for="merchandise_type">Merchandise Type:</label>
        <input type="text" id="merchandise_type" name="merchandise_type">

        <button type="submit">Add Boat</button>
    </form>
@endsection
