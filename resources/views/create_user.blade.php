<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new user</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="mx-auto inset-0 px-10 py-5">
    <div class="border p-10 rounded-xl w-1/2">
        <h2 class="text-xl">Create new user form</h2>

        <form method="POST" class="space-y-4 mt-3">
            <div class="">
                <label for="name">Name</label>
                <input type="text" name="name" class="bg-gray-50 p-2 border rounded-md w-full" placeholder="Enter name" />
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" class="bg-gray-50 p-2 border rounded-md w-full" placeholder="Enter email" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" class="bg-gray-50 p-2 border rounded-md w-full" placeholder="*******" />
            </div>

            <button type="submit" class="bg-orange-200 px-5 py-2 rounded-md hover:bg-orange-300 transition-all ease-in-out">submit</button>
        </form>
    </div>
</body>
</html>
