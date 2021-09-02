<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>CRUD</title>
</head>
<body>

<div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">My Blog</h1>

        <a href="/incidents/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Post</a>

        @foreach($incidents as $incident)

        <article class="mb-2">

        <h2>{{$incident->title}}</h2>

        <p class="text-md text-gray-600">{{$incident->describe}}</p>
        </article>

        @endforeach



</body>
</html>