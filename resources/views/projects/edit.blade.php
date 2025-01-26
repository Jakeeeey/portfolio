<x-layout>
    <div>
        <div>
            <a href="{{ route('projects.index') }}">&larr; Go back</a>
        </div>
        <form action="{{ route('projects.update', $project->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Project Name --}}
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $project->name }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

            {{-- Project Image --}}
            <div>
                <label for="image">Image</label>
                <img src="{{ asset('storage/'.$project->image) }}" alt="" width="150">
                <input type="file" name="image" id="image">
                @error('image')
                    {{ $message }}
                @enderror
            </div>

            {{-- Project URL --}}
            <div>
                <label for="url">URL</label>
                <input type="text" name="url" id="url" value="{{ $project->url }}">
                @error('url')
                    {{ $message }}
                @enderror
            </div>

            {{-- Project Github URL --}}
            <div>
                <label for="github_url">Github URL</label>
                <input type="text" name="github_url" id="github_url" value="{{ $project->github_url }}">
                @error('github_url')
                    {{ $message }}
                @enderror
            </div>

            {{-- Update Button --}}
            <div>
                <button type="submit">Update Project</button>
            </div>

        </form>
    </div>
</x-layout>
