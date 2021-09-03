<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/incidents/{{ $incidents->id }}">
            @method('PUT')
            @csrf

            
            
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Titulo: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title" value="{{ $incidents->title }}">
            </div>

            
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Descrição: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="describe">{{ $incidents->describe }}</textarea>
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Criticality: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="criticality" name="criticality" value="{{ $incidents->criticality }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Type: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="type" name="criticality" value="{{ $incidents->type }}">
            </div>
            
          
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Status: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="status" value="{{ $incidents->status }}">
            </div>


            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Update</button>
            <a href="/incidents" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
        
            
            <form action="/incidents/{{ $incidents->id }}">
                @csrf
                @method('DELETE')

                <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Delete</button>
            
            </form>
        </form>
    </div>
</body>
</html>