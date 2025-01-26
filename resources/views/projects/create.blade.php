<x-layout>
    <div>
        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- Project Name --}}
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

            {{-- Project Image --}}
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
                @error('image')
                    {{ $message }}
                @enderror
            </div>

            {{-- Project URL --}}
            <div>
                <label for="url">URL</label>
                <input type="text" name="url" id="url" value="{{ old('url') }}">
                @error('url')
                    {{ $message }}
                @enderror
            </div>

            {{-- Project Github URL --}}
            <div>
                <label for="github_url">Github URL</label>
                <input type="text" name="github_url" id="github_url" value="{{ old('github_url') }}">
                @error('github_url')
                    {{ $message }}
                @enderror
            </div>

            {{-- Add Button --}}
            <div>
                <button type="submit">Add Project</button>
            </div>

        </form>
    </div>
</x-layout>
