<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body>
    <div class=" justify-center">
        <h1 class='flex justify-center text-2xl'>Login</h1>

        <div class=" flex items-center justify-center">
            @if (Session::has('success'))
                <div class=" bg-gray-400 text-black border border-gray-400 px-4 py-3 rounded relative" role="alert">
                    <span>{{ Session::get('success') }}</span>
                </div>
            @endif
            @if (Session::has('error'))
                <div class=" bg-gray-400 text-black border border-gray-400 px-4 py-3 rounded relative" role="alert">
                    <span>{{ Session::get('error') }}</span>
                </div>
            @endif
            <form action="{{ route('loginPost') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Email
                    </label>
                    <input
                        class="
      border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 focus:shadow-outline"
                        id="password" type="email" name="email">
                    @if ($errors->has('email'))
                        <span class="text-red-600">{{ $errors->first('email') }}</span>
                    @endif

                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 focus:shadow-outline"
                        id="password" type="password" name="password">
                    @if ($errors->has('password'))
                        <span class="text-red-600">{{ $errors->first('password') }}</span>
                    @endif


                </div>


                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounde focus:shadow-outline"
                        type="submit">
                        Sign in
                    </button>

                </div>
            </form>
        </div>
    </div>
</body>

</html>
