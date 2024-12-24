@extends('layouts.viicheck')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            {{ dd(session()->all()) }}
        </div>
    </div>
@endsection