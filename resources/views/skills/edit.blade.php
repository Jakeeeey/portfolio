<x-layout>
    <div>
        <div>
            <a href="{{ route('skills.index') }}">&larr; Go back</a>
        </div>
        <form action="{{ route('skills.update', $skill->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Skill Name --}}
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $skill->name }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

            {{-- Skill Image --}}
            <div>
                <label for="image">Image</label>
                <img src="{{ asset('storage/'.$skill->image) }}" alt="" width="150">
                <input type="file" name="image" id="image">
                @error('image')
                    {{ $message }}
                @enderror
            </div>

            {{-- Update Button --}}
            <div>
                <button type="submit">Update Skill</button>
            </div>

        </form>
    </div>
</x-layout>
