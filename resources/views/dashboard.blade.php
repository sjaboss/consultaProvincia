<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>

    </x-slot>

    <nav class="flex items-center justify-between flex-wrap  bg-fuchsia-900 pl-2 pt-1 ">

        <div class="block lg:hidden">
            <button
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="#responsive-header"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white  hover:text-white hover:bg-fuchsia-600 text-lg  mr-4">
                 Paciente
                </a>
                <a href="#responsive-header"
                class="block mt-4 lg:inline-block lg:mt-0 text-white  hover:text-white hover:bg-fuchsia-600 text-lg  mr-4">
                 Historial
                </a>
                <a href="#responsive-header" 
                 class="block mt-4 lg:inline-block lg:mt-0 text-white  hover:text-white hover:bg-fuchsia-600 text-lg  mr-4">
                Laborario
                </a>
            </div>

        </div>
    </nav>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 p-2">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Listado</h1>

            </div>
        </div>
    </div>
</x-app-layout>
