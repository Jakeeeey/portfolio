<x-layout>
    <div>
        <div>
            <a href="{{ route('skills.index') }}">&larr; Go back</a>
        </div>
        <div>
            <img src="{{ asset('storage/'.$skill->image) }}" alt="" width="300">
            <h2>Skill Name: {{ $skill->name }}</h2>
        </div>
        <div>
            <h3>Projects:</h3>
            <div>
                <div>
                    <img src="" alt="">
                    <p>Name</p>
                    <a href="">Github</a>
                    <a href="">URL</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
