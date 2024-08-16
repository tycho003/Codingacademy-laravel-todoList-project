<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body>
   <form action="{{ route('logout') }}" method="POST">
   @method('DELETE')
   <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounde focus:shadow-outline">Logout</button>
   <div>
    <h1> Welcome {{ Auth::user()->name }} </h1>
   </div>
   <div>
    <a class="" href="{{ route('tasks.create') }}">Create a new task</a>
   </div>
</form>
</body>
</html>