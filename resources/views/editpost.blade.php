<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <form class="container my-2" method="post">
        @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" value="{{ $post->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Body</label>
    <input type="text" name="body" value="{{ $post->body}}" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary" value="Update">Update</button>
</form>

</x-app-layout>
