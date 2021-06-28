@extends('layouts.app')
@section('content')

<div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
        <div class="display-inline font-bold text-5xl text-center italic m-auto text-gray-300">
            DCI Crime
        </div>
        <div class="pt-10 px-20 border-b-2 pb-2 text-3xl border-dotted italic text-blue-400">
                crime {{$crime->crime_id}}&rarr;Details are:
        </div>
        <div class=" text-gray-200">
            <div class=" px-10 text-gray-400 italic text-xl">crime description
                <p class=" text-gray-300">{{$crime->crime_description}}</p>
            </div>
        </div>
        <div class="flex space-x-4 px-10 pt-5 ">
            <div class="flex-1 text-gray-200">
                <h3 class="text-gray-400 font-sans md:font-serif">officer id</h3>
                <p>{{$crime->officer_id}}</p>
            </div>
        </div>
        <div class="flex p-3">
            <button class="mr-5 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('officer')}}">officers</a>
            </button>
            <button class="ml-0 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('crime')}}">crime</a>
            </button>
            <button class="ml-3 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('/')}}">home</a>
            </button>
        </div>
</div>
@endsection
