<div class="card" style="height: 200px">
    <h3 class="font-normal mb-3 text-xl py-4 -ml-5 border-l-4 border-blue-light pl-4">
        <a class="text-black no-underline" href="{{ $project->path() }}">{{ $project->title }}</a>
    </h3>

    <div class="text-grey">{{ Illuminate\Support\ Str::limit($project->description) }}</div>
</div>
