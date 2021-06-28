@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="display-inline font-bold mb-4 text-5xl text-center italic m-auto text-gray-300">
            DCI Officers
        </div>
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>
            </div>

        </section>
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
        <h1 class="uppercase text-gray-500 mt-3 text-5xl text-center mb-3">
            popular questions</h1>
        <div class="flex p-3 bg-gradient-to-r from-gray-900 to-gray-600 ">
            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                    What do we do?</h1>
                <ul class="ml-3 p-4">
                    <li class="ml-3 p-4 text-gray-400 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="ml-3 p-4 text-gray-400 text-xl">Quasi maxime sit error deleniti explicabo veritatis minima</li>
                    <li class="ml-3 p-4 text-gray-400 text-xl"> facilis a facere ipsa blanditiis cum, eum culpa?</li>
                    <li class="ml-3 p-4 text-gray-400 text-xl"> facilis a facere ipsa blanditiis cum, eum culpa?</li>
                    <li class="ml-3 p-4 text-gray-400 text-xl"> At, dignissimos magnam. Adipisci, beatae quasi?</li>
                </ul>
            </div>
            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                    What do we do?</h1>
                <ul class="ml-3 p-4">
                    <li class="ml-3 p-4 text-gray-400 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="ml-3 p-4 text-gray-400 text-xl">Quasi maxime sit error deleniti explicabo veritatis minima</li>
                    <li class="ml-3 p-4 text-gray-400 text-xl"> facilis a facere ipsa blanditiis cum, eum culpa?</li>
                    <li class="ml-3 p-4 text-gray-400 text-xl"> facilis a facere ipsa blanditiis cum, eum culpa?</li>
                    <li class="ml-3 p-4 text-gray-400 text-xl"> At, dignissimos magnam. Adipisci, beatae quasi?</li>
                </ul>
            </div>
        </div>
        <h1 class="uppercase text-gray-500 text-5xl mt-3 text-center mb-3">
            officers in command</h1>
        <div class="flex p-3 bg-gradient-to-r from-gray-900 to-gray-600 ">
            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                     commander</h1>
                    <img class="p-2 rounded m-4"
                    src="{{asset('images/commander.webp')}}" alt="" srcset="">
            </div>
            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                    leutenant</h1>
                    <img class="p-2 rounded m-4"
                    src="{{asset('images/aasa.jpg')}}" alt="" srcset="">
            </div>
            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                    major</h1>
                    <img class="p-2 rounded m-4"
                    src="{{asset('images/major].webp')}}" alt="" srcset="">
            </div>
        </div>
        <h1 class="uppercase text-gray-500 text-5xl text-center mt-3 mb-3">
            air strength</h1>
        <div class="flex p-3 bg-gradient-to-r from-gray-900 to-gray-600 ">

            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                     commander</h1>
                    <img class="p-2 rounded m-4"
                    src="{{asset('images/helicopter.webp')}}" alt="" srcset="">
            </div>
            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                    leutenant</h1>
                    <img class="p-2 rounded m-4"
                    src="{{asset('images/jet.webp')}}" alt="" srcset="">
            </div>
            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                    major</h1>
                    <img class="p-2 rounded m-4"
                    src="{{asset('images/rocket.webp')}}" alt="" srcset="">
            </div>
        </div>
        <h1 class="uppercase text-gray-500 text-5xl text-center mt-3 mb-3">
            services</h1>
        <div class="flex p-3 bg-gradient-to-r from-gray-900 to-gray-600 ">
            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                    to people</h1>
                <p class="text-gray-400 mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi adipisci
                corporis sequi cumque repudiandae reprehenderit minus odio! Deserunt ipsa
                laudantium quisquam voluptatum explicabo ratione quam tempora rem quibusdam
                laborum! Delectus.</p>
            </div>
            <div class="flex-1">
                <h1 class="uppercase text-gray-400 text-3xl text-center underline">
                    to government</h1>
                    <p class="text-gray-400 mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi adipisci
                    corporis sequi cumque repudiandae reprehenderit minus odio! Deserunt ipsa
                    laudantium quisquam voluptatum explicabo ratione quam tempora rem quibusdam
                    laborum! Delectus.</p>
            </div>
        </div>
        <div class="ml-20 pl-30 mt-4 p-20 w-4/5 ">
            <footer class=" text-center">
                <hr>
               <p class="mt-4"> &copy;2021 by me</p>
            </footer>
        </div>
    </div>
</main>
@endsection
