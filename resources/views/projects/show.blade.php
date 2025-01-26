<x-layout>
    <div>
        <div>
            <a href="{{ route('projects.index') }}">&larr; Go back</a>
        </div>
        <div>
            <img src="{{ asset('storage/'.$project->image) }}" alt="" width="300">
            <h2>Project Name: {{ $project->name }}</h2>
        </div>
        <div>
            <h3>Projects:</h3>
            <div>
                <div>
                    <img src="{{ $project->image }}" alt="">
                    <p>{{ $project->name }}</p>
                    <a href="{{ $project->url }}">URL</a>
                    <a href="{{ $project->github_url }}">Github</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
