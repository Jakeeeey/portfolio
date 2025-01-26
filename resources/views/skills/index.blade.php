<x-layout>
    @guest
        <section class="py-24">
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
                                    <img class="size-9" src="{{ asset('images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
                                    <img class="size-9" src="{{ asset('/images/default.png') }}" alt="">
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
    @endguest

    @auth
        <div class="container w-full">
            <div>
                @if (session('success'))
                    <x-flashMsg msg="{{ session('success') }}" />
                @elseif (session('delete'))
                    <x-flashMsg msg="{{ session('delete') }}" bg="bg-yellow-500" />
                @endif
            </div>
            <a href="{{ route('skills.create') }}">Add Skill</a>
            <table class="table-auto border-collapse border-slate-400 w-full">
                <thead>
                    <tr class="border border-slate-300 text-center">
                        <th></th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $skill)
                        <tr class="hover:bg-slate-100 text-center">
                            <td class="border border-slate-300"><a href="{{ route('skills.show', $skill->id) }}">View</a>
                            </td>
                            <td class="border border-slate-300">{{ $skill->name }}</td>
                            <td class="border border-slate-300"><img class="size-8"
                                    src="{{ asset('storage/' . $skill->image) }}" alt="Laravel"></td>
                            <td class="border border-slate-300">
                                <a href="{{ route('skills.edit', $skill->id) }}">Edit</a> |
                                <form action="{{ route('skills.destroy', $skill->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table class="border-collapse border border-slate-400 ...">
                <thead>
                    <tr>
                        <th class="border border-slate-300 ...">State</th>
                        <th class="border border-slate-300 ...">City</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-300 ...">Indiana</td>
                        <td class="border border-slate-300 ...">Indianapolis</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-300 ...">Ohio</td>
                        <td class="border border-slate-300 ...">Columbus</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-300 ...">Michigan</td>
                        <td class="border border-slate-300 ...">Detroit</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endauth
</x-layout>
