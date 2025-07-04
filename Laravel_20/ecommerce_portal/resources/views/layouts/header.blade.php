<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @stack('title')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-black">

  <!-- Header  -->
  <header class="bg-blue-700 text-white py-4 px-6 flex justify-between items-center">
    <div class="text-2xl font-bold">E Commerce</div>


    <!-- Search Bar  -->
    <div class="flex space-x-2">
      <input type="text" placeholder="Search" class="px-4 py-2 rounded text-black" />
      <button class="bg-gray-200 text-black px-4 py-2 rounded">Search</button>
    </div>

    <!-- Right Links  -->
    <div class="flex space-x-4 items-center">
      <a href="#" class="text-white hover:underline">Become a Seller</a>
      <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded"><i class="fa-solid fa-cart-shopping"></i> Cart</button>
      <button class="bg-orange-500 hover:bg-orange-600 text-white px-3 py-1 rounded"><i class="fa-solid fa-user"></i> Login</button>
    </div>
  </header>


  <nav class="bg-gray-100 border-gray-200 flex items-center ">
    <div class="max-w-screen-xl mx-auto p-4">
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg   md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0   -800 md:dark:bg-gray-900  ">
          <li>
            <a href="{{url('category/electronics')}}" class="block py-2 px-3 bg-blue-700 rounded-sm md:bg-transparent md:p-0 md:dark:text-gray-500" aria-current="page">Mobile</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0   rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 text-blue-700  ">Fashion</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-blue-700 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Electronics</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-blue-700 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Furniture</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 md:p-0 text-blue-700 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Grocery</a>
          </li>
          <li>
            <a href="{{url('category/electronics/tv')}}" class="block py-2 px-3 md:p-0 text-blue-700 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Applinces</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>