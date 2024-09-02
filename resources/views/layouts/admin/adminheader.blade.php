<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <nav class="bg-blue-600 text-white p-4">
        <ul class="flex space-x-4">
            <li><a href="../dashboard" class="hover:text-blue-200">Dashboard</a></li>
            <li><a href="../backtopost" class="hover:text-blue-200">back</a></li>
        </ul>
    </nav>
    <main class="flex-grow container mx-auto p-4">
        @yield('admin')
    </main>
    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <p>© {{ date('Y') }} Admin Panel. All rights reserved.</p>
            <ul class="flex space-x-4">
                <li><a href="" class="hover:text-gray-300">Terms of Service</a></li>
                <li><a href="" class="hover:text-gray-300">Privacy Policy</a></li>
                <li><a href="" class="hover:text-gray-300">Contact Us</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>