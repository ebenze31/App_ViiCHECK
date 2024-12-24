@extends('layouts.viicheck')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            @if (Auth::check())
                <!-- แสดงข้อมูลผู้ใช้ -->
                {{ Auth::user()->name }}
            @else
                <!-- ถ้าผู้ใช้ยังไม่ล็อกอิน -->
                User is not logged in.
            @endif
        </div>
    </div>
@endsection