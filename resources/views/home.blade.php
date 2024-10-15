@extends('layouts.main')

@section('title', 'Home')

@section('content')

    @php
    $_name = $name ?? "team";
    @endphp 

    @if($_name == "aimi")
     <p>You're banned</p>
    @else
     <h1> Hello, {{ $_name }}</h1>      
    @endif
    <button type="button" class="btn btn-primary">Click me</button>
@endsection