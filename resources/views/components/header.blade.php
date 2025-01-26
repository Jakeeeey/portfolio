<header>
    <nav class="bg-white">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> --}}
                <img src="{{ asset('/images/jake_logo_black.svg') }}" class="h-14" alt="Jake Dave Logo" />
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> --}}
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="{{ route('contact') }}"
                    class="font-medium py-3 px-5 bg-primary hover:bg-hover text-center text-white rounded-lg transition duration-150 ease-in-out transform hover:scale-110">
                    Contact Me!
                </a>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-text rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex md:items-center flex-col max-md:divide-y font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-bg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-bg">
                    {{-- <li class="">
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary">
                            Home
                        </a>
                    </li> --}}
                    <li class="group inline-block relative max-md:hover:bg-hover">
                        <a href="{{ route('home') }}"
                            class="py-2 px-3 md:p-3 max-md:w-full inline-block text-lg font-semibold text-gray-800 max-md:group-hover:text-white md:group-hover:text-primary">
                            Home
                            <span
                                class="max-md:hidden absolute left-0 bottom-0 w-0 h-1 bg-primary group-hover:w-full transition-all duration-300 ease-in-out">
                            </span>
                        </a>
                    </li>
                    <li class="group inline-block relative max-md:hover:bg-hover">
                        <a href="{{ route('about') }}"
                            class="py-2 px-3 md:p-3 max-md:w-full inline-block text-lg font-semibold text-gray-800 max-md:group-hover:text-white md:group-hover:text-primary">
                            About
                            <span
                                class="max-md:hidden absolute left-0 bottom-0 w-0 h-1 bg-primary group-hover:w-full transition-all duration-300 ease-in-out">
                            </span>
                        </a>
                    </li>
                    <li class="group inline-block relative max-md:hover:bg-hover">
                        <a href="{{ route('skills.index') }}"
                            class="py-2 px-3 md:p-3 max-md:w-full inline-block text-lg font-semibold text-gray-800 max-md:group-hover:text-white md:group-hover:text-primary">
                            Skills
                            <span
                                class="max-md:hidden absolute left-0 bottom-0 w-0 h-1 bg-primary group-hover:w-full transition-all duration-300 ease-in-out">
                            </span>
                        </a>
                    </li>
                    <li class="group inline-block relative max-md:hover:bg-hover">
                        <a href="{{ route('portfolio') }}"
                            class="py-2 px-3 md:p-3 max-md:w-full inline-block text-lg font-semibold text-gray-800 max-md:group-hover:text-white md:group-hover:text-primary">
                            Portfolio
                            <span
                                class="max-md:hidden absolute left-0 bottom-0 w-0 h-1 bg-primary group-hover:w-full transition-all duration-300 ease-in-out">
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
