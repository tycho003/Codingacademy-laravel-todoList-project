<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-4 mx-auto">
        
        <form class="bg-white rounded-lg shadow-md p-6" action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <h2 class="text-2xl font-semibold mb-4">New task</h2>

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" id="title" class="w-full border rounded-md p-2" name="title"/>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <input type="text" id="description" class="w-full border rounded-md p-2" name="description"/>
            </div>

            <div class="mb-4">
                <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start-date</label>
                <input type="date" id="start_date" class="w-full border rounded-md p-2" name="start_date"/>
            </div>

            <div class="mb-4">
                <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End-date</label>
                <input type="date" id="end_date" class="w-full border rounded-md p-2" name="end_date"/>
            </div>

            <div>
                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Priority</h3>
                <ul
                    class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="list-radio-license" type="radio" value="Urgent" name="priority"
                                class="w-4 h-4 text-orange-400 bg-gray-100 border-gray-300 focus:ring-orange-400 dark:focus:ring-orange-400 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="list-radio-license"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Urgent
                            </label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="list-radio-id" type="radio" value="In progress" name="priority"
                                class="w-4 h-4 text-orange-400 bg-gray-100 border-gray-300 focus:ring-orange-400 dark:focus:ring-orange-400 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="list-radio-id"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">In
                                progress
                            </label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="list-radio-military" type="radio" value="Completed" name="priority"
                                class="w-4 h-4 text-orange-400 bg-gray-100 border-gray-300 focus:ring-orange-400 dark:focus:ring-orange-400 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="list-radio-military"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Completed</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="list-radio-passport" type="radio" value="Not started" name="priority"
                                class="w-4 h-4 text-orange-400 bg-gray-100 border-gray-300 focus:ring-orange-400 dark:focus:ring-orange-400 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="list-radio-passport"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Not
                                started
                            </label>
                        </div>
                    </li>
                </ul>
            </div>

           {{--  <div class="mb-6">
                <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">Bio</label>
                <textarea id="bio" class="w-full border rounded-md p-2" rows="4" placeholder="Tell us about yourself"></textarea>
            </div> --}}

            <button type="submit"
                class="bg-orange-400 hover:bg-orange-400 text-black font-bold py-2 px-4 rounded-md w-full">Add task</button>

        </form>
</body>

</html>
