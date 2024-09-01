@extends("layouts.admin.adminheader")

@section('admin')
<section class="container mx-auto p-6">
   <h1 class="text-3xl font-bold mb-6">Posts</h1>
   <a href=""></a>
   <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
       <thead class="bg-gray-100">
           <tr>
               <th class="px-4 py-2 text-left">ID</th>
               <th class="px-4 py-2 text-left">Title</th>
               <th class="px-4 py-2 text-left">Content</th>
               <th class="px-4 py-2 text-left">Created At</th>
               <th class="px-4 py-2 text-left">Updated At</th>
               <th class="px-4 py-2 text-left">Action</th>
           </tr>
       </thead>
       <tbody>
           @foreach($posts as $post)
               <tr class="border-b hover:bg-gray-50">
                   <td class="px-4 py-2">{{ $post->id }}</td>
                   <td class="px-4 py-2">{{ $post->title }}</td>
                   <td class="px-4 py-2">{{ Str::limit($post->content, 100) }}</td>
                   <td class="px-4 py-2">{{ $post->created_at }}</td>
                   <td class="px-4 py-2">{{ $post->updated_at }}</td>
                   <td class="px-4 py-2">
                        <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Update</a>
                        <form action="" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
                        </form>
                   </td>
               </tr>
           @endforeach
       </tbody>
   </table>
</section>
</section>
</section>
@endsection