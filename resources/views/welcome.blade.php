@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    <a href="{{ route('home') }}">
                        <x-logo class="w-8 h-8 mx-auto text-indigo-600" />
                    </a>

                    <h1 class="text-5xl font-extrabold text-center text-gray-600">
                        NBA Comparison Tracker
                    </h1>

                    <a href="{{ route('dashboard') }}" class="block text-5xl text-center" style="font-family: 'RocknRoll One', sans-serif;">
                        Enter
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
