@extends('layouts.main')

@push('title')
<title>Home Page</title>
@endpush

@section('content')

<div class="container-full bg-white p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Category</h1>
</div>


<!-- Best Electronic    -->
<section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Best Electronic</h2>

        <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg-grid-cols-4">
            <!-- Product Card -->
            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://images.unsplash.com/photo-1741850821397-ed0e5d9bc125?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold text-gray-800 text-center">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2 text-center">Short product description goes here.</p>

                <div class="flex justify-between items-center mt-4 ">
                    <span class="text-indigo-600 font-bold text-lg ">$49.00</span>
                    <button class="bg-indigo-600 text-white px-4 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://images.unsplash.com/photo-1741850821397-ed0e5d9bc125?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold text-gray-800 text-center">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2 text-center">Short product description goes here.</p>

                <div class="flex justify-between items-center mt-4 ">
                    <span class="text-indigo-600 font-bold text-lg ">$49.00</span>
                    <button class="bg-indigo-600 text-white px-4 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
                </div>

            </div>

            <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
                <img src="https://images.unsplash.com/photo-1741850821397-ed0e5d9bc125?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="rounded-lg mb-4 w-full h-48 object-cover">
                <h3 class="text-lg font-semibold text-gray-800 text-center">Product Name</h3>
                <p class="text-gray-600 text-sm mb-2 text-center">Short product description goes here.</p>

                <div class="flex justify-between items-center mt-4 ">
                    <span class="text-indigo-600 font-bold text-lg ">$49.00</span>
                    <button class="bg-indigo-600 text-white px-4 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection