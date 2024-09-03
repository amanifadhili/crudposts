@extends("layouts.user.userheader")

@section('user')
<section class="container mx-auto p-6">
   <h1 class="text-3xl font-bold mb-6">edit user form</h1>
   <form method="post" action="{{ route('user.update', $user->id)}}" class="space-y-4" onsubmit="return validatePassword()">
    @csrf
    @method('PUT')
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">name</label>
        <input type="text" id="title" name="name" value="{{ $user->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    </div>
    <div>
        <label for="content" class="block text-sm font-medium text-gray-700">email</label>
        <input type="email" id="content" name="email" value="{{ $user->email }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"required>
    </div>
    <div>
        <label for="old_password" class="block text-sm font-medium text-gray-700">old password</label>
        <input type="password" id="old_password" name="old_password" value="" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"required>
    </div>
    <div>
        <label for="new_password" class="block text-sm font-medium text-gray-700">new  password</label>
        <input type="password" id="new_password" name="password" value="" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"required>
    </div>
    <div>
        <label for="comfirm_password" class="block text-sm font-medium text-gray-700">comfirm new password</label>
        <input type="password" id="comfirm_password" name="comfirm_password" value="" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"required>
    </div>
    <div>
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
            Submit
        </button>
    </div>
   </form>
   
</section>

<script>
function validatePassword() {
    var newPassword = document.getElementById("new_password").value;
    var confirmPassword = document.getElementById("comfirm_password").value;
    if (newPassword != confirmPassword) {
        alert("New password and confirm password do not match!");
        return false;
    }
    return true;
}
</script>
@endsection