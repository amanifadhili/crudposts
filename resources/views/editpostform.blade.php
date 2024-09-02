@extends("layouts.admin.adminheader")

@section('admin')
<section class="container mx-auto p-6">
   <h1 class="text-3xl font-bold mb-6">edit post</h1>
   <form method="post" action="{{ route('posts.update', $post->id) }}" class="space-y-4">
    @csrf
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" value="{{ $post->title }}" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    </div>
    <div>
        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
        <input type="text" value="{{ Str::limit($post->content, 100) }}" id="content" name="content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    </div>
    <div>
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
            Submit
        </button>
    </div>
   </form>
   
</section>
@endsection