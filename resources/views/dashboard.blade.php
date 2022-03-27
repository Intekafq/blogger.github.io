<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Dashboard') }}
        </h2>
    </x-slot>
    @if (session()->has('status'))
    <div class="alert alert-primary container my-2" role="alert">
        {{ session ('status') }}
    </div>
    @endif
   
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <a href="{{route('multiple-delete')}}" class="btn btn-danger" id="text">delete all</a>
            <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col"><input type="checkbox" value="" name="prog" id="checkAll" onclick="myFunction()">Select</th>
                                <th scope="col">User</th>
                                <th scope="col">Title</th>
                                <th scope="col">Body</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td><input type="checkbox" class="chk"></td>
                            
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td><img src="{{ asset($post->image ?? '') }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                                <td>
                                    <a href="{{route('post_edit',$post->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('post_delete',$post->id)}}" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                            @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
         $(document).ready(function () {
      $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
      });
      $('.chk').on('click', function () {
        if ($('.chk:checked').length == $('.chk').length) {
          $('#checkAll').prop('checked', true);
        } else {
          $('#checkAll').prop('checked', false);
        }
      });
    });


    </script>
    <script>
        $(document).ready(function() {
    
            $("#text").hide();
$("#checkAll").click(function() {
    if($(this).is(":checked")) {
        $("#text").show(300);
    } else {
        $("#text").hide(200);
    }
});

});
    </script>
</x-app-layout>