@extends ('layouts.app')

@section('content')
    <h1>Create a Project</h1>
    <form action="/projects" method="POST">
        @csrf

        <div>
            <input type="text" placeholder="Title" name="title">
        </div>

        <div>
            <textarea name="description" class="textarea"></textarea>
        </div>

        <button type="submit" class="button is-link">Submit</button>
        <a href="/projects">Cancel</a>
    </form>
@endsection
