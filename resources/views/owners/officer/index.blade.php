@extends('layouts.app')
@section('content')

    <div class="m-auto w-4/6 py-7 bg-gradient-to-r from-gray-800 to-gray-500 rounded-md">
        <div class=" display-inline font-bold text-5xl text-center italic m-auto text-gray-300">
            DCI Officers
        </div>
        @if (Auth::user())
        <div class="pt-10 px-20 ">
            <a href="{{url('officer/create')}}"
            class="border-b-2 pb-2 border-dotted italic text-blue-400" >
                Add a new officer &rarr;
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
            <button class="ml-3 flex-1 bg-gray-600 rounded p-4 font-extrabold text-gray-400 text-xl mt-4">
                <a href="{{url('/')}}">home</a>
            </button>
        </div>
    @foreach ($officers as $officer)
        <div class="flex space-x-4 px-10 pt-5 text-gray-300">
            <div class="flex-1">
                <a href="{{url('officer/'.$officer->id)}}" class="text-gray-300 hover:text-gray-500">
                    {{$officer->officer_id}}
                </a>
            </div>
            <div class="flex-1">
                <p>{{$officer->officer_name}}</p>
            </div>
            @if (isset(Auth::user()->id) && Auth::user()->id >='{{$officer->user_id}}')
            <div class="flex-1">
                <a href="{{url('officer/'.$officer->id.'/edit')}}"
                 class="border-b-2 pt-3 pb-2 text-green-300 border-dotted italic">
                 Edit officer &rarrtl;
                 </a>
                 <form action="/officer/{{$officer->id}} " class="pt-3" method="POST">
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
