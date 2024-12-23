@extends('layouts.viicheck')

@section('content')
    <div class="bg-background min-h-screen flex flex-col">
        <!-- SOS Button Section -->
        <div class="flex justify-center items-start my-4" style="height: 40%;">
            <div class="w-full mx-[12%] my-[5%]">
                <button class="w-full bg-red-600 text-white text-2xl font-bold py-4 rounded-lg active:opacity-100 focus:outline-none">
                    <div class="flex flex-col items-center">
                        <span class="text-4xl font-bold">SOS</span>
                        <span class="text-base mt-2">emergency assistance</span>
                    </div>
                </button>
            </div>
        </div>


        <!-- Emergency Card Section -->
        <div class="flex-grow bg-card p-4 rounded-t-lg shadow-md mx-4 mb-2 bg-white"
            style="min-height: calc(30vh); max-height: calc(70vh - 2rem); overflow-y-auto">
            <h2 class="text-lg font-semibold text-muted">Emergency Number in ..(ตัวใหญ่)..</h2>

            <div class="mt-4">
                <!-- Emergency Numbers -->
                <div class="flex justify-between items-center bg-muted p-2 rounded-lg mb-2">
                    <span class="text-red-600">Scammer (nomna)</span>
                    <a href="tel:0123456789" class="text-red-600 flex items-center">
                        012-345-6789
                        <img aria-hidden="true" alt="phone-icon" src="https://openui.fly.dev/openui/24x24.svg?text=📞"
                            class="ml-2" />
                    </a>
                </div>
                <div class="flex justify-between items-center bg-muted p-2 rounded-lg">
                    <span class="text-red-600">Scammer (nomna)</span>
                    <a href="tel:0123456789" class="text-red-600 flex items-center">
                        012-345-6789
                        <img aria-hidden="true" alt="phone-icon" src="https://openui.fly.dev/openui/24x24.svg?text=📞"
                            class="ml-2" />
                    </a>
                </div>
            </div>

        </div>

    </div>
@endsection
