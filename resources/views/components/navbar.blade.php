<div class="w-full bg-slate-800">
    <div x-data="{ open: false }"
         class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
            <a href="https://github.com/thalesmengue" target="_blank"
               class="lg:inline-flex lg:w-auto px-3 py-2 rounded text-white hover:text-purple-700"><i
                    class="fa-brands fa-github text-2xl"></i></a>
            <a href="https://www.linkedin.com/in/thales-machado-mengue/" target="_blank"
               class="lg:inline-flex lg:w-auto px-3 py-2 rounded hover:text-purple-700 text-white"><i
                    class="fa-brands fa-linkedin-in text-2xl"></i></a>
            <a href="https://twitter.com/thalesmengue" target="_blank"
               class="lg:inline-flex lg:w-auto px-3 py-2 rounded hover:text-purple-700 mr-16 text-white"><i
                    class="fa-brands fa-twitter text-2xl"></i></a>
            <a href="{{ route("index") }}"
               class="text-lg tracking-widest text-white hover:text-purple-700 font-mono mr-32">myMovieList</a>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
             class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                        class="flex flex-wrap w-full px-12 py-2 mt-2 text-sm font-mono space-x-3 items-center bg-gray-300
                        rounded-lg hover:text-gray-900 focus:text-gray-900 hover:opacity-70
                        focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <img src="{{ asset(auth()->user()->profile_image) }}" class="w-8 rounded-full">
                    <span class=""> {{ auth()->user()->name }} </span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                         class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute right-0 w-full mt-1 origin-top-right rounded-md shadow-lg md:w-48">
                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg
                        dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                        dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0
                        hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none
                        focus:shadow-outline"
                           href=" {{ route("update.user", auth()->user()->id) }} "> Profile </a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg
                        dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                        dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0
                        hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none
                        focus:shadow-outline"
                           href=" {{ route("logout.user") }}"> Logout </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
