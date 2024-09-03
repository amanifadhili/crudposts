@extends("layouts.user.userheader")

@section('user')
<section class="container mx-auto p-6">
   <h1 class="text-3xl font-bold mb-6">Posts</h1>
   <a href="/adduser" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">add new user</a>
   <div class="overflow-x-auto">
       <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
           <thead class="bg-gray-100">
               <tr>	
                   <th class="px-4 py-2 text-left">ID</th>
                   <th class="px-4 py-2 text-left">name</th>
                   <th class="px-4 py-2 text-left">email</th>
                   <th class="px-4 py-2 text-left hidden md:table-cell">email_verified_at</th>
                   <th class="px-4 py-2 text-left hidden md:table-cell">password</th>
                   <th class="px-4 py-2 text-left hidden lg:table-cell">remember_token</th>
                   <th class="px-4 py-2 text-left hidden lg:table-cell">created_at</th>
                   <th class="px-4 py-2 text-left hidden lg:table-cell">updated_at</th>
                   <th class="px-4 py-2 text-left">Action</th>
               </tr>
           </thead>
           <tbody>
               @foreach($users as $user)
                   <tr class="border-b hover:bg-gray-50">
                       <td class="px-4 py-2">{{ $user->id }}</td>
                       <td class="px-4 py-2">{{ $user->name }}</td>
                       <td class="px-4 py-2">{{ $user->email }}</td>
                       <td class="px-4 py-2 hidden md:table-cell">{{ $user->email_verified_at }}</td>
                       <td class="px-4 py-2 hidden md:table-cell">{{ $user->password }}</td>
                       <td class="px-4 py-2 hidden lg:table-cell">{{ $user->remember_token }}</td>
                       <td class="px-4 py-2 hidden lg:table-cell">{{ $user->created_at }}</td>
                       <td class="px-4 py-2 hidden lg:table-cell">{{ $user->updated_at }}</td>
                       <td class="px-4 py-2">
                            <a href="{{ route('users.editform', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Update</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
                            </form>
                       </td>
                   </tr>
               @endforeach
           </tbody>
       </table>
   </div>
</section>
@endsection