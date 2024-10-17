@extends('layouts.main')

@section('title', 'Feed List')

@section('content')
    <div class="container"> 
        @if (session('success'))
        <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
            <strong>success!</strong> Feed Updated Successfull.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        {{-- {{ dd ($feed);}} --}}
        {{-- @if(session('success'))
        @endif --}}

    <h1>Feed List</h1>

    <a
        type="button"
        class="btn btn-primary mb-3"
        href="{{ route("feed.create") }}"
        >
            New feed
    </a>
    {{-- <ul>
       {{-- {{dd($feeds)}} ; --}}
        {{-- @foreach ($feeds as $feed)
            <li>
                <a href="{{ route('feed.show', ['feed' => $feed->id])}}">{{
                    $feed->title }}
                </a>
            </li>
         @endforeach --}}
    {{-- </ul> --}} 

    @foreach ($feeds as $feed)
    <div class="card mb-3" style="width: 80%;">
        <div class="card-body">
          <p class="card-title">{{ $feed->title}}</p>
          <p class="card-text"
          style="color: blueviolet">
                {{ $feed->description}}</p>
         </div>
      </div>
    @endforeach

    <div class="d-flex justify-content-start">
        {{ $feeds->links() }}
    </div>

    </div>
@endsection

