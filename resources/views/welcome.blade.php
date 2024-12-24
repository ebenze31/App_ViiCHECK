@extends('layouts.viicheck')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            {{ Auth::user()->name }}
        </div>
    </div>
@endsection