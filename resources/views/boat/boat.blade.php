@extends('layouts.app')

<form method="POST" action="/boats">
    @csrf
    <!-- Other form fields for creating a boat -->
    <select name="docks[]" multiple>
        @foreach($docks as $dock)
            <option value="{{ $dock->id }}">{{ $dock->name }}</option>
        @endforeach
    </select>
    <select name="cranes[]" multiple>
        @foreach($cranes as $crane)
            <option value="{{ $crane->id }}">{{ $crane->name }}</option>
        @endforeach
    </select>
    <select name="shifts[]" multiple>
        @foreach($shifts as $shift)
            <option value="{{ $shift->id }}">{{ $shift->name }}</option>
        @endforeach
    </select>
    <button type="submit">Add Boat</button>
</form>



@section('content')
    <h1>All Boats</h1>
    <!-- here we will add a loop to display all boats -->
    @foreach ($boats as $boat)
        <p>This is boat {{ $boat->name }}</p>
    @endforeach
@endsection