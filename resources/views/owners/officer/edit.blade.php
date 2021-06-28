
@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
        <div class="text-center ">
            <h1 class="text-5xl uppercase italic bold text-gray-300">
                Edit Officer
            </h1>
        </div>
        <div class="text-center ">
            <h1 class="text-xl capitalize italic text-blue-300">
                you are editing officer id={{$officer->id}},name= {{$officer->officer_name}}
            </h1>
        </div>
        <div class="flex justify-center pt-20">
            <form action="/officer/{{$officer->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="block">
                        <label for="officerid">Enter officer new modified id</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officerid" value=" {{$officer->officer_id}} ">
                        <label for="officername">Modify officer  name</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officername" value=" {{$officer->officer_name}} ">
                        <label for="officerdescription">Modify officer  information</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officerdescription" value=" {{$officer->officer_description}} ">
                        <label for="officerrank">Modify officer rank</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="officerrank" value=" {{$officer->officer_rank}} ">
                        <label for="officerarmouryvehicle">Modify officer  armoury and vehicle
                            in poscession</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="armouryvehicle" value=" {{$officer->armouryvehicle}} ">
                        <label for="officerindiscipline">Modify officer indiscipline cases</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="indiscipline" value=" {{$officer->indiscipline}} ">
                        <label for="officerfamilymembers">Modify officer  family</label>
                        <input type="text"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400"
                        name="familymembers" value=" {{$officer->familymembers}} ">
                        <p for="officercontact" class="text-red-400 italic text-xl">
                            officer's contact</p>
                       <p class="block shadow-5xl mb-2 p-2 w-80 italic" >
                         {{$officer->contact}}</p>
                        <p  class="text-red-400 italic text-xl">
                           officer's email</p>
                        <p class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-400">
                            {{$officer->email}}</p>
                        <input type="file"
                        class="block shadow-5xl mb-2 p-2 w-80 italic placeholder-gray-900"
                        name="image">
                        <button class="bg-green-300 block shadow-5xl mb-10 p-2 w-80
                        uppercase font-bold hover:bg-gray-400 text-gray-600" type="submit">
                            Submit
                        </button>
                    </div>
            </form>
        </div>

        <div class="flex p-3">
            <button class="mr-5 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('officer')}}">officers</a>
            </button>
            <button class="ml-0 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('crime')}}">crime</a>
            </button>
            <button class="ml-1 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('/')}}">home</a>
            </button>
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

@endsection
