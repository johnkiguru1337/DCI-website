
@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
        <div class="text-center ">
            <h1 class="text-5xl uppercase italic bold text-gray-300">
                Edit Crime
            </h1>
        </div>
        <div class="text-center ">
            <h1 class="text-xl capitalize italic text-blue-300">
                you are editing Crime id={{$crime->crime_id}},name= {{$crime->crime_id}}
            </h1>
        </div>
        <div class="flex justify-center pt-20">
            <form action="/crime/{{$crime->id}}" method="POST">
                @csrf
                @method('PUT')
                <label for="crimeid" class=" text-gray-300">
                    Enter crime {{$crime->crime_id}} new modified information</label>
                    <div class="block">
                        <label for="officerid">Modify officer  id</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officerid" value=" {{$crime->officer_id}} ">
                        <label for="officerdescription">Modify crime  information</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="crimedescription" value=" {{$crime->crime_description}} ">
                        <button class="bg-green-300 block shadow-5xl mb-10 p-2 w-80
                        uppercase font-bold hover:bg-gray-400 text-gray-600" type="submit">
                            Submit
                        </button>
                    </div>
            </form>
        </div>
    </div>

@if ($errors->any())
    <div class="w-4/5 m-auto text-center">
        @foreach ($errors->all() as $error)
        <ul>
            <li class="text-red-500 list-none"> {{$error}} </li>
        </ul>
        @endforeach
    </div>
@endif
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

@endsection
