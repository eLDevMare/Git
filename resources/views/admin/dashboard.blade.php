@extends('layout')

@section('content')
<div class="fixed h-screen w-60 bg-gray-100 box-border shadow-xl">
    <div class="pt-8">
        <div class="text-center bg-gray font-bold">
            Arto Moro
        </div>
        <div class="pt-20 text-center text-xl font-medium font-serif pl-8 text-slate-50">
            <div class="flex">
                <div style="font-size: 2rem" class="pr-2">
                    <i class='bx bx-qr'></i>
                </div>
                <div class="leading-9">
                    <p class="text-orange-600">Dashboard</p>
                </div>
            </div>                    
            <div class="flex pt-3">
                <div style="font-size: 2rem" class="pr-2">
                    <i class='bx bx-qr'></i>
                </div>
                <div class="leading-9">
                    <p>Penyimpanan</p>
                </div>
            </div>     
        </div>
    </div>
</div>
    <section class="bg-gray-200 ml-[280px] flex w-full">
        <div>
            <div class="grid grid-cols-4 gap-8">
                <div class="bg-gray-700">
                    p
                </div>
                <div class="bg-gray-700">
                    p
                </div>
                <div class="bg-gray-700">
                    p
                </div>
                <div class="bg-gray-700">
                    p
                </div>
            </div>
        </div>
    </section>
@endsection
