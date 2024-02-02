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
  <header>
    <nav class="border border-green-900 rounded-b-lg shadow-xl">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/dw-high-resolution-logo.png') }}" class="h-11" alt="Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="{{ route('homePage') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 " >Home</a>
            </li>
            <li>
              <a href="{{ route('statistics') }}" class="block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0" aria-current="page">Statistics</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="flex justify-center gap-10 pt-20">
    <div class="text-center w-xl py-6 px-40 bg-white border border-green-800 rounded-full shadow-lg dark:bg-gray-800 dark:border-gray-700">
        <div class=" inline-flex">
          <img src="" alt="">
        </div>
        <a href="#">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Adventures</h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Totale Number of Adventures Taken: <span class=" font-bold text-green-800">{{$adventuresStats}}</span></p>
    </div>
  </section>
  <section class="flex flex-wrap justify-between gap-10 p-40">
    @foreach($destinationStats as $destination)
    <div class=" text-center max-w-lg p-6 bg-white border border-green-800 rounded-full shadow-lg dark:bg-gray-800 dark:border-gray-700">
        <div class=" inline-flex">
          <img src="" alt="">
        </div>
        <a href="#">
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$destination->name}}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Number of Adventures Taken in This ontinent is: <span class=" font-bold text-green-800">{{$destination->adventure_count}}</span></p>
    </div>
    @endforeach
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>