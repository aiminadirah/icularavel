@extends('layouts.main')

@section('title', 'Feed List')

@section('content')

    <h1>Feed Listing Edit</h1>

    <div class="container"> 
    
        {{-- @if ($errors->any())
        @endif --}}
        <form action="{{ route('feed.update', ['feed' => $feed->id])}}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title">Feed Title</label>
            <input
            type="text" 
            name="title" 
            id="title" 
            class="form-control"
            value="{{ old('title', $feed->title)}}"
            {{-- required --}}
            minlength="3"
            maxlength="100">
        </div>

        <div class="mb-3">
            <label for="title">Description</label>
            <textarea
            type="text" 
            name="description" 
            id="description" 
            class="form-control"
            cols="30"
            rows="10">{{ old('description' , $feed->description)}}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Feed</button>
    </form>
    </div>
@endsection