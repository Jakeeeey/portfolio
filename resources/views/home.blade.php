<x-layout>
    <section class="flex justify-center items-center py-24 relative min-h-screen">
        <video src="{{ asset('storage/images/background_image_code.mp4') }}" autoplay loop muted
            class="object-cover blur-sm grayscale h-full absolute left-0 top-0"></video>
        <div class="container flex items-center py-5 flex-col-reverse xl:flex-row gap-20 z-50">
            <div class="basis-full xl:basis-1/2 space-y-7">
                <div>
                    <h2 class="text-4xl 2xl:text-5xl text-white">Hi, I'm <span class="text-primary">Jake De Guzman</span>,
                    </h2>
                    <h1 class="text-7xl 2xl:text-8xl text-white">Bringing Ideas to Life Through Code.</h1>
                </div>
                <p class="text-lg text-white">An aspiring web developer specializing in crafting user-friendly and
                    dynamic web
                    solutions.</p>
                <div class="flex justify-center items-center flex-col xl:flex-row gap-5 lg:gap-12">
                    <a href="#"
                        class="w-3/4 xl:w-1/4 py-3 font-medium px-5 border border-white rounded-lg text-center text-white hover:bg-gray-100 hover:text-gray-900 transition duration-150 ease-in-out transform hover:scale-110">Learn
                        More</a>
                    <a href="#"
                        class="w-3/4 xl:w-1/4 py-3 font-medium px-5 bg-primary text-center text-white rounded-lg transition duration-150 ease-in-out transform hover:scale-110">Contact
                        Me</a>
                </div>
            </div>
            <div class="basis-full xl:basis-1/2 flex  justify-center">
                <div
                    class="justify-center size-96 xl:w-[500px] xl:h-[500px] 2xl:w-[600px] 2xl:h-[600px] rounded-full bg-center bg-cover bg-no-repeat bg-[url('/public/storage/images/wency.jpeg')]">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-24 border border-red-300">
        <h1 class="text-6xl text-center text-primary mb-8 hidden">Skills</h1>
        <!-- Tabs -->
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">

                <!-- Tech Stack Tab -->
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tech-stack-tab"
                        data-tabs-target="#tech-stack" type="button" role="tab" aria-controls="tech-stack"
                        aria-selected="false">Tech-Stack</button>
                </li>

                <!-- Tools Tab -->
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="tools-tab" data-tabs-target="#tools" type="button" role="tab" aria-controls="tools"
                        aria-selected="false">Tools</button>
                </li>
            </ul>
        </div>

        <!-- Tab Contents -->
        <div id="default-tab-content">

            <!-- Tech Stack Tab -->
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="tech-stack" role="tabpanel"
                aria-labelledby="tech-stack-tab">

                <!-- Tech Stack Content -->
                <div class="container mx-auto bg-primary p-4 md:p-20">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-10 lg:gap-8">
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                                <h3 class="text-base">HTML</h3>
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                                <h3 class="text-base">CSS</h3>
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                                <h3 class="text-base">JavaScript</h3>
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                                <h3 class="text-base">PHP</h3>
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                                <h3 class="text-base">Laravel 11</h3>
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                                <h3 class="text-base">VUE 3</h3>
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                                <h3 class="text-base">MySQL</h3>
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tools Tab -->
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="tools" role="tabpanel"
                aria-labelledby="tools-tab">

                <!-- Tools Content -->
                <div class="container mx-auto bg-primary p-4 md:p-20">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-10 lg:gap-8">
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <h3 class="text-base">WordPress</h3>
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <h3 class="text-base">Bootstrap</h3>
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <h3 class="text-base">Tailwind</h3>
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <h3 class="text-base">Flowbite</h3>
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <h3 class="text-base">DaisyUI</h3>
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <h3 class="text-base">Inertia JS</h3>
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                        <div class="p-5 rounded-xl bg-gray-100 space-y-2  hover:bg-gray-300">
                            <div class="flex justify-center items-center gap-4">
                                <h3 class="text-base">GitHub</h3>
                                <img class="size-9" src="{{ asset('storage/images/default.png') }}" alt="">
                            </div>
                            <div class="flex justify-center items-center gap-3">
                                <div class="bg-gray-400 h-2.5 w-full rounded">
                                    <div class="bg-primary h-2.5 rounded" style="width: 95%"></div>
                                </div>
                                <span>95%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                        class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps
                    classes to control the content visibility and styling.</p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-blue-100 relative">
        <img src="{{ asset('storage/images/background_image_2.png') }}" alt=""
            class="object-cover h-full absolute left-0 top-0 opacity-50">
        <div class="container flex flex-col lg:flex-row items-center justify-center gap-16 lg:gap-28">
            <div class="z-50">
                <img src="{{ asset('storage/images/wency.jpeg') }}" alt=""
                    class="size-96 mx-auto border-4 border-gray-300 shadow-2xl">
                {{-- <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit numquam id nisi optio quos, dolorem assumenda excepturi nesciunt sequi repellat reiciendis aliquam dolores eum inventore ullam atque amet facere vitae!
                </p> --}}
            </div>
            <div class="basis-1/2 z-50 bg-blue-100">
                <div class="flex flex-col">
                    <div class="prose space-y-3">
                        <h2>
                            Hi, I'm Jake Dave De Guzman.
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit numquam id nisi optio
                            quos,
                            dolorem assumenda excepturi nesciunt sequi repellat reiciendis aliquam dolores eum inventore
                            ullam
                            atque amet facere vitae!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit numquam id nisi optio
                            quos,
                            dolorem assumenda excepturi nesciunt sequi repellat reiciendis aliquam dolores eum inventore
                            ullam
                            atque amet facere vitae!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit numquam id nisi optio
                            quos,
                            dolorem assumenda excepturi nesciunt sequi repellat reiciendis aliquam dolores eum inventore
                            ullam
                            atque amet facere vitae!
                        </p>
                    </div>

                    <div class="flex justify-end items-center mt-10">
                        <a href="#"
                            class="text-2xl font-medium text-center transition duration-150 ease-in-out transform hover:scale-110">
                            More About Me
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 inline mb-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="py-24">
        <h1 class="text-primary text-center text-6xl mb-8">My Latest Work</h1>
        <div class="container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4">
            <div
                class="rounded-2xl border lg:hover:border-gray-200 lg:hover:shadow-2xl lg:hover:scale-105 duration-150">
                <div class="h-52 bg-contain bg-no-repeat bg-gray-200 rounded-t-2xl"
                    style="background-image: url('{{ asset('storage/images/default.png') }}')">
                </div>
                <div class="p-5 space-y-3">
                    <h3 class="text-2xl font-bold">Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati beatae laborum aspernatur,
                        amet consectetur placeat recusandae fuga labore culpa modi autem tempora deleniti quae sequi,
                        molestiae magnam soluta, accusamus assumenda!
                    </p>
                    <div>
                        <span class="font-bold text-sm">Laravel,</span>
                        <span class="font-bold text-sm">Vue,</span>
                        <span class="font-bold text-sm">Tailwind</span>
                        <span class="font-bold text-sm">Tailwind</span>
                        <span class="font-bold text-sm">Tailwind</span>
                        <span class="font-bold text-sm">Tailwind</span>
                    </div>
                    <div class="flex justify-center items-center flex-col xl:flex-row gap-5 lg:gap-2">
                        <a href="#"
                            class="w-full xl:w-full py-2 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-8 inline mb-1"
                                viewBox="0 0 24 24">
                                <path
                                    d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                </path>
                            </svg>
                            Github
                        </a>
                        <a href="#"
                            class="w-full xl:w-full py-3 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 inline mb-1 stroke-2 stroke-black">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                            </svg>
                            Visit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="py-24">
        <div class="container border border-red-500">
            <div
                class="py-5 max-lg:overflow-x-auto grid max-lg:grid-flow-col max-lg:auto-cols-max lg:grid-cols-4 gap-10 border border-red-500">
                <div
                    class="max-lg:w-96 rounded-2xl border lg:hover:border-gray-200 lg:hover:shadow-2xl lg:hover:scale-105 duration-150">
                    <div class="h-52 bg-contain bg-no-repeat bg-gray-200 rounded-t-2xl"
                        style="background-image: url('{{ asset('storage/images/default.png') }}')">
                    </div>
                    <div class="p-5 space-y-3">
                        <h3 class="text-2xl font-bold">Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati beatae laborum aspernatur,
                            amet consectetur placeat recusandae fuga labore culpa modi autem tempora deleniti quae
                            sequi,
                            molestiae magnam soluta, accusamus assumenda!
                        </p>
                        <div>
                            <span class="font-bold text-sm">Laravel,</span>
                            <span class="font-bold text-sm">Vue,</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                        </div>
                        <div class="flex justify-center items-center flex-col xl:flex-row gap-5 lg:gap-2">
                            <a href="#"
                                class="w-full xl:w-full py-2 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-8 inline mb-1"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                    </path>
                                </svg>
                                Github
                            </a>
                            <a href="#"
                                class="w-full xl:w-full py-3 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 inline mb-1 stroke-2 stroke-black">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="max-lg:w-96 rounded-2xl border lg:hover:border-gray-200 lg:hover:shadow-2xl lg:hover:scale-105 duration-150">
                    <div class="h-52 bg-contain bg-no-repeat bg-gray-200 rounded-t-2xl"
                        style="background-image: url('{{ asset('storage/images/default.png') }}')">
                    </div>
                    <div class="p-5 space-y-3">
                        <h3 class="text-2xl font-bold">Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati beatae laborum aspernatur,
                            amet consectetur placeat recusandae fuga labore culpa modi autem tempora deleniti quae
                            sequi,
                            molestiae magnam soluta, accusamus assumenda!
                        </p>
                        <div>
                            <span class="font-bold text-sm">Laravel,</span>
                            <span class="font-bold text-sm">Vue,</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                        </div>
                        <div class="flex justify-center items-center flex-col xl:flex-row gap-5 lg:gap-2">
                            <a href="#"
                                class="w-full xl:w-full py-2 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-8 inline mb-1"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                    </path>
                                </svg>
                                Github
                            </a>
                            <a href="#"
                                class="w-full xl:w-full py-3 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 inline mb-1 stroke-2 stroke-black">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="max-lg:w-96 rounded-2xl border lg:hover:border-gray-200 lg:hover:shadow-2xl lg:hover:scale-105 duration-150">
                    <div class="h-52 bg-contain bg-no-repeat bg-gray-200 rounded-t-2xl"
                        style="background-image: url('{{ asset('storage/images/default.png') }}')">
                    </div>
                    <div class="p-5 space-y-3">
                        <h3 class="text-2xl font-bold">Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati beatae laborum aspernatur,
                            amet consectetur placeat recusandae fuga labore culpa modi autem tempora deleniti quae
                            sequi,
                            molestiae magnam soluta, accusamus assumenda!
                        </p>
                        <div>
                            <span class="font-bold text-sm">Laravel,</span>
                            <span class="font-bold text-sm">Vue,</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                        </div>
                        <div class="flex justify-center items-center flex-col xl:flex-row gap-5 lg:gap-2">
                            <a href="#"
                                class="w-full xl:w-full py-2 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-8 inline mb-1"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                    </path>
                                </svg>
                                Github
                            </a>
                            <a href="#"
                                class="w-full xl:w-full py-3 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 inline mb-1 stroke-2 stroke-black">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="my-auto border border-red-500 w-fit transition duration-150 ease-in-out transform lg:hover:scale-110">
                    <a href="" class="text-4xl font-medium"><span class="max-lg:hidden">See All</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-20 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="py-24">
        <h1 class="text-center mb-16 text-6xl">Latest Work</h1>
        <div class="max-lg:container lg:px-6 xl:px-8 2xl:px-28 xl:container">
            <div class="flex max-lg:overflow-auto flex-row gap-8">
                <div
                    class="max-lg:min-w-96 lg:min-w-60 rounded-2xl border lg:hover:border-gray-200 lg:hover:shadow-2xl lg:hover:scale-105 duration-150">
                    <div class="h-52 bg-contain bg-no-repeat bg-gray-200 rounded-t-2xl"
                        style="background-image: url('{{ asset('storage/images/default.png') }}')">
                    </div>
                    <div class="p-5 space-y-3">
                        <h3 class="text-2xl font-bold">Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati beatae laborum aspernatur,
                            amet consectetur placeat recusandae fuga labore culpa modi autem tempora deleniti quae
                            sequi,
                            molestiae magnam soluta, accusamus assumenda!
                        </p>
                        <div>
                            <span class="font-bold text-sm">Laravel,</span>
                            <span class="font-bold text-sm">Vue,</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                        </div>
                        <div class="flex justify-center items-center flex-col xl:flex-row gap-5 lg:gap-2">
                            <a href="#"
                                class="w-full xl:w-full py-2 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-8 inline mb-1"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                    </path>
                                </svg>
                                Github
                            </a>
                            <a href="#"
                                class="w-full xl:w-full py-3 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 inline mb-1 stroke-2 stroke-black">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="max-lg:min-w-96 lg:grow rounded-2xl border lg:hover:border-gray-200 lg:hover:shadow-2xl lg:hover:scale-105 duration-150">
                    <div class="h-52 bg-contain bg-no-repeat bg-gray-200 rounded-t-2xl"
                        style="background-image: url('{{ asset('storage/images/default.png') }}')">
                    </div>
                    <div class="p-5 space-y-3">
                        <h3 class="text-2xl font-bold">Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati beatae laborum aspernatur,
                            amet consectetur placeat recusandae fuga labore culpa modi autem tempora deleniti quae
                            sequi,
                            molestiae magnam soluta, accusamus assumenda!
                        </p>
                        <div>
                            <span class="font-bold text-sm">Laravel,</span>
                            <span class="font-bold text-sm">Vue,</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                        </div>
                        <div class="flex justify-center items-center flex-col xl:flex-row gap-5 lg:gap-2">
                            <a href="#"
                                class="w-full xl:w-full py-2 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-8 inline mb-1"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                    </path>
                                </svg>
                                Github
                            </a>
                            <a href="#"
                                class="w-full xl:w-full py-3 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 inline mb-1 stroke-2 stroke-black">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="max-lg:min-w-96 lg:min-w-60 rounded-2xl border lg:hover:border-gray-200 lg:hover:shadow-2xl lg:hover:scale-105 duration-150">
                    <div class="h-52 bg-contain bg-no-repeat bg-gray-200 rounded-t-2xl"
                        style="background-image: url('{{ asset('storage/images/default.png') }}')">
                    </div>
                    <div class="p-5 space-y-3">
                        <h3 class="text-2xl font-bold">Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati beatae laborum aspernatur,
                            amet consectetur placeat recusandae fuga labore culpa modi autem tempora deleniti quae
                            sequi,
                            molestiae magnam soluta, accusamus assumenda!
                        </p>
                        <div>
                            <span class="font-bold text-sm">Laravel,</span>
                            <span class="font-bold text-sm">Vue,</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                            <span class="font-bold text-sm">Tailwind</span>
                        </div>
                        <div class="flex justify-center items-center flex-col xl:flex-row gap-5 lg:gap-2">
                            <a href="#"
                                class="w-full xl:w-full py-2 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="size-8 inline mb-1"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                                    </path>
                                </svg>
                                Github
                            </a>
                            <a href="#"
                                class="w-full xl:w-full py-3 font-medium px-0 bg-primary text-center text-white rounded-lg hover:bg-hover">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-6 inline mb-1 stroke-2 stroke-black">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                                </svg>
                                Visit
                            </a>
                        </div>
                    </div>
                </div>
                <a href=""
                    class="lg:hidden xl:block my-auto xl:text-xl 2xl:text-2xl font-medium transition duration-150 ease-in-out transform lg:hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="xl:size-14 2xl:size-20 mx-auto">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="whitespace-nowrap">See All</span>
                </a>
            </div>
            <div class="hidden lg:block xl:hidden">
                <div class="flex justify-center mt-12">
                    <a href=""
                        class="text-5xl font-medium transition duration-150 ease-in-out transform lg:hover:scale-110">
                        <span class="">See All</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-14 mb-2 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section
        class="py-24 bg-blend-hard-light bg-center bg-cover bg-no-repeat bg-[url('/public/storage/images/background_image_plane.png')]">
        <div class="container flex justify-center items-center">
            <div class="flex flex-col xl:flex-row lg:gap-20">

                <div class="basis-1/2 space-y-8 p-8">
                    <div class="md:pr-28">
                        <h1 class="text-4xl font-medium mb-2">Let’s Connect</h1>
                        <p class="text-lg font-normal">
                            I’m excited to learn more about your project and how we can collaborate. Fill out the form below, and let’s begin turning your ideas into reality. I’m ready when you are!
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <div class="inline-flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-5 fill-accent">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                            <span class="text-lg select-all font-medium">
                                jakedavedeguzman123@gmail.com
                            </span>
                        </div>
                        <div class="inline-flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-5 fill-accent">
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            <span class="text-lg select-all font-medium">
                                +639510505308
                            </span>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-2xl font-medium mb-2">Socials</h4>
                        <div class="flex space-x-5">
                            <a href="#"
                                class="transition duration-150 ease-in-out transform hover:scale-110 hover:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-10 inline">
                                    <path fill="#3F51B5"
                                        d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
                                    </path>
                                    <path fill="#FFF"
                                        d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#"
                                class="transition duration-150 ease-in-out transform hover:scale-110 hover:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-10 inline">
                                    <path fill="#fff"
                                        d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                    </path>
                                    <path fill="#fff"
                                        d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                    </path>
                                    <path fill="#cfd8dc"
                                        d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                    </path>
                                    <path fill="#40c351"
                                        d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                    </path>
                                    <path fill="#fff" fill-rule="evenodd"
                                        d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="transition duration-150 ease-in-out transform hover:scale-110 hover:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-10 inline">
                                    <path fill="#03a9f4" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"></path>
                                    <path fill="#03a9f4"
                                        d="M33.5 22A11.5 11.5 0 1 0 33.5 45 11.5 11.5 0 1 0 33.5 22zM14.5 3A11.5 11.5 0 1 0 14.5 26 11.5 11.5 0 1 0 14.5 3z">
                                    </path>
                                    <path fill="#fff"
                                        d="M24.602,36C18,36,15,32.699,15,30.199C15,28.898,15.898,28,17.199,28c2.801,0,2.102,4.102,7.402,4.102c2.699,0,4.199-1.5,4.199-3c0-0.902-0.402-1.902-2.199-2.402l-5.902-1.5C16,24,15.102,21.398,15.102,18.898c0-5.098,4.699-6.898,9.098-6.898C28.301,12,33,14.199,33,17.199c0,1.301-1,2.102-2.301,2.102c-2.398,0-2-3.402-6.801-3.402c-2.398,0-3.797,1.102-3.797,2.703c0,1.598,1.898,2.098,3.598,2.5l4.402,1C32.898,23.199,34,26,34,28.699C33.898,32.898,30.898,36,24.602,36z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#"
                                class="transition duration-150 ease-in-out transform hover:scale-110 hover:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-10 inline">
                                    <path fill="#0288D1"
                                        d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
                                    </path>
                                    <path fill="#FFF"
                                        d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="basis-1/2 space-y-3 p-8 border border-gray-200 shadow-2xl bg-gray-200 z-50">
                    <form action="#" method="post">
                        <div class="mb-2">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 caret-primary"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="mb-2">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter Your Email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 caret-primary">
                        </div>
                        <div class="mb-2">
                            <label for="subject"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="Enter Your Subject"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 caret-primary">
                        </div>
                        <div class="mb-2">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                Message</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 caret-primary"
                                placeholder="Enter Your Message"></textarea>
                        </div>
                        <button
                            class="text-white bg-primary hover:bg-hover transition duration-150 ease-in-out transform hover:scale-105 py-2.5 w-1/4 rounded-lg">
                            <div class="inline-flex items-center space-x-2">
                                <span class="font-medium">Send</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                </svg>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="flex py-24 bg-blue-200 relative h-[500px]">
        {{-- <img src="{{ asset('storage/images/background_image_paper.png') }}" alt="" class="w-full object-cover brightness-95 h-full absolute left-0 top-0"> --}}
        <video src="{{ asset('storage/images/background_image_plane3.mp4') }}" autoplay loop muted
            class="object-cover object-top w-full h-full absolute left-0 top-0"></video>
        <div class="container flex justify-center align-middle xl:px-52 2xl:px-72 z-50">
            <div class="text-center space-y-6">
                <h1 class="text-5xl">Let’s Create Something Amazing Together</h1>
                <p class="">
                    Whether you’re starting from scratch or need help refining your ideas, I’m here to collaborate and deliver solutions that truly stand out. Let’s turn your vision into reality—reach out today!
                </p>
                <div class="flex justify-center">
                    <a href="#"
                        class="py-3 font-medium px-5 bg-primary text-center text-white rounded-lg transition duration-150 ease-in-out transform hover:scale-110">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layout>
