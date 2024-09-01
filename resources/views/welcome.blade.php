
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to CRUD Posts</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f7fafc;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }
        h1 {
            color: #2d3748;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        p {
            color: #4a5568;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            background-color: #4299e1;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #3182ce;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to CRUD Posts</h1>
        <p>A simple Laravel application for managing blog posts.</p>
        <a href="/posts" class="btn">View Posts</a>
    </div>
</body>
</html>
