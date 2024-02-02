<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover World</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
  <div class=" bg-white border border-green-200 rounded-lg shadow-lg">
      <a>
        <img class="rounded-t-lg" src="{{ asset('images/green-airplane-biofuel-tp10.jpg') }}" alt="picture here" />
      </a>
      <div class="p-5">
          <a>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$adventure->title}}</h5>
          </a>
          <p class="mb-2 font-light text-gray-600 italic">{{ $adventure->created_at }}</p>
          <p class="mb-3 font-normal text-gray-700">{{ ($adventure->description) }}</p>
          <p class="mb-3 font-normal text-gray-700">{{($adventure->advice)}}</p>
      </div>
      <div class="px-5 pb-5 flex justify-between">
        <p><span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">{{ $adventure->destination->name }}</span></p>
        <form action="{{ route('adventure.show') }}" method="post">
          @csrf
          <input type="hidden" name="adventureID" value="{{ $adventure->id }}">
      </div>
  </div>
</body>
</html>