<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <form class="container my-2" method="post" action="{{ route('post_create') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                required>

        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Body</label>
            <input type="text" name="body" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <lable for="image">Image</lable>
            <input type="file" name="image" class="form-control" style="padding:3px;" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
    @if (session()->has('status'))
    <div class="alert alert-primary container" role="alert">
        {{ session ('status') }}
    </div>
    @endif
</x-app-layout>