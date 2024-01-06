<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Keterlambatan App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.9/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">

    <div class="flex h-screen bg-white-200">
        <div class="flex-shrink-0 w-64 bg-white border-r shadow-md">
            <div class="flex items-center justify-center h-16 bg-gray-100 border-b">
                <label class="text-xl font-semibold text-gray-800">Keterlambatan App</label>
            </div>
            <div class="p-4">
                <ul class="space-y-4 text-center">
                    <li>
                        <a href="{{ route('home.page') }}" class="text-gray-600 hover:text-gray-800 text-lg rounded-xl">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('late.home') }}" class="text-gray-600 hover:text-gray-800 text-lg rounded-xl">Data Keterlambatan</a>
                    </li>
                    <li class="group">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">Data <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 p-3 text-center">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li><a href="{{ route('user.home') }}" class="text-gray-500 hover:text-gray-700">Data
                                        User</a></li>
                                <li><a href="{{ route('rombel.home') }}" class="text-gray-500 hover:text-gray-700">Data
                                        Rombel</a></li>
                                <li><a href="{{ route('rayon.home') }}" class="text-gray-500 hover:text-gray-700">Data
                                        Rayon</a></li>
                                <li><a href="{{ route('student.home') }}" class="text-gray-500 hover:text-gray-700">Data
                                        Siswa</a>
                                </li>
                    </li>
                </ul>
            </div>
            </li>
            </ul>
        </div>
    </div>

    <div class="flex-1 overflow-x-hidden overflow-y-auto">
        <div class="container mx-auto p-4">
            @yield('content')
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
