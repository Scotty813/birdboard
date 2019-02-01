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
            <div class="w-3/4 pr-6">
                <div class="mb-8">
                    <h2 class="mb-3 text-grey text-lg font-normal ">Tasks</h2>
                    {{-- Tasks --}}

                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{ $task->path() }}">
                                @method('PATCH')
                                @csrf

                                <div class="flex ">
                                    <input name="body" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-grey': '' }}">
                                    <input {{ $task->completed ? 'checked' : '' }} type="checkbox" name="completed" onChange="this.form.submit()">
                                </div>
                            </form>
                        </div>
                    @endforeach

                    <div class="card mb-3 p-0">
                        <form action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf

                            <input class="rounded-lg w-full p-5" placeholder="Begin adding tasks" name="body"/>
                        </form>
                    </div>
                </div>

                <div class="mb-8">
                    <h2 class="mb-3 text-grey text-lg font-normal">General Notes</h2>
                    {{-- General Notes --}}

                    <textarea class="card w-full" style="min-height: 200px">Lorem Ipsum</textarea>
                </div>

            </div>
            <div class="w-1/4" style="margin-top: 32px">
                @include ('projects.card')
            </div>
        </div>
    </main>


@endsection