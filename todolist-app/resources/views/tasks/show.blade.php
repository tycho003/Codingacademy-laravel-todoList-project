<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-wrap justify-center mt-10">


        <div class="p-4 max-w-sm">
            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
                <div class="flex items-center mb-3">
                    <div
                        class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full dark:bg-indigo-500 bg-indigo-500 text-white flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <h2 class="text-white dark:text-white text-lg font-medium">{{ $tasks->title }}</h2>
                </div>
                <div class="flex flex-col justify-between flex-grow">
                    <p class="leading-relaxed text-base text-white dark:text-gray-300">
                       {{ $tasks->description  }}
                    </p>
                   
                </div>
                <div>
                    <ul class=" list-disc">
                        <li>Start-date: {{ $tasks->start_date }}</li>
                        <li>End-date: {{ $tasks->end_date }}</li>
                        <li>Priority: {{ $tasks->priority }}</li>

                    </ul>
                </div>
                <div>
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
