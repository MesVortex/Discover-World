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
              <a href="{{ route('homePage') }}" class="block py-2 px-3 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0" aria-current="page">Home</a>
            </li>
            <li>
              <a href="{{ route('statistics') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 ">Statistics</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="text-center mt-40 h-96 bg-fixed">
    <h1 class="text-4xl font-extrabold text-green-900">WELCOME TO DISCOVER WORLD</h1>
    <p class="text-gray-600 font-medium text-lg my-5">the sky is the limit!</p>
    <!-- Modal toggle -->
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="mx-auto text-green-800 bg-transparent border border-green-800 hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
      <i class="fa-solid fa-paper-plane me-2"></i>
      ADD Your Own Adventure
      <i class="fa-solid fa-plane-departure ms-2"></i>
    </button>
  </section>
    <!-- Main modal -->
  <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-green-900 dark:text-white">
                    Create New Adventure
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('store') }}" method="post" class="p-4 md:p-5" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 " placeholder="Type your adventure title" required>
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 " placeholder="Write your adventure description here"></textarea>                    
                    </div>
                    <div class="col-span-2">
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload Your Images</label>
                      <input name="image[]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple>
                    </div>
                    <div class="col-span-2">
                        <label for="advice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Advice</label>
                        <input type="text" name="advice" id="advice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 " placeholder="Give the other traveleres a piece of advice" required>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="continent" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Continent</label>
                        <select id="continent" name="continent" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 ">
                            <option selected="">Select continent</option>
                            @foreach ($destinations as $destination)
                              <option value="{{$destination->id}}">{{$destination->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-green-800 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new product
                </button>
            </form>
        </div>
    </div>
  </div> 
  <section class="mb-10">
    <div class="flex items-center justify-center mb-20">
      <form class="flex justify-center" action="{{ route('filter') }}" method="post">
        @csrf
        <ul class="inline-flex items-center text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
          <li class="border-b border-gray-200 sm:border-b-0 sm:border-r">
            <div class="flex items-center px-3">
              <input id="vue-checkbox-list" name="destinationID" @if(isset($selectedDestination)) @if($selectedDestination == 0) {{'checked'}} @endif @endif type="radio" value="0" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500">
              <label for="vue-checkbox-list" class="p-3 text-sm font-medium text-green-800">ALL</label>
            </div>
          </li>
          @foreach ($destinations as $destination)
          <li class="border-b border-gray-200 sm:border-b-0 sm:border-r">
            <div class="flex items-center px-3">
              <input id="vue-checkbox-list{{$destination->id}}" name="destinationID" @if(isset($selectedDestination)) @if($selectedDestination == $destination->id) {{'checked'}} @endif @endif type="radio" value="{{$destination->id}}" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500">
              <label for="vue-checkbox-list{{$destination->id}}" class="p-3 text-sm font-medium text-green-800">{{$destination->name}}</label>
            </div>
          </li>
          @endforeach
          <li class="border-b border-gray-200 sm:border-b-0 sm:border-r">
            <div class="flex items-center px-3">
              <button type="submit" class="w-full h-full text-green-800 border-gray-300 rounded focus:ring-green-500">Filter</button>
            </div>
          </li>
        </ul>
      </form>
      <form class=" ms-2 mt-2" action="{{ route('order') }}" method="post">
        @csrf
        <input type="hidden" value="1" name="order">
        <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Latest</button>
      </form>
      <form class="mt-2" action="{{ route('order') }}" method="post">
        @csrf
        <input type="hidden" value="0" name="order">
        <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Oldest</button>
      </form>

    </div>
    <div class="flex flex-wrap gap-3 justify-around">
      @foreach ($adventures as $adventure)
          <div class="max-w-sm bg-white border border-green-200 rounded-lg shadow-lg">
              @foreach($adventure->photo as $img)
              <a>
                <img class="rounded-t-lg" src="{{ url('/storage/'.$img->name)}}" alt="picture here" />
                @break
              </a>
              @endforeach
              <div class="p-5">
                  <a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $adventure->title }}</h5>
                  </a>
                  <p class="mb-2 font-light text-gray-600 italic">{{ $adventure->created_at }}</p>
                  <p class="mb-3 font-normal text-gray-700">{{ Str::limit($adventure->description,50) }}</p>
              </div>
              <div class="px-5 pb-5 flex justify-between">
                <p><span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">{{ $adventure->destination->name }}</span></p>
                <form action="{{ route('adventure.show') }}" method="post">
                  @csrf
                  <input type="hidden" name="adventureID" value="{{ $adventure->id }}">
                  <button class="font-bold text-green-900 cursor-pointer" type="submit">Read more</button>
                </form>
              </div>
          </div>
      @endforeach
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
