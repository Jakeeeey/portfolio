<x-layout>
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
                        <td class="border border-slate-300"><a href="{{ route('skills.show', $skill->id) }}">View</a></td>
                        <td class="border border-slate-300">{{ $skill->name }}</td>
                        <td class="border border-slate-300"><img class="size-8" src="{{ asset('storage/' . $skill->image) }}"
                                alt="Laravel"></td>
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
</x-layout>
