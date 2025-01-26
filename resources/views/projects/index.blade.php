<x-layout>
    <div>
        <div>
            @if (session('success'))
                <x-flashMsg msg="{{ session('success') }}" />
            @elseif (session('delete'))
                <x-flashMsg msg="{{ session('delete') }}" bg="bg-yellow-500" />
            @endif
        </div>
        <a href="{{ route('projects.create') }}">Add Project</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>URL</th>
                    <th>Github</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td><a href="{{ route('projects.show', $project->id) }}">View</a></td>
                    <td>{{ $project->name }}</td>
                    <td><img src="{{ asset('storage/'. $project->image) }}" alt="Laravel" width="30"></td>
                    <td><a href="{{ $project->url }}" target="_blank">url icon</a></td>
                    <td><a href="{{ $project->github_url }}" target="_blank">github icon</a></td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}">Edit</a> |
                        <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
