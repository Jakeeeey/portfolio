<x-layout>
    <div>
        <form action="{{ route('skills.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- Skill Name --}}
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

            {{-- Skill Image --}}
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
                @error('image')
                    {{ $message }}
                @enderror
            </div>

            {{-- Add Button --}}
            <div>
                <button type="submit">Add Skill</button>
            </div>

        </form>
    </div>
</x-layout>
