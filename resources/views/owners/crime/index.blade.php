@extends('layouts.app')
@section('content')

    <div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
        <div class="display-inline font-bold text-5xl text-center italic m-auto text-gray-300">
            DCI officers
        </div>
        <div class="display-inline font-bold text-3xl capitalize text-center italic m-auto text-gray-400">
            crime section
        </div>
        @if (Auth::user())
        <div class="pt-10 px-20">
            <a href="{{url('officer/create')}}"
            class="border-b-2 pb-2 border-dotted italic text-blue-400" >
                Add a new crime &rarr;
            </a>
        </div>
        @endif
        <div class="flex p-3 sticky top-0 ">
            <button class="mr-5 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('officer')}}">officers</a>
            </button>
            <button class="ml-0 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('crime')}}">crime</a>
            </button>
            <button class="ml-4 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('/')}}">home</a>
            </button>
        </div>
    @foreach ($crimes as $crime)
        <div class="flex space-x-4 px-10 pt-5 text-gray-300">
            <div class="flex-1">
                <a href="{{url('crime/'.$crime->id)}}" class="text-gray-300 hover:text-gray-500">
                    {{$crime->crime_id}}
                </a>
            </div>
            <div class="flex-1">
                <p>{{$crime->crime_description}}</p>
            </div>
            @if (isset(Auth::user()->id) && Auth::user()->id >='{{$crime->user_id}}')
            <div class="flex-1">
                <a href="{{url('crime/'.$crime->id.'/edit')}}"
                 class="border-b-2 pt-3 pb-2 text-green-300 border-dotted italic">
                 Edit crime &rarrtl;
                 </a>
                 <form action="/crime/{{$crime->id}} " class="pt-3" method="POST">
                     @csrf
                     @method('delete')
                     <button type="submit"
                     class="border-b-2 pb-2 border-dotted italic text-red-400">
                         Delete &rarr;
                     </button>
                 </form>
             </div>
            @endif

          </div>
    @endforeach
</div>
@endsection
