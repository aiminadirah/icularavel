{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
</head>
<body>
    <h1>This is sign in page</h1>
</body>
</html> --}}

@extends('layouts.main')

@section('title', 'Sign In')

@section('content')

<div class="container mt-5">

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="{{ route('auth.authenticate')}}" method="POST">
        @csrf
        
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email">
      <div id="emailHelp" class="form-test" class="form-text">
    </div>
    <div class="mb-3>

      <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Login</button>
  </form>

</div>

@endsection