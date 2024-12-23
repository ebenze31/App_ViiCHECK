@extends('layouts.viicheck')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="bg-card p-6 rounded-lg shadow-lg bg-white mx-[3%]">
            <img src="https://www.viicheck.com/img/logo/VII-check-LOGO-W-v1.png" alt="Logo" class="h-8 mb-4"></img>
            <h2 class="text-[18px] font-semibold text-muted-foreground mb-2">Change Password</h2>
            <p class="text-muted-foreground text-gray-400 mb-4">We received your reset password request. Please enter your email!</p>
            <label class="block text-muted-foreground  mb-1" for="email">Email</label>
            <input type="email" id="email" placeholder="Enter Your Email"
                class="border border-border rounded-lg p-2 w-full mb-4" />
            <button class="bg-red-600 text-white hover:bg-destructive/80 p-2 rounded-lg w-full">Reset Password</button>

        </div>
    </div>
@endsection
