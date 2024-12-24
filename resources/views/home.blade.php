@extends('layouts.viicheck')

@section('content')
<style>
    main{
        height: 100dvh;
        overflow: hidden;
    }
</style>
    <div class="bg-background min-h-screen flex flex-col" style="height: calc(100dvh - 150px);padding-bottom: 140px;">
        <!-- SOS Button Section -->
        <div class="flex justify-center items-start my-4">
            <div class="w-full mx-[12%] my-[5%]">
                <button class="w-full bg-[#C70000] text-white text-2xl font-bold py-4 rounded-[16px] active:opacity-100 focus:outline-none drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
                    <div class="flex flex-col items-center">
                        <span class="text-4xl font-bold">SOS</span>
                        <span class="text-base">emergency assistance</span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Emergency Card Section -->
        <div class="flex-grow bg-card p-4 rounded-lg shadow-md mx-4 mb-2 bg-white overflow-y-auto relative"
            style=" ">
            <h2 class="rounded-lg font-bold text-[#db2d2e] sticky top-0 px-4 py-3 flex items-center font-semibold text-md bg-slate-50/90 white:bg-slate-700/90 backdrop-blur-sm ring-1 ring-slate-900/10 white:ring-black/10 z-20">Emergency Number in THAI</h2>
            <div class="mt-4 z-10" >
                <!-- Emergency Numbers -->
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3 ">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mx-2 bg-[#F5F5F5] py-2 px-3 rounded-[16px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)] mb-3">
                    <div>
                        <p class="text-[#db2d2e] m-0 text-[11px] font-bold leading-5">Scammer (nomna)</p>
                        <p class="text-[#db2d2e] m-0 text-[22px] font-bold leading-5">012-345-6789</p>
                    </div>
                    <div>
                        <div class="bg-[#db2d2e] h-[45px] w-[45px] flex items-center justify-center rounded-full">
                            <i class="fa-solid fa-phone text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
