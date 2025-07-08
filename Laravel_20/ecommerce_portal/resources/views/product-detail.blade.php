@extends('layouts.main')

@push('title')
<title>Product Details</title>
@endpush

@section('content')

<div class="container-full bg-white p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Product Details</h1>
</div>

<div class="max-w-6xl mx-auto p-6">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
    <!-- Product Image -->
    <div class="flex justify-center">
      <img src="https://www.refactoringui.com/_next/static/media/book.43eb3b9aec83fb89.png" alt="Women Shoes" class="rounded-lg shadow-md w-80" />
    </div>

    <!-- Product Info -->
    <div>
      <h2 class="text-2xl font-semibold mb-2">Women Shoes</h2>
      <p class="text-xl text-gray-800 font-bold mb-2">₹499.00</p>

      <!-- Star Rating -->
      <div class="flex items-center space-x-1 mb-1">
        <span class="text-orange-400">★</span>
        <span class="text-orange-400">★</span>
        <span class="text-orange-400">★</span>
        <span class="text-orange-400">★</span>
        <span class="text-gray-400">★</span>
        <span class="ml-2 text-sm text-gray-600">2 Customer Reviews</span>
      </div>

      <!-- Product Short Description -->
      <p class="text-gray-600 mb-4">
        It is a long established fact that a reader will be distracted by the readable content of a page when looking
        at its layout...
      </p>

      <!-- Action Buttons -->
      <div class="flex space-x-4">
        <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">Add to cart</button>
        <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg">Buy Now</button>
      </div>
    </div>
  </div>
         
  <!-- Product Description -->
  <div class="mt-10">
    <h3 class="text-xl font-semibold mb-2">Product Description</h3>
    <p class="text-gray-700">
      It is a long established fact that a reader will be distracted by the readable content of a page when looking at
      its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters...
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt praesentium illum ducimus facere perspiciatis esse magnam? Quo repellat quidem officia commodi explicabo, possimus ducimus voluptas laborum vero asperiores doloremque nam rerum sed neque atque in beatae eum vel! Autem incidunt deleniti non, adipisci nam beatae id tempora illum atque modi in quidem similique quia! Deserunt enim id exercitationem libero vel commodi, laudantium nisi hic fuga magnam at asperiores nostrum necessitatibus voluptate eaque deleniti facere! Deserunt, iusto natus quisquam veritatis molestiae, nihil a harum dolorum minima nesciunt adipisci id fuga voluptates laborum at labore? Natus facere doloremque, voluptatem dolore voluptates facilis!
    </p>
  </div>
</div>
 
 
@endsection