<!DOCTYPE html>
<x-admin-layout>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sidenav using TailwindCSS and AlpineJS</title>
        <link rel="stylesheet" href="styles.css" />
        <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"
            defer
        ></script>
    </head>
    <body class="antialiased min-h-screen lg:flex" x-data="{open: false}">
        <nav
            class="absolute inset-0 transform lg:transform-none lg:opacity-100 duration-200 lg:relative z-10 w-80 bg-indigo-900 text-white h-screen p-3"
            :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0': open === false}"
        >
            <div class="flex justify-between">
                <span class="font-bold text-2xl sm:text-3xl p-2">Sidebar</span>
                <button
                    class="p-2 focus:outline-none focus:bg-indigo-800 hover:bg-indigo-800 rounded-md lg:hidden"
                    @click="open = false"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7"
                        />
                    </svg>
                </button>
            </div>
            <ul class="mt-8">
                <li>
                    <a
                        href="#"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >Home</a
                    >
                    <a
                        href="#"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >About</a
                    >
                    <a
                        href="#"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >Products</a
                    >
                    <a
                        href="#"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >Pricing</a
                    >
                </li>
            </ul>
        </nav>
        <div class="relative z-0 lg:flex-grow">
            <header class="flex bg-gray-700 text-white items-center px-3">
                <button
                    class="p-2 focus:outline-none focus:bg-gray-600 hover:bg-gray-600 rounded-md lg:hidden"
                    @click="open = true"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </button>
                <span class="block text-2xl sm:text-3xl font-bold p-4"
                    >AlpineJS</span
                >
            </header>
        </div>
    @if($users)
    @foreach ($users as $user)
    <td>{{ $user->name }}</td>
    @endforeach
    @endif

    @if(Session::has('name'))
    <div>Flash message</div>
    @endif
    </body>
</html>
</x-admin-layout>