@extends('layouts.viicheck')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            @if (Auth::check())
                {{ dd(Auth::user()) }}
            @else
                User is not logged in.
            @endif
        </div>
    </div>
@endsection