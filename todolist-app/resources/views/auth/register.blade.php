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
        <h1 class=' flex justify-center text-2xl'>Register</h1>

        <div class=" flex items-center justify-center">
            @if (Session::has('success'))
                <div class=" bg-gray-400 text-black border border-gray-400 px-4 py-3 rounded relative" role="alert">
                    <span>{{ Session::get('success') }}</span>
                </div>
            @endif
             @if (Session::has('error'))
                <div class=" bg-gray-400 text-red-600 border border-gray-400 px-4 py-3 rounded relative" role="alert">
                    <span>{{ Session::get('error') }}</span>
                </div>
            @endif
            <form class=" items-center justify-center" action="{{ route('registerPost') }}" method="POST">
                
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Name
                    </label>
                    <input class=" border border-black rounded w-full py-2 px-3 text-gray-700 focus:shadow-outline"
                        id="name" type="text" name="name">
                      @if ( $errors->has('name'))
                      <span class="text-red-600">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Email
                    </label>
                    <input
                        class="
      border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 focus:shadow-outline"
                        id="password" type="email" name="email">
                         @if ( $errors->has('email'))
                      <span class="text-red-600">{{ $errors->first('email') }}</span>
                      @endif

                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="border border-black rounded w-full py-2 px-3 text-gray-700 mb-3 focus:shadow-outline"
                        id="password" type="password" name="password">
                     @if ( $errors->has('password'))
                      <span class="text-red-600">{{ $errors->first('password') }}</span>
                      @endif


                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password confirmation
                    </label>
                    <input
                        class="
      rounded w-full py-2 px-3 text-gray-700 mb-3 border border-black focus:shadow-outline"
                        id="password" type="password" name="password_confirmation">
                         @if ( $errors->has('password_confirmation'))
                      <span class="text-red-600">{{ $errors->first('password_confirmation') }}</span>
                      @endif

                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounde focus:shadow-outline"
                        type="submit">
                        Sign Up
                    </button>

                </div>
            </form>
        </div>
    </div>
</body>

</html>
