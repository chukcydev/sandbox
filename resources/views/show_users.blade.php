<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show users</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-44 bg-slate-400">

 @if (session()->has('success'))
    <div class="border-2 rounded-md border-green-600 px-4 py-2 bg-green-100">
        <span class="text-sm text-green-500">
            {{ session('success') }}
        </span>
    </div>
@endif

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    created
                </th>
                <th scope="col" class="px-6 py-3">
                    updated
                </th>
                <th scope="col" class="px-6 py-3">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $user->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->created_at->diffForHumans() }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->updated_at->diffForHumans() }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('delete_user', $user->id) }}">delete</a>
                    {{-- <a href="{{ url('/delete'.'/'.$user->id) }}">delete</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
