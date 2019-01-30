@extends ('layouts.app')

@section('content')

    <header class="flex items-end mb-3 py-4 justify-between">
        <p class="text-grey text-sm font-normal">
            <a href="/projects" class="text-grey text-sm font-normal no-underline">My Projects</a> / {{ $project->title }}
        </p>
        <a href="/projects/create" class="no-underline button py-2 px-5">New Project</a>
    </header>

    <main>
        <div class="flex">
            <div class="w-3/4 pr-3">
                <div class="mb-8">
                    <h2 class="mb-3 text-grey text-lg font-normal ">Tasks</h2>
                    {{-- Tasks --}}

                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">{{ $task->body }}</div>
                    @endforeach
                </div>

                <div class="mb-8">
                    <h2 class="mb-3 text-grey text-lg font-normal">General Notes</h2>
                    {{-- General Notes --}}

                    <textarea class="card w-full" style="min-height: 200px">Lorem Ipsum</textarea>
                </div>

            </div>
            <div class="w-1/4">
                @include ('projects.card')
            </div>
        </div>
    </main>


@endsection