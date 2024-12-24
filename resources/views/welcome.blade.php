@extends('layouts.viicheck')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            {{ session('user_id') }}
        </div>
    </div>
@endsection