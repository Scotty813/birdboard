@extends ('layouts.app')

@section('content')

    <header class="flex items-end mb-3 py-4 justify-between">
        <h2 class="text-grey text-sm font-normal">My Projects</h2>
        <a href="/projects/create" class="no-underline button py-2 px-5">New Project</a>
    </header>

    <main class="flex flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="w-1/3 px-3 pb-6 ">
                @include ('projects.card')
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>

@endsection