<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="mx-10 my-20">
        {{-- <span class="p-5 rounded-lg bg-gray-300 hover:bg-blue-300 transition-all ease-in-out hover:p-10">{{ __('hello testing again') }}</span> --}}
        <ul>
            <li class="mb-5">
                <a href="{{ url('/about') }}" class="px-4 py-2 bg-gray-100 rounded-md mb-4">About</a>
            </li>
            <li>
                <a href="{{ route('show_create_user') }}" class="px-4 py-2 bg-gray-100 rounded-md">Create User</a>
            </li>
        </ul>

    </body>
</html>
