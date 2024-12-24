@extends('layouts.viicheck')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            @if (Auth::check())
                <p>Welcome, {{ Auth::user()->name }}</p>
            @else
                <p>User is not logged in.</p>
            @endif
        </div>
    </div>
@endsection